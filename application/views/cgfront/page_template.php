<?php
    include("template/header.php");
?>


<main class="main min-vh-100" id="top">

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
    
    <div class='container-fluid'>

        <?php 
            include "template/$page";
        ?>    

    </div>
</main>



    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->
    <footer class="footer bg-black text-600 py-4 font-sans-serif text-center overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 order-lg-2 position-relative"><a class="indicator indicator-up" href="#top"><span class="indicator-arrow indicator-arrow-one" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.9}'></span><span class="indicator-arrow indicator-arrow-two" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":1.05}'></span></a></div>
          <div class="col-lg-4 text-lg-start mt-4 mt-lg-0">
            <p class="fs--1 text-uppercase ls fw-bold mb-0">Copyright &copy; Chip Ganassi Racing&trade;</p>
          </div>
          <div class="col-lg-4 text-lg-end order-lg-2 mt-2 mt-lg-0">
<!--        <p class="fs--1 text-uppercase ls fw-bold mb-0">Made with<span class="text-danger fas fa-heart mx-1"></span>by <a class="text-600" href="https://themewagon.com/">Themewagon</a></p> -->
          </div>
        </div>
      </div>
    </footer>


    <!--===============================================-->
    <!--    Modal for language selection-->
    <!--===============================================-->
    <!-- Modal-->
    <div class="overflow-hidden">
      <div class="modal fade fade-in" id="languageModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xs mx-auto" role="document">
          <div class="modal-content bg-black">
            <div class="modal-body text-center p-0">
              <button class="btn-close text-white position-absolute top-0 end-0 times-icon mt-2 me-2 p-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              <ul class="list-unstyled my-0 py-4 font-sans-serif">
                <li><a class="text-white fw-bold pt-1 d-block" href="/homes/default.html">English</a></li>
                <li><a class="pt-1 d-block text-500" href="#!">Français</a></li>
                <li><a class="text-500 pt-1 d-block" href="/pages/rtl.html">عربى</a></li>
                <li><a class="pt-1 d-block text-500" href="#!">Deutsche</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>


    


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script>window.twttr = (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
      if (d.getElementById(id)) return t;
      js = d.createElement(s);
      js.id = id;
      js.src = "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
    
      t._e = [];
      t.ready = function(f) {
        t._e.push(f);
      };
    
      return t;
    }(document, "script", "twitter-wjs"));
    
  
    
    </script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/popper/popper.min.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/anchorjs/anchor.min.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/is/is.min.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/bigpicture/BigPicture.js"> </script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/fontawesome/all.min.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/gsap/gsap.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/gsap/customEase.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/gsap/drawSVGPlugin.js"></script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/isotope-layout/isotope.pkgd.min.js"> </script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/vendors/isotope-packery/packery-mode.pkgd.min.js"> </script>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-122907869-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-122907869-1');
    </script>
    <script src="<?=base_url() . 'template/cgtemp' ?>/assets/js/theme.js"></script>

    <script>
      // window.addEventListener('DOMContentLoaded', (event) =>{
        
      //   var iframe = document.getElementsByTagName("iframe")[2];
      //   console.log(iframe)
      //   var elmnt = iframe.contentWindow.document.getElementsByClassName("es-free")[0];
      //   elmnt.style.display = "none";
      // });
      
    </script>


<style>
      .grid-item { width: 200px; }
.grid-item--width2 { width: 400px; }
.child-margin  .col-md-3, .child-margin  .col-md-6{
  margin-bottom: 15px;
}


.child-margin .card:hover {
    -webkit-transform: translate(20px, -10px);
    -ms-transform: translate(10px, -10px);
    transform: translate(10px, -10px);
    -webkit-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
     }


     .child-margin  .card {
		background: white;
  border-radius: 4px;
  box-shadow: 0px 20px 50px #D9DBDF;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease; 
  border: none;
  cursor: pointer;

}

.text-overlay{
  position: absolute;
    bottom: 0px;
    padding: 10px;
    color: #fff;
}
.text-overlay h5{
  color: #fff;
}


.child-margin .card-overlay{
  position: absolute;
    height: 100%;
    top: 0%;
    width: 100%;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.048),rgba(0, 0, 0, 0.048), rgba(0, 0, 0, 0.918));
}


.video-overlay{
  position: absolute;
    right: 0px;
    padding: 15px;
    font-size: 36px;
    font-weight: 500;
}

.isotope-item{
  margin-bottom: 35px;
}

.card-title{
  color: #d0021b;

}



    </style>
  

  </body>

</html>