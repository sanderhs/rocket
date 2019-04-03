 @extends('layouts.header')

@section('content')

<div class="panel-header panel-header-sm">
  
  
  </div>
  
  
                    <div class="content">
                        
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="col-md-10 mr-auto ml-auto">
      <!--      Wizard container        -->
      <div class="wizard-container">
          <div class="card card-wizard" data-color="primary" id="wizardProfile">
              <form action="#" method="">
          <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
  
                  <div class="card-header text-center" data-background-color="orange">
                      <h3 class="card-title">
                         Build Your Profile
                      </h3>
                    
                      <h3 class="description">This information will let us know more about you.</h5>
                        <div class="wizard-navigation">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#about" data-toggle="tab" role="tab" aria-controls="about" aria-selected="true">
                                      <i class="now-ui-icons users_circle-08"></i>
                                      About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#account" data-toggle="tab" data-toggle="tab" role="tab" aria-controls="account" aria-selected="false">
                                      <i class="now-ui-icons ui-1_settings-gear-63"></i>
                                      Account
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#address" data-toggle="tab" data-toggle="tab" role="tab" aria-controls="address" aria-selected="false">
                                      <i class="now-ui-icons ui-1_email-85"></i>
                                      Address
                                    </a>
                                </li>
                            </ul>
                        </div>
                  </div>
  
                  <div class="card-body">
                      <div class="tab-content">
                          <div class="tab-pane show active" id="about">
                            <h5 class="info-text"> Let's start with the basic information (with validation)</h5>
                            <div class="row justify-content-center">
                                  <div class="col-sm-4">
                                      <div class="picture-container">
                                          <div class="picture">
                                              <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture">
                                          </div>
                                          <h6 class="description">Choose Picture</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="input-group form-control-lg">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="now-ui-icons users_circle-08"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" placeholder="First Name (required)" name="firstname">
                                      </div>
  
                                      <div class="input-group form-control-lg">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="now-ui-icons text_caps-small"></i>
                                            </div>
                                          </div>
                                          <input type="text" placeholder="Last Name (required)" class="form-control" name="lastname"/>
                                      </div>
                                  </div>
                                  <div class="col-lg-10 mt-3">
                                      <div class="input-group form-control-lg">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="now-ui-icons text_caps-small"></i>
                                            </div>
                                          </div>
                                          <input type="email" placeholder="Email (required)" class="form-control" name="email"/>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="account">
                              <h5 class="info-text"> What are you doing? (checkboxes) </h5>
                              <div class="row justify-content-center">
                                  <div class="col-lg-10">
                                      <div class="row">
                                          <div class="col-sm-4">
                                              <div class="choice" data-toggle="wizard-checkbox">
                                                  <input type="checkbox" name="jobb" value="Design">
                                                  <div class="icon">
                                                      <i class="now-ui-icons design-2_ruler-pencil"></i>
                                                  </div>
                                                  <h6>Design</h6>
                                              </div>
                                          </div>
                                          <div class="col-sm-4">
                                              <div class="choice" data-toggle="wizard-checkbox">
                                                  <input type="checkbox" name="jobb" value="Code">
                                                  <div class="icon">
                                                      <i class="now-ui-icons business_bulb-63"></i>
                                                  </div>
                                                  <h6>Code</h6>
                                              </div>
                                          </div>
                                          <div class="col-sm-4">
                                              <div class="choice" data-toggle="wizard-checkbox">
                                                  <input type="checkbox" name="jobb" value="Develop">
                                                  <div class="icon">
                                                      <i class="now-ui-icons tech_tv"></i>
                                                  </div>
                                                  <h6>Develop</h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="address">
                              <div class="row justify-content-center">
                                  <div class="col-sm-12">
                                      <h5 class="info-text"> Are you living in a nice area? </h5>
                                  </div>
                                  <div class="col-sm-7">
                                      <div class="form-group">
                                          <label>Street Name</label>
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-sm-3">
                                      <div class="form-group">
                                          <label>Street No.</label>
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>City</label>
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Country</label>
                                          <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
                                              <option value="Afghanistan"> Afghanistan </option>
                                              <option value="Albania"> Albania </option>
                                              <option value="Algeria"> Algeria </option>
                                              <option value="American Samoa"> American Samoa </option>
                                              <option value="Andorra"> Andorra </option>
                                              <option value="Angola"> Angola </option>
                                              <option value="Anguilla"> Anguilla </option>
                                              <option value="Antarctica"> Antarctica </option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
  
                  <div class="card-footer">
                      <div class="pull-right">
                          <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Next' />
                          <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Finish' />
                      </div>
  
                      <div class="pull-left">
                          <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                      </div>
                      <div class="clearfix"></div>
                  </div>
  
              </form>
          </div>
      </div> <!-- wizard container -->
  </div>
  
                    </div>
  
                  
  
                 
               </div>
            
          </div>
          
           
  </div>
  
          
          
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js" ></script>
  <script src="../../assets/js/core/popper.min.js" ></script>
  
  
  <script src="../../assets/js/core/bootstrap.min.js" ></script>
  
  
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js" ></script>
  
  <script src="../../assets/js/plugins/moment.min.js"></script>
  
  
  
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../../assets/js/plugins/bootstrap-switch.js"></script>
  
  <!--  Plugin for Sweet Alert -->
  <script src="../../assets/js/plugins/sweetalert2.min.js"></script>
  
  <!-- Forms Validations Plugin -->
  <script src="../../assets/js/plugins/jquery.validate.min.js"></script>
  
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../../assets/js/plugins/bootstrap-selectpicker.js" ></script>
  
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../../assets/js/plugins/bootstrap-datetimepicker.js"></script>
  
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="../../assets/js/plugins/jquery.dataTables.min.js"></script>
  
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../../assets/js/plugins/bootstrap-tagsinput.js"></script>
  
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../../assets/js/plugins/jasny-bootstrap.min.js"></script>
  
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../../assets/js/plugins/fullcalendar.min.js"></script>
  
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../../assets/js/plugins/jquery-jvectormap.js"></script>
  
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../assets/js/plugins/nouislider.min.js" ></script>
  
  
  <!--  Google Maps Plugin    -->
  
  <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>
  
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../../buttons.github.io/buttons.js"></script>
  
  
  <!-- Chart JS -->
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  
  
  
  
  
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --><script src="../../assets/js/now-ui-dashboard.min44ca.js?v=1.4.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/demo/demo.js"></script>
  
  
    <!-- Sharrre libray -->
  <script src="../../assets/demo/jquery.sharrre.js"></script>
  
  <script>
    $(document).ready(function(){
      
      
      $('#facebook').sharrre({
    share: {
      facebook: true
    },
    enableHover: false,
    enableTracking: false,
    enableCounter: false,
    click: function(api, options){
      api.simulateClick();
      api.openPopup('facebook');
    },
    template: '<i class="fab fa-facebook-f"></i> Facebook',
    url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
  });
  
      $('#google').sharrre({
    share: {
      googlePlus: true
    },
    enableCounter: false,
    enableHover: false,
    enableTracking: true,
    click: function(api, options){
      api.simulateClick();
      api.openPopup('googlePlus');
    },
    template: '<i class="fab fa-google-plus"></i> Google',
    url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
  });
  
      $('#twitter').sharrre({
    share: {
      twitter: true
    },
    enableHover: false,
    enableTracking: false,
    enableCounter: false,
    buttons: { twitter: {via: 'CreativeTim'}},
    click: function(api, options){
      api.simulateClick();
      api.openPopup('twitter');
    },
    template: '<i class="fab fa-twitter"></i> Twitter',
    url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
  });
  
      
      
      var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-46172202-1']);
  _gaq.push(['_trackPageview']);
  
  (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
  })();
  
      // Facebook Pixel Code Don't Delete
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','../../../../connect.facebook.net/en_US/fbevents.js');
  
  try{
    fbq('init', '111649226022273');
    fbq('track', "PageView");
  
  }catch(err) {
    console.log('Facebook Track Error:', err);
  }
  
    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
  />
  
  </noscript>
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <script>
    $(document).ready(function(){
      // Initialise the wizard
      demo.initNowUiWizard();
      setTimeout(function(){
        $('.card.card-wizard').addClass('active');
      },600);
    });
  </script>
  
  
  

@endsection