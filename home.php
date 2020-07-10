<?php
session_start();
if (!isset($_SESSION['login'])){
  session_destroy();
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<!--head -->
<?php include 'head.php'; ?>
<body id="page-top">
	<div id="wrapper">
		<!--Menu Left -->
		<?php include 'menu-left.php'; ?>

		<!-- Sidebar -->
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<!--Menu TOP -->
				<?php include 'menu-top.php'; ?>
				<!-- Container Fluid-->

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1><br>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Ganhos (Mensal)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Comparado com último mês</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Vendas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">650</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                        <span>Comparado com último mês</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Novos Clientes</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">366</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Comparado com último mês</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Emissão NFe Pendentes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Comparado com a última semana</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Relatório Faturamento Mensal</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                  aria-labelledby="dropdownMenuLink">
                  <div class="dropdown-header">Dropdown Header:</div>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Pagamentos</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mês <i class="fas fa-chevron-down"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
              aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Selecione o período</div>
              <a class="dropdown-item" href="#">Diário</a>
              <a class="dropdown-item" href="#">Semanal</a>
              <a class="dropdown-item active" href="#">Mensal</a>
              <a class="dropdown-item" href="#">Este Ano</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <div class="small text-gray-500">Fornecedores
              <div class="small float-right"><b>2 of 5 Items</b></div>
            </div>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="small text-gray-500">Funcionários
              <div class="small float-right"><b>5 of 8 Items</b></div>
            </div>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="small text-gray-500">Boletos
              <div class="small float-right"><b>4 of 8 Items</b></div>
            </div>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="small text-gray-500">Clientes
              <div class="small float-right"><b>4 of 8 Items</b></div>
            </div>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="small text-gray-500">Aluguel
              <div class="small float-right"><b>2 of 8 Items</b></div>
            </div>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="card-footer text-center">
          <a class="m-0 small text-primary card-link" href="#">Ver Mais <i
            class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <!-- Invoice Example -->
      <div class="col-xl-8 col-lg-7 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Faturas</h6>
            <a class="m-0 float-right btn btn-danger btn-sm" href="#">Ver Mais <i
              class="fas fa-chevron-right"></i></a>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>Nº Ordem</th>
                    <th>Cliente</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#">RA0449</a></td>
                    <td>Udin Wayan</td>
                    <td>Nasi Padang</td>
                    <td><span class="badge badge-success">Delivered</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">RA5324</a></td>
                    <td>Jaenab Bajigur</td>
                    <td>Gundam 90' Edition</td>
                    <td><span class="badge badge-warning">Shipping</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">RA8568</a></td>
                    <td>Rivat Mahesa</td>
                    <td>Oblong T-Shirt</td>
                    <td><span class="badge badge-danger">Pending</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">RA1453</a></td>
                    <td>Indri Junanda</td>
                    <td>Hat Rounded</td>
                    <td><span class="badge badge-info">Processing</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">RA1998</a></td>
                    <td>Udin Cilok</td>
                    <td>Baby Powder</td>
                    <td><span class="badge badge-success">Delivered</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer"></div>
          </div>
        </div>
        <!-- Message From Customer-->
        <div class="col-xl-4 col-lg-5 ">
          <div class="card">
            <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-light">Mensagem para cliente</h6>
            </div>
            <div>
              <div class="customer-message align-items-center">
                <a class="font-weight-bold" href="#">
                  <div class="text-truncate message-title">Olá! Gostaria de saber se você pode me ajudar com um
                  problema que tenho tido.</div>
                  <div class="small text-gray-500 message-time font-weight-bold">Rogério Santos · 58m</div>
                </a>
              </div>
              <div class="customer-message align-items-center">
                <a href="#">
                  <div class="text-truncate message-title">Mas devo explicar a você como toda essa idéia equivocada
                  </div>
                  <div class="small text-gray-500 message-time">Maria Vilma · 58m</div>
                </a>
              </div>
              <div class="customer-message align-items-center">
                <a class="font-weight-bold" href="#">
                  <div class="text-truncate message-title">Você pode por favor enviar o recibo de pagamento...
                  </div>
                  <div class="small text-gray-500 message-time font-weight-bold">Santos Silva · 25m</div>
                </a>
              </div>
              <div class="card-footer text-center">
                <a class="m-0 small text-primary card-link" href="#">Veja mais<i
                  class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Row-->

        


      </div>



    </div>


    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabelLogout">Oh não!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Tem certeza que deseja sair?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
          <a href="logout.php" class="btn btn-primary">Sair</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <?php include 'footer.php'; ?>

</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>  
</body>
</html>