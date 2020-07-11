<?php
session_start();
if (!isset($_SESSION['login'])){
  session_destroy();
  header("Location: index.php");
}
require_once 'control/alerta.php';
edit();

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
          <h1 class="h3 mb-0 text-gray-800">Alertas</h1>
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="home.php">Home</a></li>
           <li class="breadcrumb-item">alertas</li>
           <li class="breadcrumb-item active" aria-current="page">alertas</li>
         </ol>
       </div>

       <!-- Row -->
       <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
         <div class="card mb-4">

          <!--
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="cadastro-servico.php" class="btn btn-primary">Novo Serviço</a>
          </div>
        -->

        <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
           <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Status</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tfoot>
         <tr>
          <th>Código</th>
          <th>Descrição</th>
          <th>Data</th>
          <th>Status</th>
          <th>Ação</th>
        </tr>
      </tfoot>
      <tbody>
        <?php if ($alertasBD) : ?>
          <?php foreach ($alertasBD as $alertaBD) : ?>
            <tr>
              <td><?php echo $alertaBD['id'];?></td>
              <td><?php echo $alertaBD['descricao'];?></td>
              <td><?php echo date('d/m/Y', strtotime($alertaBD['dataCadastro']));?></td>
              <td><?php echo $alertaBD['alertaLido'];?></td>
              <td>
                <button class="visualizar btn btn-xs btn-primary" data-id="<?php echo $alertaBD['id'];?>" data-alerta="<?php echo $alertaBD['descricao'];?>">
                  Visualizar
                </button>
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

  <!-- Modal Visualizar Alerta -->
  <div class="modal fade" data-backdrop="static" id="descricaoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDescricao"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelDescricao">Alerta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><span class="alerta"></span></p>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>-->
        <a href="#" class="btn btn-primary update-yes">OK</a>
      </div>
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

  <script>
      $('.visualizar').on('click', function(){
      var alerta = $(this).data('alerta'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
      var id = $(this).data('id'); // vamos buscar o valor do atributo data-id
      $('span.alerta').text(alerta); // inserir na o nome na pergunta de confirmação dentro da modal
      $('a.update-yes').attr('href', 'alertas.php?id=' +id); // mudar dinamicamente o link, href do botão confirmar da modal
      $('#descricaoModal').modal('show'); // modal aparece
    });
  </script>
</body>
</html>