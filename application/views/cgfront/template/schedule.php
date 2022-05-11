
        <section class="py-0">

          <div class="bg-holder overlay" style="background-image:url(<?= base_url() . 'template/cgtemp' ?>/assets/img/1080/JJ-Honda-1080.jpg);" data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">
          </div>
          <!--/.bg-holder-->
  
          <div class="container">
            <div class="row align-items-end min-vh-75">
              <div class="col-lg-8 mb-6">
                <h2 class="text-white display-4 fs-3 fs-md-4" data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll">Schedule and Results</h2>
              </div>
            </div>
          </div>
          <!-- end of .container-->
  
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
        
  










      <!-- ============================================-->
      <!-- <section> begin ============================-->
  <section id="promotionVideo" class='bg-light p-4' >

		<div class="container strokeme">
      <div class="col-lg-11 py-6">

        <ul class="nav nav-tabs font-sans-serif justify-content-end border-bottom border-2 border-danger" id="myTab" role="tablist">
  
          <li class="nav-item"><a class="nav-link active" id="contact-tab" data-bs-toggle="tab" href="#tab-contact" role="tab" aria-controls="tab-contact" aria-selected="false"><?= strtoupper($title) ?></a></li>
        
      
        </ul>
        <!-- border-x -->
        <div class="tab-content  border-bottom p-3" id="myTabContent">
          
          <div class="tab-pane fade show active" id="tab-contact" role="tabpanel" aria-labelledby="contact-tab">

          
            <div class="match-day">

              <?php foreach($schedule as $sch): ?>
              <div class="race">
                <h3 class="text-danger border-bottom border-3 w-50 border-dark py-2 date" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;"><?= date('M d Y', $sch->from_date) ?></h3>

                  <div class="row">
                      <div class="col-md-4">
                          <span class="display-inline"><h5><?= $sch->race_venue ?></h5> </span>
                              <div class="">
                                  <a class="btn w-100 btn-danger btn-block" href="#!"> <span class="far fa-calendar-times"></span>  NBCSN/ TBD	</a>
                              </div><br>
                              <div class="">
                                  <a class="btn w-100 btn-outline-danger btn-block" href="#!"><span class='fas fa-map-marker-alt'></span> <?= $sch->race_venue ?>	</a>
                              </div>
                      </div>
                      <div class="col-md-8 div-scroll">
                          <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Drivers</th>
                                  <th scope="col">Car</th>
                                  <th scope="col">Standings</th>
                                </tr>
                              </thead>
                              <tbody >
                                <?= table_data($sch->race_schedule_id) ?>                                

                                </tbody>
                            </table>
                      </div>
                  </div>
                  
              </div>

              <?php endforeach; ?>
            </div>
            </div>
          </div>
        </div>
       
      </div>
		</div>
        <!-- end of .container-->

      </section>


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <style>
      .table > :not(caption) > * > * {
          padding: 0.25rem 0.35rem;
          background-color: var(--sparrow-table-bg);
          border-bottom-width: 1px;
          -webkit-box-shadow: inset 0 0 0 9999px var(--sparrow-table-accent-bg);
          box-shadow: inset 0 0 0 9999px var(--sparrow-table-accent-bg);
      }
      .race{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 20px 40px;
        margin-top: 26px;
      }
      .match-day{
        margin-bottom: 30px;
      }
      
      /* .tab-content{
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
      } */
    </style>

<style>
  .nav-tabs .nav-link.active, .nav-pills .show > .nav-link{
    background-color: #d0021b;
    color: white !important;
    font-weight: 900;
    border : 2px solid #d0021b;
  }

  .nav-link{
    color : #000;
    font-weight: 700;
  }


  .schedule>.nav-tabs .nav-link.active, .nav-pills .show > .nav-link{
    background-color: #000;
    color: white !important;
    font-weight: 900;
    border : 2px solid #000;
  }
  .div-scroll{
    overflow-x: scroll;
  }
</style>


   