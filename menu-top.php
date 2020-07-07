       <!-- TopBar -->
       <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>

          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
          aria-labelledby="searchDropdown">
          <form class="navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-1 small" placeholder="O que você quer procurar?"
              aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger badge-counter">3+</span>
      </a>
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
      aria-labelledby="alertsDropdown">
      <h6 class="dropdown-header">
        Alertas
      </h6>

      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="mr-3">
          <div class="icon-circle bg-primary">
            <i class="fas fa-file-alt text-white"></i>
          </div>
        </div>
        <div>
          <div class="small text-gray-500">28 de Junho, 2020</div>
          <span class="font-weight-bold">Novo cliente cadastrado</span>
        </div>
      </a>

      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="mr-3">
          <div class="icon-circle bg-success">
            <i class="fas fa-donate text-white"></i>
          </div>
        </div>
        <div>
          <div class="small text-gray-500">29 de Junho, 2020</div>
          Fechar fluxo de caixa
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="mr-3">
          <div class="icon-circle bg-warning">
            <i class="fas fa-exclamation-triangle text-white"></i>
          </div>
        </div>
        <div>
          <div class="small text-gray-500">30 de Junho, 2020</div>
          Emitir NFE cliente Bradesco
        </div>
      </a>
      <a class="dropdown-item text-center small text-gray-500" href="alertas.php">
      Mostrar todos os alertas</a>
    </div>
  </li>

  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-envelope fa-fw"></i>
    <span class="badge badge-warning badge-counter">2</span>
  </a>
  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
  aria-labelledby="messagesDropdown">
  <h6 class="dropdown-header">
    Mensagens
  </h6>
  <a class="dropdown-item d-flex align-items-center" href="#">
    <div class="dropdown-list-image mr-3">
      <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
      <div class="status-indicator bg-success"></div>
    </div>
    <div class="font-weight-bold">
      <div class="text-truncate">Olá! Gostaria de saber se você pode me ajudar com um problema</div>
      <div class="small text-gray-500">Eduardo</div>
    </div>
  </a>
  <a class="dropdown-item d-flex align-items-center" href="#">
    <div class="dropdown-list-image mr-3">
      <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
      <div class="status-indicator bg-default"></div>
    </div>
    <div>
      <div class="text-truncate">Favor emitir guia de pagamento simples nacional</div>
      <div class="small text-gray-500">Rodrigo Silva</div>
    </div>
  </a>
  <a class="dropdown-item text-center small text-gray-500" href="mensagens.php">Todas as Mensagens</a>
</div>
</li>
<li class="nav-item dropdown no-arrow mx-1">
  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-tasks fa-fw"></i>
  <span class="badge badge-success badge-counter">3</span>
</a>
<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
aria-labelledby="messagesDropdown">
<h6 class="dropdown-header">
  Tarefa
</h6>
<a class="dropdown-item align-items-center" href="#">
  <div class="mb-3">
    <div class="small text-gray-500">Fechamento de Folha de Pagamento
      <div class="small float-right"><b>50%</b></div>
    </div>
    <div class="progress" style="height: 12px;">
      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50"
      aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
</a>
<a class="dropdown-item align-items-center" href="#">
  <div class="mb-3">
    <div class="small text-gray-500">Importaçõa de Extrato
      <div class="small float-right"><b>30%</b></div>
    </div>
    <div class="progress" style="height: 12px;">
      <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
      aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
</a>
<a class="dropdown-item align-items-center" href="#">
  <div class="mb-3">
    <div class="small text-gray-500">Lançamento de horas
      <div class="small float-right"><b>75%</b></div>
    </div>
    <div class="progress" style="height: 12px;">
      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
      aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
</a>
<a class="dropdown-item text-center small text-gray-500" href="tarefas.php">Todas as Tarefas</a>
</div>
</li>
<div class="topbar-divider d-none d-sm-block"></div>
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">
  <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
  <span class="ml-2 d-none d-lg-inline text-white small">Rafael Custódio</span>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
  <a class="dropdown-item" href="perfil.php">
    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
    Perfil
  </a>
  <a class="dropdown-item" href="configuracoes-usuario.php">
    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
    Configurações
  </a>
  <a class="dropdown-item" href="registro-atividades.php">
    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
    Registro de Atividades
  </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
    Sair
  </a>
</div>
</li>
</ul>
</nav>
<!-- Topbar -->