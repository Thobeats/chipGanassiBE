<?php
$where = "parent = 1";
$navs = $this->db->where($where)->get('home_navs')->result_array();

?>



<!DOCTYPE html>
<html class="has-sidemenu" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?= ucfirst($title) ?? 'Chip Ganassi Racing Teams' ?></title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url() . 'template/cgtemp' ?>/assets/img/logo/cgr.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url() . 'template/cgtemp' ?>/assets/img/logo/cgr.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() . 'template/cgtemp' ?>/assets/img/logo/cgr.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url() . 'template/cgtemp' ?>/assets/img/logo/cgr.png">
    <link rel="manifest" href="<?=base_url() . 'template/cgtemp' ?>/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?=base_url() . 'template/cgtemp' ?>/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
	<link href="<?=base_url() . 'template/cgtemp' ?>/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?=base_url() . 'template/cgtemp' ?>/vendors/prism/prism.css" rel="stylesheet">
    <link href="<?=base_url() . 'template/cgtemp' ?>/vendors/loaders.css/loaders.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono%7cPT+Serif:400,400i%7cLato:100,300,400,700,800,900" rel="stylesheet">
    <link href="<?=base_url() . 'template/cgtemp' ?>/assets/css/theme.css" rel="stylesheet" />
    <link href="<?=base_url() . 'template/cgtemp' ?>/assets/css/user.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<link href="<?=base_url() . 'template/cgtemp' ?>/node_modules/plyr/dist/plyr.css" rel="stylesheet">

 
  </head>


  <body class="overflow-hidden-x">
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="<?=base_url() . 'template/cgtemp' ?>/node_modules/plyr/dist/plyr.polyfilled.min.js"></script>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="sNYizG5O"></script>

