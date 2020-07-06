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
          <h1 class="h3 mb-0 text-gray-800">Emissão Simples Nacional</h1>
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="home.php">Home</a></li>
           <li class="breadcrumb-item">Simples Nacional</li>
           <li class="breadcrumb-item active" aria-current="page">Emissão de Simples Nacional</li>
         </ol>
       </div>

       <!-- Row -->
       <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
         <div class="card mb-4">
          <div class="table-responsive p-3">
           <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
             <tr>
              <th>CNPJ</th>
              <th>CPF Responsável</th>
              <th>Cliente</th>
              <th>Contato</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tfoot>
           <tr>
            <th>CNPJ</th>
            <th>CPF Responsável</th>
            <th>Cliente</th>
            <th>Contato</th>
            <th>Ação</th>
          </tr>
        </tfoot>
        <tbody>
          <?php //if ($alunosBD) : ?>
            <?php //foreach ($clientesBD as $clienteBD) : ?>
              <tr>
                <td><?php echo '47.866.934/0001-74';//ucwords(strtolower($alunoBD['nome']));?></td>
                <td><?php echo '999.999.999-99';//ucwords(strtolower($alunoBD['nome']));?></td>
                <td><?php echo 'TICKET SERVICOS SA';//$alunoBD['celular'];?></td>
                <td><?php echo 'ALAOR BARRA AGUIRRE';//ucwords(strtolower($alunoBD['responsavel']));?></td>
                <td>
                  <a href="emitir-simples-nacional.php?id=<?php //echo $alunoBD['id']; ?>" class="btn btn-sm btn-primary">Emitir Simples Nacional</a>
                </td>
              </tr>
              <tr>
                <td><?php echo '60.741.303/0001-97';//ucwords(strtolower($alunoBD['nome']));?></td>
                <td><?php echo '999.999.999-99';//ucwords(strtolower($alunoBD['nome']));?></td>
                <td><?php echo 'AFRICA DDB BRASIL PUBLICIDADE LTDA.';//$alunoBD['celular'];?></td>
                <td><?php echo 'DM9 HOLDINGS INC';//ucwords(strtolower($alunoBD['responsavel']));?></td>
                <td>
                  <a href="emitir-simples-nacional.php?id=<?php //echo $alunoBD['id']; ?>" class="btn btn-sm btn-primary">Emitir Simples Nacional</a>
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
        <h5 class="modal-title" id="exampleModalLabelLogout">Contabilidade</h5>
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