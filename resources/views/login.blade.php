<!DOCTYPE html>
<html lang="pt-br">

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
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="" action="">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="../assets/img/genius1.png" alt="">
                </div>
                <h3 style="font-size: 50px; letter-spacing:10px;">ROCKET!</h3>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </span>
                  </div>
                  <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Digite seu e-mail" id="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </span>
                  </div>
                  <input type="password" name="password" id="password" placeholder="Digite sua senha" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required="" />
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Entrar</button>
                <div class="pull-center">
                  <h6>
                    <a href="#modal"class="link"   data-toggle="modal" data-target="#exampleModal">Não possui conta?</a>
                  </h6>
                </div>
                <div class="pull-right">
               <!--    <h6>
                    <a href="#pablo" class="link">Need Help?</a>
                  </h6> -->
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <nav>
<!--           <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul> -->
        </nav>
       <!--  <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div> -->
      </div>
    </footer>
  </div>

 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
          <label for="exampleFormControlInput1" style="font-weight: bold;">Credenciais da empresa júnior</label>
          <div class="form-row">
          <div class="form-group col-md-6">
        <select class="form-control">
          <option>Selecione sua empresa júnior</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-key"></i></div>
          </div>
        <input type="text" class="form-control" placeholder="Digite a chave de ativação">
  </div>
      </div>
    </div>
      <label for="exampleFormControlInput1" style="font-weight: bold;">Informações para o login</label>
      <br>
<!--         <small class="text-muted">Os demais dados serão solicitados logo após o primeiro login.</small>
 -->        <div class="form-row">
          <div class="form-group col-md-6">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Digite o e-mail da EJ">
      </div>
      </div>
      <div class="form-group col-md-6">
        <div class="input-group">
        <input type="text" class="form-control" placeholder="Digite a senha">
    </div>
      </div>
    </div>

      </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Criar conta</button>
      </div>
    </div>
  </div>
</div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
 <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
</body>

</html>