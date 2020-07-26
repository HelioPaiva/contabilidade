<?php
session_start();
if (!isset($_SESSION['login'])){
  session_destroy();
  header("Location: index.php");
}
require_once 'control/importar_extrato.php';
readAllExtrato();
mesAnoExtrato();
if (isset($_GET['r'])) {
  $r = $_GET['r'];
}else{
  $r = null;
}
//totalEntrada();
//totalSaida();
//totalSaidaFuturo();
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
          <h1 class="h3 mb-0 text-gray-800">Extrato</h1>
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="home.php">Home</a></li>
           <li class="breadcrumb-item">Financeiro</li>
           <li class="breadcrumb-item active" aria-current="page">Extrato Bancario</li>
         </ol>
       </div>

       <div class="row mb-3">
         <!-- Card Total Entradas (Mês) -->
       <!--
       <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Entradas (Mensal)</div>
                <?php if ($lancamentoEntradaBD) : ?>
                <div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php //echo number_format($lancamentoEntradaBD['totalEntrada'],2);?></div>
                <?php endif; ?>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-primary mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span>Comparado com último mês</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-arrow-up fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    -->

    <!-- Card Total Saidas (Mês) -->
      <!--
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Saídas (Mensal)</div>
                 <?php if ($lancamentoSaidaBD) : ?>
                <div class="h5 mb-0 font-weight-bold text-gray-800">R$ ‬<?php //echo number_format($lancamentoSaidaBD['totalSaida'],2);?></div>
                 <?php endif; ?>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-danger mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                  <span>Comparado com último mês</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-arrow-down fa-2x text-danger"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    -->

    <!-- Card saldo do Mês -->
      <!--
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Saldo do Mês</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">R$ <?php //echo number_format(($lancamentoEntradaBD['totalEntrada'] - $lancamentoSaidaBD['totalSaida']),2); ?></div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-dafault mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                  <span>Comparado com último mês</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-default"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    -->

    <!-- Card saldo futuro do Mês -->
    <!--
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Saldo Futuro do Mês</div>
                <?php if ($lancamentoSaidaFuturoBD) : ?>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">R$ <?php //echo number_format(($lancamentoSaidaFuturoBD['totalSaidaFuturo'] + (($lancamentoEntradaBD['totalEntrada'] - $lancamentoSaidaBD['totalSaida']))),2);?></div>
                <?php endif; ?>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-default mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                  <span>Comparado com último mês</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-fw fa-chart-area fa-2x text-default"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    -->
  </div>

  <!-- Row -->
  <div class="row">
    <!-- DataTable with Hover -->
    <div class="col-lg-12">
     <div class="card mb-4">

     </br>
     <form name="formExtrato" action="seleciona-extrato.php?r=1" method="POST">
      <div class="form-group col-md-3">
        <select class="form-control mb-3" name="anoMesExtrato" onchange="this.form.submit()">
          <option value="">Selecione o período</option>
          <?php if ($anoMesExtratosBD) : ?>
            <?php foreach ($anoMesExtratosBD as $anoMesExtratoBD) : ?>
              <option value="<?php echo $anoMesExtratoBD['ano_mes'];?>"><?php echo $anoMesExtratoBD['ano_mes'];?></option>
            <?php endforeach; ?>
          <?php endif; ?>
        </select>
        <!--<a href="cadastro-lancamento.php" class="btn btn-primary">Novo Lançamento</a>-->
      </div>
    </form>

    <div class="table-responsive p-3">
     <table class="table align-items-center table-flush table-hover" id="dataTableHover">
      <thead class="thead-light">
       <tr>
        <!--<th>Data</th>-->
        <th>Banco</th>
        <th>Tipo</th>
        <th>Lançamento</th>
        <th style="text-align: right;">Valor</th>
        <th style="text-align: right;">Data</th>
        <!--<th>Ação</th>-->
      </tr>
    </thead>
    <tfoot>
     <tr>
      <!--<th>Data</th>-->
      <th>Banco</th>
      <th>Tipo</th>
      <th>Lançamento</th>
      <th style="text-align: right;">Valor</th>
      <th style="text-align: right;">Data</th>
      <!--<th>Ação</th>-->
    </tr>
  </tfoot>
  <tbody>
    <?php if($r == 1) { ?>
      <?php if ($extratosBD) : ?>
        <?php foreach ($extratosBD as $extratoBD) : ?>
          <tr>
            <td><?php echo $extratoBD['numBanco'];?></td>
            <td><?php echo $extratoBD['tipo'];?></td>
            <td><?php echo ucwords(strtolower($extratoBD['descricao']));?></td>
            <?php if ($extratoBD['tipo'] == 'Entrada'){ ?>
              <td style="text-align: right; color: blue;"><?php echo number_format($extratoBD['valor'],2);?></td>
            <?php }else {?>
              <td style="text-align: right; color: red;"><?php echo number_format($extratoBD['valor'],2);?></td>
            <?php }; ?>

            <td style="text-align: right;"><?php echo $extratoBD['data'];?></td>
            <!--<td>
              <a href="editar-lancamento.php?id=<?php //echo $lancamentoBD['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
            </td>-->
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    <?php }?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
<!--Row-->

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

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script>
	$(document).ready(function () {
    $('#msgModal').modal('show');
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>
</html>