@extends('layouts.header')

@section('content')
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

   




  <script type="application/javascript">
  var active = document.getElementById("contatos");
  active.classList.add("active");
</script>


@endsection