<?php
//require_once 'controle/cliente.php';
//readAll();
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
          <h1 class="h3 mb-0 text-gray-800">Lançamentos</h1>
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="home.php">Home</a></li>
           <li class="breadcrumb-item">Financeiro</li>
           <li class="breadcrumb-item active" aria-current="page">Lançamentos</li>
         </ol>
       </div>

<div class="row mb-3">
       <!-- Card Total Entradas (Mês) -->
       <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Entradas (Mensal)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">R$ 510,35</div>
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

      <!-- Card Total Saidas (Mês) -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Saídas (Mensal)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">R$ 342,54‬</div>
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

      <!-- Card saldo do Mês -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Saldo do Mês</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">R$ 167,81</div>
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

    <!-- Card saldo futuro do Mês -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Saldo Futuro do Mês</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">R$ - 234,50</div>
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
    </div>

      <!-- Row -->
      <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
         <div class="card mb-4">


          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="cadastro-lancamento.php" class="btn btn-primary">Novo Lançamento</a>
          </div>

          <div class="table-responsive p-3">
           <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
             <tr>
              <th>Data</th>
              <th>Lançamento</th>
              <th>Tipo</th>
              <th>Valor</th>
              <th>Dt.Venci</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tfoot>
           <tr>
            <th>Data</th>
            <th>Lançamento</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Dt.Venci</th>
            <th>Ação</th>
          </tr>
        </tfoot>
        <tbody>
          <?php //if ($alunosBD) : ?>
          <?php //foreach ($clientesBD as $clienteBD) : ?>
          <tr>
            <td><?php echo '02/07/2020';//ucwords(strtolower($alunoBD['nome']));?></td>
            <td><?php echo 'Conta de água';//$alunoBD['celular'];?></td>
            <td><?php echo 'Saída';//ucwords(strtolower($alunoBD['responsavel']));?></td>
            <td><?php echo '132,34';//$alunoBD['dataNascimento'];?></td>
            <td><?php echo '02/07/2020';//ucwords(strtolower($alunoBD['nome']));?></td>
            <td>
              <a href="editar-lancamento.php?id=<?php //echo $alunoBD['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
            </td>
          </tr>
          <tr>
            <td><?php echo '01/07/2020';//ucwords(strtolower($alunoBD['nome']));?></td>
            <td><?php echo 'Conta de Luz';//$alunoBD['celular'];?></td>
            <td><?php echo 'Saída';//ucwords(strtolower($alunoBD['responsavel']));?></td>
            <td><?php echo '210,20';//$alunoBD['dataNascimento'];?></td>
            <td><?php echo '02/07/2020';//ucwords(strtolower($alunoBD['nome']));?></td>
            <td>
              <a href="editar-lancamento.php?id=<?php //echo $alunoBD['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
            </td>
          </tr>
          <tr>
            <td><?php echo '03/07/2020';//ucwords(strtolower($alunoBD['nome']));?></td>
            <td><?php echo 'Recebimento de Cliente';//$alunoBD['celular'];?></td>
            <td><?php echo 'Entrada';//ucwords(strtolower($alunoBD['responsavel']));?></td>
            <td><?php echo '300,15';//$alunoBD['dataNascimento'];?></td>
            <td><?php echo '03/07/2020';//ucwords(strtolower($alunoBD['nome']));?></td>
            <td>
              <a href="editar-lancamento.php?id=<?php //echo $alunoBD['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
            </td>
          </tr>
          <tr>
            <td><?php echo '01/07/2020';//ucwords(strtolower($alunoBD['nome']));?></td>
            <td><?php echo 'Restituição';//$alunoBD['celular'];?></td>
            <td><?php echo 'Entrada';//ucwords(strtolower($alunoBD['responsavel']));?></td>
            <td><?php echo '210,20';//$alunoBD['dataNascimento'];?></td>
            <td><?php echo '01/07/2020';//ucwords(strtolower($alunoBD['nome']));?></td>
            <td>
              <a href="editar-lancamento.php?id=<?php //echo $alunoBD['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
            </td>
          </tr>
          <?php //endforeach; ?>
          <?php //endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!--Row-->

</div>

<!--Modal-->
<?php 
if(isset($_GET['r'])){
  ?>
  <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelLogout">Portal Mori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cadastro Realizado Com Sucesso!</p>
      </div>
      <div class="modal-footer">
        <a href="cadastro-aluno.php" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>



<!-- Modal Logout -->
<?php include 'logout.php'; ?>

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