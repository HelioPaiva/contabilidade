<?php
//require_once 'controle/servico.php';
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
          <h1 class="h3 mb-0 text-gray-800">Produtos</h1>
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="home.php">Home</a></li>
           <li class="breadcrumb-item">Vendas</li>
           <li class="breadcrumb-item active" aria-current="page">Produtos</li>
         </ol>
       </div>

       <!-- Row -->
       <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
         <div class="card mb-4">


          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="cadastro-produto.php" class="btn btn-primary">Novo Produto</a>
          </div>

          <div class="table-responsive p-3">
           <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
             <tr>
              <th>Código</th>
              <th>Produto</th>
              <th>Valor Unitário (R$)</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tfoot>
           <tr>
              <th>Código</th>
              <th>Produto</th>
              <th>Valor Unitário (R$)</th>
              <th>Ação</th>
            </tr>
        </tfoot>
        <tbody>
          <?php //if ($servicosBD) : ?>
            <?php //foreach ($clientesBD as $servicoBD) : ?>
              <tr>
                <td><?php echo '0001';//ucwords(strtolower($servicoBD['nome']));?></td>
                <td><?php echo 'Mussarela';//$servicoBDBD['celular'];?></td>
                <td><?php echo '15,00';//ucwords(strtolower($servicoBDBD['responsavel']));?></td>
                <td>
                  <a href="editar-produto.php?id=<?php //echo $servicoBD['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
                </td>
              </tr>
              <tr>
                <td><?php echo '0002';//ucwords(strtolower($alunoBD['nome']));?></td>
                <td><?php echo 'Calabresa';//$alunoBD['celular'];?></td>
                <td><?php echo '14,00';//ucwords(strtolower($alunoBD['responsavel']));?></td>
                <td>
                  <a href="editar-produto.php?id=<?php //echo $servicoBD['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
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