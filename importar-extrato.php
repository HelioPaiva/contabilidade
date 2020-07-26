<?php
session_start();
if (!isset($_SESSION['login'])){
	session_destroy();
	header("Location: index.php");
}
require_once 'control/importar_extrato.php';
add();
?>
<!DOCTYPE html>
<html lang="en">
<!--head -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="img/logo/logo.png" rel="icon">
	<title>Contabilidade</title>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/ruang-admin.min.css" rel="stylesheet">
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script type="text/javascript" src="javascript/validacoes.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type='text/javascript' src="js-mascara.js"></script>
	<script>
		function nome(){
			var nome = document.getElementById("file").value;
			var arquivo = nome.split('\\');
			if(nome === ''){
				alert('Selecione o extrato para importação');
				return false;
			}

			/*
			if(arquivo[2].substring(0, 15) !== 'relatorio-turma'){
                //if(arquivo[2] !== 'MODELO_UPLOAD_TURMA.xlsx'){
                	alert('A planilha selecionada não é a planilha padrão para importação da turma, selecione a planilha correta.');
                	return false;
                }*/
            };
        </script>
    </head>
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
    						<h1 class="h3 mb-0 text-gray-800">Importação de Extrato</h1>
    						<ol class="breadcrumb">
    							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
    							<li class="breadcrumb-item">Financeiro</li>
    							<li class="breadcrumb-item active" aria-current="page">Importação de Extrato</li>
    						</ol>
    					</div>

    					<div class="row">
    						<div class="col-lg-12">
    							<!-- Form Basic -->
    							<div class="card mb-4">
    								<div class="card-body">

    									<form enctype="multipart/form-data" name="formImportaExtrato" action="importar-extrato.php" method="POST" onsubmit="return nome(this);">
    										<div class="row">
    											<div class="form-group col-md-6">
    												<input type="file" id="file" name="file" accept="application/vnd.ms-excel">
    												<!--accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
													-->

												<!--
												<input type="file" class="custom-file-input" id="customFile">
												<label class="custom-file-label" for="customFile">Selecione o Arquivo</label>
											-->
										</div>
									</div>
									<button type="submit" class="btn btn-primary">Importar</button>
								</form>
								
								<!--
								<form enctype="multipart/form-data" action="importar-turma.php?c=1" method="POST" onsubmit="return nome(this);" target="_blank">
									<label style="background-color: red; color: white;" class="custom-file">
										<input type="file" id="file" name="file" class="custom-file-input" placeholder="Selecione a Planilha" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
										<span class="custom-file-control"></span>
									</label>
									<button type="submit">Importar</button>
								</form>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>


		<!--Modal-->
		<?php 
		if(isset($_GET['r'])){
			$r = $_GET['r'];
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
							<?php if($r == 1) { ?>
								<p style="color: red;">Este período de extrato já foi importado</p>
							<?php }else { ?>
								<p>Extrato Importado Com Sucesso!</p>
							<?php } ?>
					</div>
					<div class="modal-footer">
						<!--<a href="importar-extrato.php" class="btn btn-primary">Não</a>-->
						<a href="importar-extrato.php" class="btn btn-primary">OK</a>
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

<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>  

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