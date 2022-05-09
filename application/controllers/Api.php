<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('paypal');
        ini_set("memory_limit", "256M");

        $cache_time  =  $this->db->get_where('general_settings',array('type' => 'cache_time'))->row()->value;
        if(!$this->input->is_ajax_request()){
            $this->output->set_header('HTTP/1.0 200 OK');
            $this->output->set_header('HTTP/1.1 200 OK');
            $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');
            $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
            $this->output->set_header('Cache-Control: post-check=0, pre-check=0');
            $this->output->set_header('Pragma: no-cache');
            if($this->router->fetch_method() == 'index' ||
                $this->router->fetch_method() == 'category_news' ||
                    $this->router->fetch_method() == 'archive_news' ||
                        $this->router->fetch_method() == 'photo_gallery' ||
                            $this->router->fetch_method() == 'video_gallery' ||
                                $this->router->fetch_method() == 'reporters'){
                $this->output->cache($cache_time);
            }
        }
        $this->config->cache_query();
        setcookie('lang', $this->session->userdata('language'), time() + (86400), "/");
        $this->Crud_model->package_expiration_check();
    }

    public function index() {
        $page_data['asset_page'] = 'home';
        $page_data['page_name'] = 'home/home-1';
        $page_data['page_title'] = translate('home');
        $page_data['page_meta'] = $this->get_page_meta();
        $listing_news_data = json_decode($this->Crud_model->get_settings_value('ui_settings', 'listing_news', 'value'), true);
        var_dump($listing_news_data);

        // $this->load->view('front/index', $page_data);
    }

    function all_pages($para1 = '', $para2 = '', $para3 = '') {
        $this->load->library('Ajax_pagination');

        // pagination
        if ($para2!='0') {
            $this->db->where('blog_category_id', $para2);
        }
        if ($para3!='0') {
            $this->db->where('blog_sub_category_id', $para3);
        }
        $this->db->where('status', 'published');
        $this->db->where('hide_status', 'false');
        $blog_date = $this->input->post('blog_date');
        if ($blog_date != '') {
            $blog_date_from = strtotime($blog_date . '00:00:00');
            $this->db->where('date>=', $blog_date_from);
            $blog_date_to = strtotime($blog_date . '23:59:59');
            $this->db->where('date<=', $blog_date_to);
        } else {
            if (!empty($this->input->post('date_from'))) {
                $date_from = $this->input->post('date_from');
                $date_from = strtotime($date_from . '00:00:00');

                $this->db->where('date>=', $date_from);
            }
            if (!empty($this->input->post('date_to'))) {
                $date_to = $this->input->post('date_to');
                $date_to = strtotime($date_to . '23:59:59');

                $this->db->where('date<=', $date_to);
            }
        }
        if (!empty($this->input->post('search_text'))) {
            $search_text = $this->input->post('search_text');

            $this->db->like('title', $search_text, 'both');
            $this->db->or_like('summary', $search_text, 'both');
            $this->db->or_like('tag', $search_text, 'both');
        }
        $config['total_rows'] = $this->db->count_all_results('blog');
        $config['base_url'] = base_url() . 'index.php?home/listed/';
        $config['per_page'] = 6;
        $config['uri_segment'] = 5;
        $config['cur_page_giv'] = $para1;

        $function = "filter_blog('0')";
        $config['first_link'] = '&laquo;';
        $config['first_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['first_tag_close'] = '</a></li>';

        $rr = ($config['total_rows'] - 1) / $config['per_page'];
        $last_start = floor($rr) * $config['per_page'];
        $function = "filter_blog('" . $last_start . "')";
        $config['last_link'] = '&raquo;';
        $config['last_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['last_tag_close'] = '</a></li>';

        $function = "filter_blog('" . (int) ($para1 - $config['per_page']) . "')";
        $config['prev_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['prev_tag_close'] = '</a></li>';

        $function = "filter_blog('" . (int) ($para1 + $config['per_page']) . "')";
        $config['next_link'] = '&rsaquo;';
        $config['next_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['next_tag_close'] = '</a></li>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';

        $function = "filter_blog(((this.innerHTML-1)*" . $config['per_page'] . "))";
        $config['num_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['num_tag_close'] = '</a></li>';
        $this->ajax_pagination->initialize($config);

        if ($para2!='0') {
            $this->db->where('blog_category_id', $para2);
        }
        if ($para3!='0') {
            $this->db->where('blog_sub_category_id', $para3);
        }
        $this->db->where('status', 'published');
        $this->db->where('hide_status', 'false');

        if ($blog_date != '') {
            $blog_date_from = strtotime($blog_date . '00:00:00');
            $this->db->where('date>=', $blog_date_from);
            $blog_date_to = strtotime($blog_date . '23:59:59');
            $this->db->where('date<=', $blog_date_to);
        } else {
            if (!empty($this->input->post('date_from'))) {
                $date_from = $this->input->post('date_from');
                $date_from = strtotime($date_from . '00:00:00');

                $this->db->where('date>=', $date_from);
            }
            if (!empty($this->input->post('date_to'))) {
                $date_to = $this->input->post('date_to');
                $date_to = strtotime($date_to . '23:59:59');

                $this->db->where('date<=', $date_to);
            }
        }
        if (!empty($this->input->post('search_text'))) {
            $search_text = $this->input->post('search_text');

            $this->db->like('title', $search_text, 'both');
            $this->db->or_like('summary', $search_text, 'both');
            $this->db->or_like('tag', $search_text, 'both');
        }

        $page_data['blogs'] = $this->db->get('blog', $config['per_page'], $para1)->result_array();
        $page_data['count'] = $config['total_rows'];
        $all_blog =   $this->db->get('blog', $config['per_page'], $para1)->result_object();
        echo(json_encode($all_blog));
        // $this->load->view('front/category_blog/blog', $page_data);
    }


    function all_blogs($para1 = '') {
        $this->load->library('Ajax_pagination');

        $all_result = array();
        $text_result = array();
        $cat_result = array();
        $sub_result = array();
        $after_result = array();
        $before_result = array();
        $final_result = array();

        $category_id = $this->input->post('news_category');
        $sub_category_id = $this->input->post('news_sub_category');
        if ($this->input->post('search_text')) {
            $search_text = $this->input->post('search_text');
        }
        $order_by = $this->input->post('order_by');
        if ($this->input->post('start_date')) {
            $start_date = $this->input->post('start_date');
            $start_date = strtotime($start_date . '00:00:00');
        }
        if ($this->input->post('end_date')) {
            $end_date = $this->input->post('end_date');
            $end_date = strtotime($end_date . '23:59:59');
        }
        $this->db->order_by('news_id','desc');
        $this->db->where('status', 'published');
        $all_id = $this->db->get('news')->result_array();

        foreach ($all_id as $row) {
            $all_result[] = $row['news_id'];
        }
        if ($category_id != '0') {
            $this->db->where('news_category_id', $category_id);
            $this->db->where('status', 'published');
            $cat_search = $this->db->get('news')->result_array();
            foreach ($cat_search as $row) {
                $cat_result[] = $row['news_id'];
            }
        } else {
            $cat_result = $all_result;
        }

        if ($sub_category_id != '0') {
            $this->db->where('news_sub_category_id', $sub_category_id);
            $this->db->where('status', 'published');
            $sub_search = $this->db->get('news')->result_array();
            foreach ($sub_search as $row) {
                $sub_result[] = $row['news_id'];
            }
        } else {
            $sub_result = $all_result;
        }

        if (isset($start_date)) {
            if ($start_date !== '') {
                $this->db->where('date>=', $start_date);
                $this->db->where('status', 'published');
                $after_search = $this->db->get('news')->result_array();
                foreach ($after_search as $row) {
                    $after_result[] = $row['news_id'];
                }
            }
        } else {
            $after_result = $all_result;
        }

        if (isset($end_date)) {
            if ($end_date !== '') {
                $this->db->where('date<=', $end_date);
                $this->db->where('status', 'published');
                $before_search = $this->db->get('news')->result_array();
                foreach ($before_search as $row) {
                    $before_result[] = $row['news_id'];
                }
            }
        } else {
            $before_result = $all_result;
        }

        if (isset($search_text)) {
            if ($search_text !== '') {
                $this->db->like('title', $search_text, 'both');
                $this->db->or_like('summary', $search_text, 'both');
                $this->db->or_like('tag', $search_text, 'both');
                $this->db->where('status', 'published');
                $text_search = $this->db->get('news')->result_array();
                foreach ($text_search as $row) {
                    $text_result[] = $row['news_id'];
                }
            }
        } else {
            $text_result = $all_result;
        }

        $final_result = array_intersect($text_result, $cat_result, $sub_result, $after_result, $before_result);
        if (count($final_result) !== 0) {
            if ($order_by !== 'none') {
                if ($order_by == 'newest') {
                    $this->db->order_by('publish_timestamp', 'desc');
                } elseif ($order_by == 'oldest') {
                    $this->db->order_by('publish_timestamp', 'asc');
                } elseif ($order_by == 'most_viewed') {
                    $this->db->order_by('view_count', 'desc');
                }
            } else {
                $this->db->order_by('news_id', 'desc');
            }
            $this->db->where_in('news_id', $final_result);
            $config['total_rows'] = $this->db->count_all_results('news');
        } else {
            $config['total_rows'] = 0;
        }

        // pagination
        $config['base_url'] = base_url() . 'home/ajax_news_list/';
        $config['per_page'] = 7;
        $config['uri_segment'] = 5;
        $config['cur_page_giv'] = $para1;

        $function = "filter_news('0')";
        $config['first_link'] = '&laquo;';
        $config['first_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['first_tag_close'] = '</a></li>';

        $rr = ($config['total_rows'] - 1) / $config['per_page'];
        $last_start = floor($rr) * $config['per_page'];
        $function = "filter_news('" . $last_start . "')";
        $config['last_link'] = '&raquo;';
        $config['last_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['last_tag_close'] = '</a></li>';

        $function = "filter_news('" . (int) ($para1 - $config['per_page']) . "')";
        $config['prev_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['prev_tag_close'] = '</a></li>';

        $function = "filter_news('" . (int) ($para1 + $config['per_page']) . "')";
        $config['next_link'] = '&rsaquo;';
        $config['next_tag_open'] = '<li><a onClick="' . $function . '">';
    
        $config['next_tag_close'] = '</a></li>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';

        $function = "filter_news(((this.innerHTML-1)*" . $config['per_page'] . "))";
        $config['num_tag_open'] = '<li><a onClick="' . $function . '">';
        $config['num_tag_close'] = '</a></li>';
        $this->ajax_pagination->initialize($config);

        if (count($final_result) !== 0) {
            if ($order_by !== 'none') {
                if ($order_by == 'newest') {
                    $this->db->order_by('news_id', 'desc');
                } elseif ($order_by == 'oldest') {
                    $this->db->order_by('news_id', 'asc');
                } elseif ($order_by == 'most_viewed') {
                    $this->db->order_by('view_count', 'desc');
                }
            } else {
                $this->db->order_by('news_id', 'desc');
            }
            $this->db->where_in('news_id', $final_result);
            $news = $this->db->get('news', $config['per_page'], $para1)->result_array();
            $page_data['news'] = $this->db->get('news', $config['per_page'], $para1)->result_array();
        } else {
            $news = array();
            $page_data['news'] = array();
        }

        $page_data['count'] = $config['total_rows'];
        echo(json_encode($all_id));
        // var_dump($all_id); die;

        // $this->load->view('front/news_list/ajax_list', $page_data);
    }




}




