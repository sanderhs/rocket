@extends('layouts.header')

@section('content')


      <!-- End Navbar -->
      <!-- End Navbar -->
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Calendário</h2>
          <!-- <p class="category">Handcrafted by our friend
            <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
            <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
          </p> -->
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div id="external-events">
                  <div class="">
                    <div class="bg-primary events">
                      <p>Teste</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-footer">
                <button class="btn btn-default btn-icon btn-round">
                  <i class="now-ui-icons business_bulb-63"></i>
                </button>
                <button class="btn btn-info btn-icon btn-round">
                  <i class="now-ui-icons business_bulb-63"></i>
                </button>
                <button class="btn btn-primary btn-icon btn-round">
                  <i class="now-ui-icons business_bulb-63"></i>
                </button>
                <button class="btn btn-success btn-icon btn-round">
                  <i class="now-ui-icons business_bulb-63"></i>
                </button>
                <button class="btn btn-danger btn-icon btn-round">
                  <i class="now-ui-icons business_bulb-63"></i>
                </button>
                <form>
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" id="titulo" aria-describedby="emailHelp">
                  </div>
                </form>
                <div class="form-group">
                  <label>Descrição</label>
                  <textarea class="form-control" id="descricao"></textarea>
                </div>
                 <button class="btn btn-neutral">Criar</button>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-body">
                <div id="calendario1">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



  <!--      MODAL CADASTRAR -->


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
          <div class="form-group">
             <label for="exampleFormControlInput1">Título</label>
            <input type="text" class="form-control" id="titulo">
            <form>
                  <div class="form-group">
                    <label>Cor</label>
                    <select class="form-control" id="cor_fundo">
                    <option value="">Selecione a cor</option>
                    <option value="default">Cinza</option>
                    <option value="info">Azul</option>
                    <option value="success">Verde</option>
                    <option value="danger">Vermelho</option>
                    <option value="warming">Amarelo</option>
                    </select>
                  </div>
                </form>
                <div class="form-group">
                  <label>Descrição</label>
                  <textarea class="form-control" id="descricao"></textarea>
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" id="create-event" class="btn btn-primary" onclick="addEvent(event)">Salvar</button>
      </div>

    <script type="application/javascript">
  var active = document.getElementById("calendario");
  active.classList.add("active");
</script>

@endsection


