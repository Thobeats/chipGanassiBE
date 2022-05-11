
      <section class="py-0" id="page-profile">

        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-7 px-0">
              <div class="sticky-top overflow-hidden min-vh-50 min-vh-xl-100">
                <div class="bg-holder" style="background-image:url(<?= base_url(). 'uploads/photo_image/' . $img ?>);" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'>
                </div>
                <!--/.bg-holder-->

              </div>
            </div>
            <div class="col-xl-5 py-6">
              <div class="row h-100 flex-center">
                <div class="col-lg-8">
                  <div class="row justify-content-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="col-md-10 col-lg-12 text-black">
                      <div class="overflow-hidden">
                        <h3 data-zanim-xs='{"delay":0.1}'><?= ucfirst($driver->firstname) ." " . ucfirst($driver->lastname)  ?></h3>
                      </div>
                      <div class="overflow-hidden">
                        <h6 class="fw-normal text-uppercase ls mb-4" data-zanim-xs='{"delay":0.2}'>Driver, Chip Ganassi Racing Teams</h6>
                      </div>
                    </div>
              <ul class="nav nav-pills p-2 font-sans-serif" id="pill-myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="pill-bio" data-bs-toggle="tab" href="#pill-tab-bio" role="tab" aria-controls="pill-tab-bio" aria-selected="true">Bio</a></li>
                <li class="nav-item"><a class="nav-link" id="pill-profile-tab" data-bs-toggle="tab" href="#pill-tab-profile" role="tab" aria-controls="pill-tab-profile" aria-selected="false">Profile</a></li>
 <!--           <li class="nav-item"><a class="nav-link" id="pill-contact-tab" data-bs-toggle="tab" href="#pill-tab-contact" role="tab" aria-controls="pill-tab-contact" aria-selected="false">Contact</a></li> -->
              </ul>
              <div class="tab-content mt-3" id="pill-myTabContent">
                <div class="tab-pane fade show active" id="pill-tab-bio" role="tabpanel" aria-labelledby="bio">
                    <p class="mb-0 pe-sm-5 pe-lg-0" data-zanim-xs='{"delay":0.3}'>
                      <?= $driver->bio ?>
                    </p>
                </div>
                <div class="tab-pane fade driver-info" id="pill-tab-profile" role="tabpanel" aria-labelledby="profile-tab">
					<table class="table table-striped">
						<tbody>
						<tr>
							<td>Team:</td>
							<td><?= ucfirst($driver->team) ?></td>
						</tr>
						<tr>
							<td>Birthday:</td>
							<td><?= date('M d Y', strtotime($driver->dob)) ?></td>	
						</tr>
						<tr>
							<td>Birthplace:</td>
							<td><?= ucfirst($driver->birthplace) ?></td>
						</tr>
						<tr>
							<td>Residence:</td>
							<td><?= ucfirst($driver->residence) ?></td>
						</tr>
						<tr>
							<td>Height:</td>
							<td><?= $driver->height ?></td>
						</tr>
						<tr>
							<td>Weight:</td>
							<td><?= $driver->weight ?></td>	
						</tr>
						<tr>
							<td>Sponsor:</td>
							<td><?= ucfirst($driver->sponsor) ?>A</td>
						</tr>
						<tr>
							<td>Car:</td>
							<td><?= ucfirst($driver->car) ?></td>
						</tr>
						<tr>
							<td>Crew Chief:</td>
							<td><?= ucfirst($driver->crew_chief) ?></td>
						</tr>
						<tr>
							<td>Website:</td>
							<td><a href="https://<?= $driver->website ?>"><?= ucfirst($driver->website) ?></a></td>
						</tr>
						</tbody>
					</table>
				</div>
			  </div>
 <!--                <div class="tab-pane fade" id="pill-tab-contact" role="tabpanel" aria-labelledby="contact-tab">Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco.</div>
              </div>
	               <div class="col-md-7 col-lg-12">
                      <div class="overflow-hidden">
                       
                      </div>
                    </div> -->
				<div class="col-md3 col-lg-12 mt-6 mt-md-0 mt-lg-6">
					<div class="row">
        				<div class="col-sm-auto pe-6">
							<h4 class="text-uppdercase ls" data-zanim-xs='{"delay":0.4}'>The Partnership</h4>
							<img class="logo" data-zanim-xs='{"animation":"slide-left","delay":0.1}' src="<?= base_url() . 'uploads/photo_image/' . json_decode($partner->logo, true)[0]['img'];?>" />
						</div>
					</div>
				<br>
					 
					<h6>About <?= $partner->name ?>:</h6>
				<p>
					<?= $partner->bio ?>
				</p>
				</div>
				 
                    <div class="col-md-3 col-lg-12 mt-6 mt-md-0 mt-lg-6">
                      <div class="overflow-hidden">
                        <div data-zanim-xs='{"delay":0.6}'>
                          <h6 class="text-uppercase ls mt-4">Follow Me</h6>
                          <div class="mt-3 fs--1"><a class="btn btn-outline-light btn-xs border-300 me-2" href="https://twitter.com/AlexPalou"><span class="fab fa-twitter text-600"></span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

