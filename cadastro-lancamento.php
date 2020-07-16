<?php
session_start();
if (!isset($_SESSION['login'])){
  session_destroy();
  header("Location: index.php");
}
require_once 'control/lancamento.php';
add();
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
						<h1 class="h3 mb-0 text-gray-800">Cadastro Lançamento</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item"><a href="seleciona-lancamento.php">Lançamentos</a></li>
							<li class="breadcrumb-item active" aria-current="page">Cadastro Lançamento</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<!-- Form Basic -->
							<div class="card mb-4">
								<div class="card-body">
									<form name="formLancamento" action="cadastro-lancamento.php" method="POST">
										<div class="row">
											<div class="form-group col-md-6">
												<label for="idDesc">Descrição do Lançamento</label>
												<input type="text" class="form-control" id="idDesc" name="descricao" required="">
											</div>
											<div class="form-group col-md-2">
												<label for="idTipo">Tipo</label>
												<select class="form-control mb-3" name="tipo" required="">
													<option value="">Selecione</option>
													<option value="1">Entrada</option>
													<option value="2">Saída</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-2">
												<label for="idValor">Valor</label>
												<input type="text" class="form-control" id="idValor" name="valor" required="">
											</div>
											<!--
											<div class="form-group col-md-2">
												<label for="idData">Data</label>
												<input type="text" class="form-control" id="idData" name="data">
											</div>
										-->
											<div class="form-group col-md-2">
												<label for="idDataVencimento">Data Vencimento</label>
												<input type="date" class="form-control" id="idDataVencimento" name="dataVencimento">
											</div>
											<div class="form-group col-md-2">
												<label for="idPago">Pago</label>
												<select class="form-control mb-3" name="pago" required="">
													<option value="">Selecione</option>
													<option value="1">Sim</option>
													<option value="0">Não</option>
												</select>
											</div>
										</div>
										
										<button type="submit" class="btn btn-primary">Cadastrar</button>
										<a href="seleciona-lancamento.php" class="btn btn-danger">Cancelar</a>
									</form>
								</div>
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
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="js/demo/chart-area-demo.js"></script>  
</body>
</html>