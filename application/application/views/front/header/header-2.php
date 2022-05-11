<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>/html/node_modules/plyr/dist/plyr.polyfilled.min.js"></script>

    <nav class="fancynavbar fancynavbar-expand-lg" data-zanim-lg='{"from":{"opacity":1,"x":70},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}' data-zanim-xs='{"from":{"opacity":1,"y":-37},"to":{"opacity":1,"y":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}' data-zanim-trigger="scroll" data-exclusive="true">
      <div class="fancynavbar-togglerbar" data-onscroll-fade-in="data-onscroll-fade-in"><a class="fancynavbar-brand" href="/public/promotion.html"><img class="fancynavbar-brand-img" src="<?php echo base_url(); ?>/html/assets/img/logo/cgr.png" alt="" width="50" height="25" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll" /></a>
        <div class="fancynavbar-toggler">
          <svg class="fancynavbar-toggler-icon" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.5}' data-zanim-trigger="scroll">
            <path id="path-top" d="M20,25c0,0,22,0,30,0c16,0,18.89,40.71-.15,21.75C38.7,35.65,19.9,16.8,19.9,16.8"></path>
            <path id="path-middle" d="M20,32h30"></path>
            <path id="path-bottom" d="M19.9,46.98c0,0,18.8-18.85,29.95-29.95C68.89-1.92,66,38.78,50,38.78c-8,0-30,0-30,0"></path>
          </svg>
        </div>
        <div class="fancynavbar-addon" data-zanim-lg='{"from":{"opacity":1,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll"><a class="fancynavbar-addon-item" href="#!"><span class="fab fa-twitter"></span></a><a class="fancynavbar-addon-item" href="#languageModal" data-bs-toggle="modal"><span class="font-sans-serif ls fw-black fs--1 d-block">EN</span></a>
        </div>
      </div>
      <div class="fancynavbar-collapse">
        <ul class="fancynavbar-nav">
		  <li class="fancynav-item"><a class="fancynav-link" href="/public/promotion.html"><span class="fancynav-link-content">Home</span></a></li>
		  <li class="fancynav-item"><a class="fancynav-link" href="/public/news.html"><span class="fancynav-link-content">News</span></a></li>	
          <li class="fancynav-item fancy-dropdown"><a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">Drivers</span></a>
            <div class="fancy-dropdown-menu">
              <div class="row pb-4 pt-3">
                <div class="col-auto">
					<a class=" false fancy-dropdown-item" href="/public/drivers/sdixon.html">Scott Dixon</a>
					<a class=" false fancy-dropdown-item" href="/public/drivers/apalou.html">Alex Palou</a>
					<a class=" false fancy-dropdown-item" href="/public/drivers/mericsson.html">Marcus Ericsson</a>
					<a class=" false fancy-dropdown-item" href="/public/drivers/jjohnson.html">Jimmie Johnson</a>
					<a class=" false fancy-dropdown-item" href="/public/drivers/tkanaan.html">Tony Kanaan</a>
					<a class=" false fancy-dropdown-item" href="/public/drivers/kmagnussen.html">Kevin Magnussen</a>
					<a class=" false fancy-dropdown-item" href="/public/drivers/rvanderzande.html">Renger van der Zande</a>
					<a class=" false fancy-dropdown-item" href="/public/drivers/sprice.html">Sara Price</a>
					<a class=" false fancy-dropdown-item" href="/public/drivers/kleduc.html">Kyle LeDuc</a>
                </div>
              </div>
            </div>
          </li>
			<li class="fancynav-item fancy-dropdown"><a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">Our Teams</span></a>
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
		  </li>
			<li class="fancynav-item fancy-dropdown"><a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">Schedule &amp; Results</span></a>
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
			  <div class="row pb-4 pt-3">
				<div class="col-auto">
					<a class=" false fancy-dropdown-item" href="/public/about/history.html">Our History</a>
					<a class=" false fancy-dropdown-item" href="/public/about/careers.html">Career Opportunities</a>
					<a class=" false fancy-dropdown-item" href="/public/about/privacy.html">Privacy Statement</a>
				</div>
			  </div>
			</div>
		  </li>		
          <li class="fancynav-item"><a class="fancynav-link" href="/public/contact.html"><span class="fancynav-link-content">Contact</span></a></li>
        </ul>
      </div>
    </nav>

    