<!-- CONTENT AREA -->
<?php
$top_news_data = json_decode($this->Crud_model->get_settings_value('ui_settings','top_news','value'),true);
$sliding_news = json_decode($this->Crud_model->get_settings_value('ui_settings','sliding_news','value'),true);
$detail_news_data = json_decode($this->Crud_model->get_settings_value('ui_settings','detail_news','value'),true);
$photo_gal_data = json_decode($this->Crud_model->get_settings_value('ui_settings','photo_gal','value'),true);
$special_category_data = json_decode($this->Crud_model->get_settings_value('ui_settings','special_category','value'),true);
$video_gal_data = json_decode($this->Crud_model->get_settings_value('ui_settings','video_gal','value'),true);
$home_cat_data = json_decode($this->Crud_model->get_settings_value('ui_settings','home_cat','value'),true);
?>
<div class="content-area">
	<?php
		if($top_news_data['status']=='ok'){
			include 'top_news.php';
		}
	?>
    <?php
    // $this->db->limit(5);
    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    // $this->db->where('news_speciality_id',3);
    $this->db->where('status','published');
    $top_news	= $this->db->get('news')->result_array();
?>

    <div class="row child-margin" data-masonry='{"percentPosition": true }' data-isotope='{"layoutMode":"packery"}'>
    <?php $news_count = 0; ?>
    <?php if(isset($top_news)){  ?>
   <?php 
        foreach ($top_news as $news) {
            $news_count++;
            $news_id = $news['news_id'];
            $title = $news['title'];
            $img_features = $news['img_features'];
            if($news_count == 1 || $column3 == 4 || $column3 == 5 ){
                $col_val = '6';
                $column3 == 4  ? $column3++ : $column3 = 0;
                
            }else{
                $column3++;
                $col_val = '3';
            }
           
   ?>
   
   <?php if($col_val == 6){ ?>
    <div class="col-md-<?= $col_val ?> isotope-item">
        <div class="card video">
            <a href="<?php echo $this->Crud_model->news_link($news_id);?>">
                <div class="card-overlay"></div>
                <div class="text-overlay">
                    <h5 class="text-white"><?php echo word_limiter($title,10);?></h5>
                </div>
                <?php
                            $img = json_decode($img_features,true);
                            foreach($img as $row){
                                if($row['index'] == 0){
                        ?>
                        
                        <img class="card-img-top" src="<?php echo $this->Crud_model->file_view('news',$news_id,'','','thumb','src','multi','one');?>" data-src="<?php echo $this->Crud_model->file_view('news',$news_id,'','','thumb','src','multi','one');?>" alt="">
                        <!-- <img class="card-img-top" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$news_id,'','','thumb','src','multi','one');?>" alt=""> -->
                <?php }}?>
            </a>
        </div>
    </div>
    <?php }else{ ?>
        <div class="col-md-<?= $col_val ?> isotope-item">
            <div class="card">
                <a class="overflow-hidden" href="<?php echo $this->Crud_model->news_link($news_id);?>">

                <?php
                            $img = json_decode($img_features,true);
                            foreach($img as $row){
                                if($row['index'] == 0){
                        ?>
                        
                        <img class="card-img-top" src="<?php echo $this->Crud_model->file_view('news',$news_id,'','','thumb','src','multi','one');?>" alt="Card image cap"></a>
                <?php }}?>



                <div class="card-body">
                    <a class="text-1000" href="<?php echo $this->Crud_model->news_link($news_id);?>">
                        <h5 class="card-title"><?php echo word_limiter($title,10);?></h5>
                    </a>
                    <!-- <hr class="text-300">
                    <div class="d-flex align-items-center">
                        <img class="me-3 rounded-circle avatar" src="../../assets/img/team/12.jpg" alt="avatar">
                        <div class="font-sans-serif">
                            <a class="text-dark" href="#!">
                            <h6 class="mb-0">Gavin Belson</h6>
                            </a>
                            <span class="fs--1 text-1000 font-sans-serif">May 23 · 6 min read</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>   
    <?php } ?>
  



   <?php

        }
    ?>

<?php

}
?>







<!-- <section class="page-section pad-tb-5">
    <div class="container">
        <div class="row mar-lr--5">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 <?php if($top_news_data['style']==2){ echo 'pull-right';} ?>">
				<?php
					if(isset($top_news[0])){
						echo $this->Html_model->news_box('sqr_md','2',$top_news[0]); 
					}
				?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            	<div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<?php
							if(isset($top_news[1])){
								echo $this->Html_model->news_box('sqr_sm','2',$top_news[1]); 
							}
						?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <?php
							if(isset($top_news[2])){
								echo $this->Html_model->news_box('sqr_sm','2',$top_news[2]); 
							}
						?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mar-t-10">
        				<?php
							if(isset($top_news[3])){
								echo $this->Html_model->news_box('sqr_sm','2',$top_news[3]); 
							}
						?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mar-t-10">
                        <?php
							if(isset($top_news[4])){
								echo $this->Html_model->news_box('sqr_sm','2',$top_news[4]); 
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   -->
</div>
<style>
.block-title{
	/*margin-left:-10px;*/
	margin-bottom:10px;
}
h5{
    font-size: 21px !important;
}
.editorial-card, .newslist-card .card, .card{
    overflow: hidden;
    /* border-radius: var(--pk-border-radius-md); */
    box-shadow: 0 6px 12px rgb(0 0 0 / 10%);
}
.card{
    height: 100% !important;
}
.card-body{
    padding: 20px;
}
.card-body a {
    text-decoration: none;
}
</style>
