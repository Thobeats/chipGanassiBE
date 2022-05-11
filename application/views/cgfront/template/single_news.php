
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="page-blog" data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">

        <div class="bg-holder h-100" style="background:linear-gradient(to bottom, rgba(0, 0, 0, 0.048),rgba(0, 0, 0, 0.048), rgba(0, 0, 0, 0.918)),url(<?= base_url() . 'uploads/news_image/' . json_decode($news->img_features,true)[0]['img']; ?>); background-size: cover; background-position:left center;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-end min-vh-75">
            <div class="col">
              <div class="overflow-hidden">
                <h1 class="text-white" data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll"><?= $news->title ?></h1>
              </div>
              <div class="overflow-hidden mb-6">
                <h6 class="mb-0 text-white ls-2 text-uppercase" data-zanim-xs='{"delay":0.8}' data-zanim-trigger="scroll"><?= date('M d Y',$news->date) ?></h6>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



       <!-- <section> begin ============================-->
       <section>

<div class="container">         
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
       
        <div class="col-12">
            <div class='news-content' style='min-height: 60vh'>
                <?= $news->description ?>

            </div>
          

           <div class="h4 text-end text-muted">
              <span class="border-start border-2 border-danger ps-2"><?= $news_reporter->name?></span>
             <!-- <br> <i class="fs-9">Source: <a class="text-danger" href="https://www.indystar.com/story/sports/motor/2021/09/26/indycar-alex-palou-avoids-long-beach-chaos-clinch-2021-title/5877695001/">The Idianpolis Star</a></i> -->
          </div>
           
          <div class="row mt-5 fs-1 align-items-center">
            <div class="col-auto">
              <h6 class="mb-0">Share on</h6>
            </div>
            <div class="col"><a class="text-facebook" href="#!"><span class="fab fa-facebook"></span></a><a class="text-twitter" href="#!"><span class="fab fa-twitter ms-2"></span></a><a class="text-google-plus" href="#!"><span class="fab fa-google-plus-square ms-2"></span></a></div>
          </div>
        </div>
        
      </div>
      
    </div>
    <div class="col-lg-4 mt-6 mt-lg-0 ps-xl-7">
      <div class="row px-2">
        <div class="col">
          <h4 class="mt-5">Related News</h4>
          <?php foreach($related_news as $tag): ?>
          <a class="mt-3 d-inline-block" href="<?= base_url() . 'home/single_news/' . $tag->news_id ?>">
          <img class="card-img-top" src="<?= base_url() . 'uploads/news_image/' . json_decode($tag->img_features,true)[0]['img']; ?>" alt="Card image cap"></a>
            <h5 class="mt-3"> <?= $tag->title ?></h5>
          </a>  
          <?php endforeach; ?>                 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->
