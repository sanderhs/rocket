@extends('layouts.header')

@section('content')
<div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div>


                  <div class="content">
                      















<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-primary">
                                    <i class="now-ui-icons ui-2_chat-round"></i>
                                </div>
                                <h3 class="info-title">859</h3>
                                <h6 class="stats-title">Messages</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="now-ui-icons business_money-coins"></i>
                                </div>
                                <h3 class="info-title"><small>$</small>3,521</h3>
                                <h6 class="stats-title">Today Revenue</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="now-ui-icons users_single-02"></i>
                                </div>
                                <h3 class="info-title">562</h3>
                                <h6 class="stats-title">Customers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="now-ui-icons objects_support-17"></i>
                                </div>
                                <h3 class="info-title">353</h3>
                                <h6 class="stats-title">Support Requests</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Active Users</h5>
          <h2 class="card-title">34,252</h2>
          <div class="dropdown">
            <button type="button" class="btn btn-round btn-icon dropdown-toggle btn-outline-default no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
            </button>
          	<div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <a class="dropdown-item text-danger" href="#">Remove Data</a>
          	</div>
		      </div>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="activeUsers"></canvas>
          </div>
          <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <div class="flag">
                                <img src="../assets/img/US.png">
                        </div></td>
                        <td>USA</td>
                        <td class="text-right">
                            2.920
                        </td>
                        <td class="text-right">
                            53.23%
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flag">
                                <img src="../assets/img/DE.png">
                        </div></td>
                        <td>Germany</td>
                        <td class="text-right">
                            1.300
                        </td>
                        <td class="text-right">
                            20.43%
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flag">
                                <img src="../assets/img/AU.png">
                        </div></td>
                        <td>Australia</td>
                        <td class="text-right">
                            760
                        </td>
                        <td class="text-right">
                            10.35%
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flag">
                                <img src="../assets/img/GB.png">
                        </div></td>
                        <td>United Kingdom</td>
                        <td class="text-right">
                            690
                        </td>
                        <td class="text-right">
                            7.87%
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flag">
                                <img src="../assets/img/RO.png">
                        </div></td>
                        <td>Romania</td>
                        <td class="text-right">
                            600
                        </td>
                        <td class="text-right">
                            5.94%
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flag">
                                <img src="../assets/img/BR.png">
                        </div></td>
                        <td>Brasil</td>
                        <td class="text-right">
                            550
                        </td>
                        <td class="text-right">
                            4.34%
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Summer Email Campaign</h5>
          <h2 class="card-title">55,300</h2>
          <div class="dropdown">
            <button type="button" class="btn btn-round dropdown-toggle btn-outline-default btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
            </button>
          	<div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <a class="dropdown-item text-danger" href="#">Remove Data</a>
          	</div>
		      </div>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="emailsCampaignChart"></canvas>
          </div>

          <div class="card-progress">
            <div class="progress-container">
              <span class="progress-badge">Delivery Rate</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                  <span class="progress-value">90%</span>
                </div>
              </div>
            </div>

            <div class="progress-container progress-success">
              <span class="progress-badge">Open Rate</span>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  <span class="progress-value">60%</span>
                </div>
              </div>
            </div>

            <div class="progress-container progress-info">
              <span class="progress-badge">Click Rate</span>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
                  <span class="progress-value">12%</span>
                </div>
              </div>
            </div>

            <div class="progress-container progress-warning">
              <span class="progress-badge">Hard Bounce</span>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                  <span class="progress-value">5%</span>
                </div>
              </div>
            </div>

            <div class="progress-container progress-danger">
              <span class="progress-badge">Spam Report</span>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0.11%;">
                  <span class="progress-value">0.11%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Active Countries</h5>
          <h2 class="card-title">105</h2>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="activeCountries"></canvas>
          </div>
          <div id="worldMap" class="map"></div>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
          </div>
        </div>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
      















<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Best Selling Products</h4>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-shopping">
                <thead class="">
                    
