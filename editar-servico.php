<?php
//require_once 'controle/servico.php';
//edit();
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
						<h1 class="h3 mb-0 text-gray-800">Atualizar Dados Servico</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item"><a href="seleciona-servico.php">Servico</a></li>
							<li class="breadcrumb-item active" aria-current="page">Atualizar Serviço</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<!-- Form Basic -->
							<div class="card mb-4">
								<div class="card-body">
									<form name="formServico" action="editar-servico.php" method="POST">
										<div class="row">
											<div class="form-group col-md-8">
												<label for="idServico">Serviço</label>
												<input type="text" class="form-control" id="idServico" name="servico" required="" value="">
											</div>
											<div class="form-group col-md-2">
												<label for="idTipo">Tipo</label>
												<select class="form-control mb-3" name="tipo" required="">
													<option value="">Selecione</option>
													<option value="1">Administrativo</option>
													<option value="2">Consultoria</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-md-12">
												<label for="idObservacao">Observação</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observacao"></textarea>
											</div>
										</div>

										<button type="submit" class="btn btn-primary">Atualizar</button>
										<a href="seleciona-cliente.php" class="btn btn-danger">Cancelar</a>
									</form>
								</div>
							</div>


						</div>

					</div>
				</div>

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
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="js/demo/chart-area-demo.js"></script>  
</body>
</html>