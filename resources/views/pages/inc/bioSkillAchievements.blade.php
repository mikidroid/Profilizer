<!-- Card -->
<div class="card card-image "
  style="background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

  <!-- Content -->
  <div class="rgba-black-strong py-5 px-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8">

        <!--Accordion wrapper-->
        <div class="accordion md-accordion accordion-5" id="accordionEx5" role="tablist"
          aria-multiselectable="true">

          <!-- Accordion card Bio-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading30">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse30" aria-expanded="false"
                aria-controls="collapse30">
                <i class="fas mt-1 fa-tag fa-1x p-3 mr-1 float-left black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase white-dark mb-0 py-3 pt-1 text-dark">
                  BIO
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse30" class="collapse" role="tabpanel" aria-labelledby="heading30"
              data-parent="#accordionEx5">
              <div class="card-body text-dark z-depth-1">
               
              {!!$bio!!}
               
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card Skills-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading31">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse31" aria-expanded="true"
                aria-controls="collapse31">
                <i class="fas fa-tag fa-1x p-3 mr-1 float-left pt-2 mt-2 black-text" aria-hidden="true"></i>
                <h4 class="text-uppercase text-dark mb-0 py-3 mt-1">
                  Skills
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="heading31"
              data-parent="#accordionEx5">
              <div class="card-body text-dark z-depth-1">
               {!!$skills!!}
               
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card Achievements-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse32" aria-expanded="true"
                aria-controls="collapse32">
               <i class="fas fa-tag fa-1x p-3 mr-1 float-left black-text mt-1" aria-hidden="true"></i>
                <h5 class="text-uppercase text-dark white-dark mb-0 py-3 mt-1">
                 Achievements
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse32" class="collapse" role="tabpanel" aria-labelledby="heading32"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-dark z-depth-1">
{!!$achievements!!}  
              </div>
            </div>
          </div>
          <!-- Accordion card -->
        </div>
        <!--/.Accordion wrapper-->

      </div>
    </div>
  </div>
  <!-- Content -->
</div>
<!-- Card -->