<nav class="fancynavbar fancynavbar-expand-lg" data-zanim-lg='{"from":{"opacity":1,"x":70},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}' data-zanim-xs='{"from":{"opacity":1,"y":-37},"to":{"opacity":1,"y":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}' data-zanim-trigger="scroll" data-exclusive="true">
  <div class="fancynavbar-togglerbar" data-onscroll-fade-in="data-onscroll-fade-in"><a class="fancynavbar-brand" href="<?= base_url() ?>"><img class="fancynavbar-brand-img" src="<?=base_url() . 'template/cgtemp' ?>/assets/img/logo/cgr.png" alt="" width="50" height="25" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll" /></a>
    <div class="fancynavbar-toggler">
    <svg class="fancynavbar-toggler-icon" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.5}' data-zanim-trigger="scroll">
    <path id="path-top" d="M20,25c0,0,22,0,30,0c16,0,18.89,40.71-.15,21.75C38.7,35.65,19.9,16.8,19.9,16.8"></path>
    <path id="path-middle" d="M20,32h30"></path>
    <path id="path-bottom" d="M19.9,46.98c0,0,18.8-18.85,29.95-29.95C68.89-1.92,66,38.78,50,38.78c-8,0-30,0-30,0"></path>
  </svg>
    </div>
    <div class="fancynavbar-addon" data-zanim-lg='{"from":{"opacity":1,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll"><a class="fancynavbar-addon-item" href="https://twitter.com/CGRTeams"><span class="fab fa-twitter"></span></a><a class="fancynavbar-addon-item" href="#languageModal" data-bs-toggle="modal"><span class="font-sans-serif ls fw-black fs--1 d-block">EN</span></a>
    </div>
  </div>
  <div class="fancynavbar-collapse">
    <ul class="fancynavbar-nav">
      <?php
        foreach($navs as $nav):

        $children = get_children($nav['id']);
      ?>
      <li class="fancynav-item <?= $nav['has_child'] == 1 ? 'fancy-dropdown' : '' ?>"><a class="fancynav-link <?= $nav['has_child'] == 1 ? 'fancy-dropdown-toggle' : '' ?>" href="<?= $nav['has_child'] == 1 ? 'JavaScript:void(0)': base_url(). 'home' . $nav['nav_link'] ?>"><span class="fancynav-link-content"><?= ucwords($nav['nav_name']) ?></span></a>
        <?= $children ?> 
   
      </li>
      
      <?php endforeach; ?>
      <!-- <li class="fancynav-item"><a class="fancynav-link" href="/public/promotion.html"><span class="fancynav-link-content">Home</span></a></li>
      <li class="fancynav-item"><a class="fancynav-link" href="/public/news.html"><span class="fancynav-link-content">News</span></a></li>	
          <li class="fancynav-item fancy-dropdown"><a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">Drivers</span></a>
            <div class="fancy-dropdown-menu">
              <div class="row pb-4 pt-3">                <div class="col-auto">
          <a class=" false fancy-dropdown-item" href="/public/drivers/sdixon.html">Scott Dixon</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/apalou.html">Alex Palou</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/mericsson.html">Marcus Ericsson</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/jjohnson.html">Jimmie Johnson</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/tkanaan.html">Tony Kanaan</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/sbourdais.html">Sebastien Bourdais</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/rvanderzande.html">Renger van der Zande</a>
            <a class=" false fancy-dropdown-item" href="/public/drivers/kmagnussen.html">Kevin Magnussen</a>
            <a class=" false fancy-dropdown-item" href="/public/drivers/ebamber.html">Earl Bamber</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/alynn.html">Alex Lynn</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/rhunterreay.html">Ryan Hunter-Reay</a>
            <a class=" false fancy-dropdown-item" href="/public/drivers/sprice.html">Sara Price</a>
          <a class=" false fancy-dropdown-item" href="/public/drivers/kleduc.html">Kyle LeDuc</a>
                </div>
              </div>
            </div>
          </li> -->
      <!--<li class="fancynav-item fancy-dropdown"><a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">Our Teams</span></a>
      <div class="fancy-dropdown-menu">
        <div class="row pb-4 pt-3">
        <div class="col-auto">
          <a class=" false fancy-dropdown-item" href="/public/teams/01_car.html">01 Car</a>
          <a class=" false fancy-dropdown-item" href="/public/teams/02_car.html">02 Car</a>
          <a class=" false fancy-dropdown-item" href="/public/teams/8_car.html">8 Car</a>
          <a class=" false fancy-dropdown-item" href="/public/teams/9_car.html">9 Car</a>
          <a class=" false fancy-dropdown-item" href="/public/teams/10_car.html">10 Car</a>
          <a class=" false fancy-dropdown-item" href="/public/teams/48_car.html">48 Car</a>
          <a class=" false fancy-dropdown-item" href="/public/teams/99_car.html">99 Car</a>
        </div>
        </div>
      </div>
      </li><-->
      <!-- <li class="fancynav-item fancy-dropdown"><a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">Schedule &amp; Results</span></a>
      <div class="fancy-dropdown-menu">
        <div class="row pb-4 pt-3">
        <div class="col-auto">
          <a class=" false fancy-dropdown-item" href="/public/scoring/indycar.html">IndyCar</a>
          <a class=" false fancy-dropdown-item" href="/public/scoring/imsa.html">IMSA DPi</a>
          <a class=" false fancy-dropdown-item" href="/public/scoring/extreme-e.html">Extreme E</a>
        </div>
        </div>
      </div>
      </li>
      <li class="fancynav-item fancy-dropdown"><a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">About CGR</span></a>
      <div class="fancy-dropdown-menu">
        <div class="row pb-4 pt-3">				<div class="col-auto">
          <a class=" false fancy-dropdown-item" href="/public/about/history.html">Our History</a>
          <a class=" false fancy-dropdown-item" href="/public/about/careers.html">Career Opportunities</a>
        </div>
        </div>
      </div>
      </li>		
          <li class="fancynav-item"><a class="fancynav-link" href="/public/contact.html"><span class="fancynav-link-content">Contact</span></a></li>
        </ul> -->
  </div>
</nav>