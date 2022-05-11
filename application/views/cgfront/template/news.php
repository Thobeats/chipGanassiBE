<?php
    include("header.php");
?>
    <main class="main min-vh-100" id="top">

  <!-- ============================================-->
      <!-- Preloader ==================================-->
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale-pulse-out-rapid">
            <div> </div>
            <div></div>
            <div></div>
            <div></div>
            <div> </div>
          </div>
        </div>
      </div>
      <!-- ============================================-->
      <!-- End of Preloader ===========================-->
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="page-blog" data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">

        <div class="bg-holder h-100" style="background:linear-gradient(to bottom, rgba(0, 0, 0, 0.048),rgba(0, 0, 0, 0.048), rgba(0, 0, 0, 0.918)),url(<?= base_url() . 'template/cgtemp'?>/assets/img/1080/ME-Detroit-1080.jpg); background-size: cover; background-position:top center;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-end min-vh-75">
            <div class="col">
              <div class="overflow-hidden">
                <h1 class="text-white" data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll">Latest News</h1>
              </div>
              <div class="overflow-hidden mb-6">
                <h6 class="mb-0 text-white ls-2 text-uppercase" data-zanim-xs='{"delay":0.8}' data-zanim-trigger="scroll">follow the latest</h6>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
<section >

<div class="container">
    <div class="row child-margin" data-masonry='{"percentPosition": true }' data-isotope='{"layoutMode":"packery"}'>
            <?php 
            $col_size = [6,6,6,3,3,3,3,6,3,3,3,3,6,6];
            $pos = [0,570,0,570,855,570,855,570,0,285,0,285,570,0];
            $i = 0;
            foreach($news as $new):
               
            
            ?>
                <div style='postion: aboslute; left: <?= $pos[$i] . 'px'  ?>;' class="col-md-<?= $col_size[$i] ?> isotope-item" >
                <div class="card video">
                    <a href="<?= base_url() . 'home/single_news/' . $new->news_id ?>"> 
                    <div class="card-overlay"></div>
                    <div class="text-overlay">
                        <h5 class="text-white"><?= $new->title ?></h5>
                    </div>
                    <img class="card-img-top" src="<?= base_url() . 'uploads/news_image/' . json_decode($new->img_features,true)[0]['img']; ?>" alt="Card image cap"></a>
                    
                </div>
                </div>
            <?php $i++; endforeach; ?>
        </div>
   </div>
</section>

            </main>

<?php
    include("footer.php");
?>