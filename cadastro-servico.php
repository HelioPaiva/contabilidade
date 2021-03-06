<?php
session_start();
if (!isset($_SESSION['login'])){
	session_destroy();
	header("Location: index.php");
}
require_once 'control/servico.php';
preencheTipoServico();
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
						<h1 class="h3 mb-0 text-gray-800">Cadastro Serviço</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item"><a href="seleciona-servico.php">Serviço</a></li>
							<li class="breadcrumb-item active" aria-current="page">Cadastro Serviço</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<!-- Form Basic -->
							<div class="card mb-4">
								<div class="card-body">
									<form name="formServico" action="cadastro-servico.php" method="POST">
										<div class="row">
											<div class="form-group col-md-8">
												<label for="idServico">Serviço</label><span style="color: red;">  *</span>
												<input type="text" class="form-control" id="idServico" name="servico" required="">
											</div>
											<div class="form-group col-md-2">
												<label for="idTipo">Tipo</label><span style="color: red;">  *</span>
												<select class="form-control mb-3" name="tipo" required="">
													<option value="">Selecione</option>
													<?php if ($tipoServicosBD) : ?>
														<?php foreach ($tipoServicosBD as $tipoServicoBD) : ?>
															<option value="<?php echo $tipoServicoBD['id'];?>"><?php echo $tipoServicoBD['tipoServico'];?></option>
														<?php endforeach; ?>
													<?php endif; ?>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-md-10">
												<label for="idDescricao">Observação</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
											</div>
										</div>

										<button type="submit" class="btn btn-primary">Cadastrar</button>
										<a href="seleciona-servico.php" class="btn btn-danger">Cancelar</a>
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