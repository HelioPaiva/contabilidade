<?php
session_start();
if (!isset($_SESSION['login'])){
  session_destroy();
  header("Location: index.php");
}
require_once 'control/emissao-nf.php';
readAllEmissaoNF();
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
          <h1 class="h3 mb-0 text-gray-800">Emissão Nota Fiscal</h1>
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="home.php">Home</a></li>
           <li class="breadcrumb-item">Nota Fiscal</li>
           <li class="breadcrumb-item active" aria-current="page">Emissão de Nota Fiscal</li>
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
              <th>Cliente</th>
              <th>Contato</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tfoot>
           <tr>
            <th>CNPJ</th>
            <th>Cliente</th>
            <th>Contato</th>
            <th>Ação</th>
          </tr>
        </tfoot>
        <tbody>
          <?php if ($emissoesBD) : ?>
            <?php foreach ($emissoesBD as $emissaonfBD) : ?>
              <tr>
                <td><?php echo $emissaonfBD['cnpj'];?></td>
                <td><?php echo $emissaonfBD['razaoSocial'];?></td>
                <td><?php echo ucwords(strtolower($emissaonfBD['contato']));?></td>
                <td>
                  <a href="emitir-nf.php?id=<?php echo $emissaonfBD['id']; ?>" class="btn btn-sm btn-primary">Emitir Nota Fiscal</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
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
        <h5 class="modal-title" id="exampleModalLabelLogout">Clickou</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cadastro Realizado Com Sucesso!</p>
      </div>
      <div class="modal-footer">
        <a href="seleciona-emissao-nf.php" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>


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