<th  class="text-center" >
    
        
    
</th>

<th >
    
        Product
    
</th>

<th >
    
        Color
    
</th>

<th >
    
        Size
    
</th>

<th  class="text-right" >
    
        Price
    
</th>

<th  class="text-right" >
    
        Qty
    
</th>

<th  class="text-right" >
    
        Amount
    
</th>


                </thead>
                <tbody>
                    
                        
    

    
        
            <tr>
    <td>
        <div class="img-container">
            <img src="../assets/img/saint-laurent.jpg" alt="...">
        </div>
    </td>
    <td class="td-name">
        <a href="#jacket">Suede Biker Jacket</a>
        <br /><small>by Saint Laurent</small>
    </td>
    <td>
        Black
    </td>
    <td>
        M
    </td>
    <td class="td-number">
        <small>€</small>3,390
    </td>
    <td class="td-number">
        1
    </td>
    <td class="td-number">
        <small>€</small>549
    </td>

</tr>


        
    

    
        
            <tr>
    <td>
        <div class="img-container">
            <img src="../assets/img/balmain.jpg" alt="...">
        </div>
    </td>
    <td class="td-name">
        <a href="#pants">Jersey T-Shirt</a>
        <br /><small>by Balmain</small>
    </td>
    <td>
        Black
    </td>
    <td>
        M
    </td>
    <td class="td-number">
        <small>€</small>499
    </td>
    <td class="td-number">
        2
    </td>
    <td class="td-number">
        <small>€</small>998
    </td>

</tr>


        
    

    
        
            <tr>
    <td>
        <div class="img-container">
            <img src="../assets/img/prada.jpg" alt="...">
        </div>
    </td>
    <td class="td-name">
        <a href="#nothing">Slim-Fit Swim Short</a>
        <br /><small>by Prada</small>
    </td>
    <td>
        Red
    </td>
    <td>
        M
    </td>
    <td class="td-number">
        <small>€</small>200
    </td>
    <td class="td-number">
        1
    </td>
    <td class="td-number">
        <small>€</small>799
    </td>

</tr>


        
    

    
        
            <tr>
                <td colspan="5">
                </td>
                <td class="td-total">
                    Total
                </td>
                <td class="td-price">
                    <small>€</small>2,346
                </td>
            </tr>
        
    


                    
                </tbody>
            </table>
        </div>
    </div>
</div>

  </div>
</div>

                  </div>

                  <footer class="footer" >
    
    <div class=" container-fluid ">
        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com/">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com/">
                       About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com/">
                       Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>, Designed by <a href="https://www.invisionapp.com/" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a>.
        </div>
    </div>
    


</footer>

               
             </div>
          
        </div>
        
            <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
						<span class="badge filter badge-yellow" data-color="yellow"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            
            <li class="header-title">
                Sidebar Mini
            </li>
            <li class="adjustments-line">

              <div class="togglebutton switch-sidebar-mini">
                <span class="label-switch">OFF</span>
                <input type="checkbox" name="checkbox" checked class="bootstrap-switch"
                  data-on-label=""
                  data-off-label=""
                  />
                <span class="label-switch label-right">ON</span>
              </div>
            </li>

            <li class="button-container">
                <a href="https://www.creative-tim.com/product/now-ui-dashboard-pro" target="_blank" class="btn btn-primary btn-block btn-round">Buy Now</a>
                <a href="https://demos.creative-tim.com/now-ui-dashboard-pro/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Documentation
                </a>
                <a href="https://www.creative-tim.com/product/now-ui-dashboard" target="_blank" class="btn btn-info btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Get Free Demo!
                </a>
            </li>
            

            

            <li class="header-title">Thank you for 95 shares!</li>

            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/ct-now-ui-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>

        
        















<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" ></script>
<script src="../assets/js/core/popper.min.js" ></script>


<script src="../assets/js/core/bootstrap.min.js" ></script>


<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js" ></script>

