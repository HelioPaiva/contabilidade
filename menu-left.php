   <!-- Sidebar -->
   <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-icon">
        <!--<img src="img/logo/logo2.png">-->
      </div>
      <div class="sidebar-brand-text mx-3">Contabilidade</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-user"></i>
        <span>Cadastro</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <!--<h6 class="collapse-header">Cadastro</h6>-->
          <a class="collapse-item" href="seleciona-cliente.php">Cliente</a>
          <a class="collapse-item" href="seleciona-servico.php">Serviço</a>
          <a class="collapse-item" href="seleciona-usuario.php">Usuário</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNFE"
      aria-expanded="true" aria-controls="collapseNFE">
      <i class="far fa-fw fa-address-card"></i>
      <span>Nota Fiscal</span>
    </a>
    <div id="collapseNFE" class="collapse" aria-labelledby="headingcollapseNFE" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="seleciona-emissao-nf.php">Emitir Nota Fiscal</a>
        <a class="collapse-item" href="seleciona-status-nf.php">Consultar Nota Fiscal</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSimplesNacional"
      aria-expanded="true" aria-controls="collapseSimplesNacional">
      <i class="far fa-fw fa-address-card"></i>
      <span>Simples Nacional</span>
    </a>
    <div id="collapseSimplesNacional" class="collapse" aria-labelledby="headingcollapseSimplesNacional" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="seleciona-emissao-simples-nacional.php">Emitir Simples Nacional</a>
        <!--<a class="collapse-item" href="#">Consultar Simples Nacional</a>-->
      </div>
    </div>
  </li>

  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinance"
      aria-expanded="true" aria-controls="collapseFinance">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Financeiro</span>
    </a>
    <div id="collapseFinance" class="collapse" aria-labelledby="headingcollapseFinance" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="seleciona-lancamento.php">Fluxo de Caixa</a>
        <a class="collapse-item" href="Importar-extrato.php">Importar Extrato Banco</a>
        <a class="collapse-item" href="seleciona-extrato.php">Consultar Extrato Banco</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
    aria-expanded="true" aria-controls="collapseReport">
    <i class="far fa-fw fa-list-alt"></i>
    <span>Relatório</span>
  </a>
  <div id="collapseReport" class="collapse" aria-labelledby="headingcollapseReport" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Pagamentos em atraso</a>
    </div>
  </div>
</li>

 <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVendas"
      aria-expanded="true" aria-controls="collapseVendas">
      <i class="far fa-fw fa-address-card"></i>
      <span>Vendas</span>
    </a>
    <div id="collapseVendas" class="collapse" aria-labelledby="headingcollapseVendas" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="seleciona-pedido.php">Pedidos</a>
        <a class="collapse-item" href="seleciona-produto.php">Produto</a>
        <a class="collapse-item" href="seleciona-categoria.php">Categoria</a>
      </div>
    </div>
  </li>

<!--
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
  aria-controls="collapseForm">
  <i class="fab fa-fw fa-wpforms"></i>
  <span>Forms</span>
</a>
<div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Forms</h6>
    <a class="collapse-item" href="form_basics.php">Form Basics</a>
    <a class="collapse-item" href="form_advanceds.php">Form Advanceds</a>
  </div>
</div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
  aria-controls="collapseTable">
  <i class="fas fa-fw fa-table"></i>
  <span>Tables</span>
</a>
<div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Tables</h6>
    <a class="collapse-item" href="simple-tables.php">Simple Tables</a>
    <a class="collapse-item" href="datatables.php">DataTables</a>
  </div>
</div>
</li>

<li class="nav-item">
  <a class="nav-link" href="ui-colors.php">
    <i class="fas fa-fw fa-palette"></i>
    <span>UI Colors</span>
  </a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
  Examples
</div>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
  aria-controls="collapsePage">
  <i class="fas fa-fw fa-columns"></i>
  <span>Pages</span>
</a>
<div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Example Pages</h6>
    <a class="collapse-item" href="login.php">Login</a>
    <a class="collapse-item" href="register.php">Register</a>
    <a class="collapse-item" href="404.php">404 Page</a>
    <a class="collapse-item" href="blank.php">Blank Page</a>
  </div>
</div>
</li>

<li class="nav-item">
  <a class="nav-link" href="charts.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Charts</span>
  </a>
</li>
-->

<hr class="sidebar-divider">
<div class="version" id="version-ruangadmin"></div>
</ul>
