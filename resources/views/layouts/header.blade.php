<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    R O C K E T!
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="../public/assets/css/all.css" rel="stylesheet">  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/wizard.css" rel="stylesheet" />

  <link href="../assets/css/now-ui-dashboard.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
      <link href="../assets/fullcalendar-3.9.0/fullcalendar.min.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <img class="logoimg" src="../assets/img/genius2.png">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li id="inicio">
            <a href='{!! url("/dashboard"); !!}'>
              <i class="now-ui-icons design_app"></i>
              <p>Início</p>
            </a>
          </li>
          <li id="core">
            <a href='{!! url("/core"); !!}'>
              <i class="now-ui-icons business_bank"></i>
              <p>O Core</p>
            </a>
          </li>
          <li id="estatisticas">
            <a href="./icons.php">
              <i class="now-ui-icons business_chart-bar-32"></i>
              <p>Estatísticas</p>
            </a>
          </li>
          <li id="relatorios">
            <a href="./map.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Relatórios</p>
            </a>
          </li>
          <li>
            <li id="calendario">
            <a href='{!! url("/calendario"); !!}'>
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Calendário</p>
            </a>
          </li>
          <li id="contatos">
            <a href='{!! url("/contatos"); !!}'>
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Contatos</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
     
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="#">Configurações</a>
                  <a class="dropdown-item" href="#">Sair</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')

      <!-- End Navbar -->
      <!-- End Navbar -->
        <!--   Core JS Files   -->
<!--   <script src="../assets/js/jquery-3.2.1.min.js"></script>
 -->  

    <script src="../assets/fullcalendar-3.9.0/lib/jquery.min.js"></script>


 <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/fullcalendar-3.9.0/lib/moment.min.js"></script>
        <script src="../assets/js/wizard.js"></script>

    <script src="../assets/fullcalendar-3.9.0/lib/jquery-ui.min.js"></script>


  <script src="../assets/fullcalendar-3.9.0/fullcalendar.min.js"></script>
  <script src="../assets/fullcalendar-3.9.0/locale/pt-br.js"></script>

  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>


  <script src="../assets/js/calendario.js"></script>




  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <link href="../assets/css/all.css" rel="stylesheet">