<script src="../assets/js/plugins/moment.min.js"></script>



<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for Sweet Alert -->
<script src="../assets/js/plugins/sweetalert2.min.js"></script>

<!-- Forms Validations Plugin -->
<script src="../assets/js/plugins/jquery.validate.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/plugins/bootstrap-selectpicker.js" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../assets/js/plugins/fullcalendar.min.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../assets/js/plugins/jquery-jvectormap.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" ></script>


<!--  Google Maps Plugin    -->

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="../../../buttons.github.io/buttons.js"></script>


<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>





<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --><script src="../assets/js/now-ui-dashboard.min44ca.js?v=1.4.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>


  <!-- Sharrre libray -->
<script src="../assets/demo/jquery.sharrre.js"></script>

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
document,'script','../../../connect.facebook.net/en_US/fbevents.js');

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
    $().ready(function(){
        $sidebar = $('.sidebar');
        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
        //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
        //         $('.fixed-plugin .dropdown').addClass('show');
        //     }
        //
        // }

        $('.fixed-plugin a').click(function(event){
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if($(this).hasClass('switch-trigger')){
                if(event.stopPropagation){
                    event.stopPropagation();
                }
                else if(window.event){
                   window.event.cancelBubble = true;
                }
            }
        });

        $('.fixed-plugin .background-color span').click(function(){
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if($sidebar.length != 0){
                $sidebar.attr('data-color',new_color);
            }

            if($full_page.length != 0){
                $full_page.attr('filter-color',new_color);
            }

            if($sidebar_responsive.length != 0){
                $sidebar_responsive.attr('data-color',new_color);
            }
        });

        $('.fixed-plugin .img-holder').click(function(){
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if( $sidebar_img_container.length !=0 && $('.switch-sidebar-image input:checked').length != 0 ){
                $sidebar_img_container.fadeOut('fast', function(){
                   $sidebar_img_container.css('background-image','url("' + new_image + '")');
                   $sidebar_img_container.fadeIn('fast');
                });
            }

            if($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0 ) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $full_page_background.fadeOut('fast', function(){
                   $full_page_background.css('background-image','url("' + new_image_full_page + '")');
                   $full_page_background.fadeIn('fast');
                });
            }

            if( $('.switch-sidebar-image input:checked').length == 0 ){
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $sidebar_img_container.css('background-image','url("' + new_image + '")');
                $full_page_background.css('background-image','url("' + new_image_full_page + '")');
            }

            if($sidebar_responsive.length != 0){
                $sidebar_responsive.css('background-image','url("' + new_image + '")');
            }
        });

        $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function(){
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if($input.is(':checked')){
                if($sidebar_img_container.length != 0){
                    $sidebar_img_container.fadeIn('fast');
                    $sidebar.attr('data-image','#');
                }

                if($full_page_background.length != 0){
                    $full_page_background.fadeIn('fast');
                    $full_page.attr('data-image','#');
                }

                background_image = true;
            } else {
                if($sidebar_img_container.length != 0){
                    $sidebar.removeAttr('data-image');
                    $sidebar_img_container.fadeOut('fast');
                }

                if($full_page_background.length != 0){
                    $full_page.removeAttr('data-image','#');
                    $full_page_background.fadeOut('fast');
                }

                background_image = false;
            }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function(){
          var $btn = $(this);

          if(sidebar_mini_active == true){
              $('body').removeClass('sidebar-mini');
              sidebar_mini_active = false;
              nowuiDashboard.showSidebarMessage('Sidebar mini deactivated...');
          }else{
              $('body').addClass('sidebar-mini');
              sidebar_mini_active = true;
              nowuiDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function(){
              window.dispatchEvent(new Event('resize'));
          },180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function(){
              clearInterval(simulateWindowResize);
          },1000);
        });
    });
  });
</script>
















  <script>
    $(document).ready(function(){
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
      
      demo.initVectorMap();
      
    });
</script>



@endsection











