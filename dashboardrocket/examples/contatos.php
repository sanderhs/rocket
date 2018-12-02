<?php
require_once 'header.php';
?>
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Contatos</h2>
          <p class="category">Handcrafted by our friend
            <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
            <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
          </p>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="col-md-12">
                      <table class="table">
                <thead>
                    <tr>
                        <th>Empresa Júnior</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th class="text-center">Redes Sociais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Visão Tecnologia e Sistemas</td>
                        <td>(31) 973044405</td>
                        <td>contato@visaojr.com.br</td>
                        <td class="text-center">
                              <a href="wwww.instagram.com/visaojrufop" target="_blank"><img class="contatologo"  src="../assets/img/instagram.png"></a>
                              <a href="www.facebook.com/visaojrufop" target="_blank"><img class="contatologo"  src="../assets/img/facebook.png"></a>
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
      <footer class="footer">
        <div class="container">
          <nav>
            <ul>
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
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
<script type="application/javascript">
  var active = document.getElementById("contatos");
  active.classList.add("active");
</script>