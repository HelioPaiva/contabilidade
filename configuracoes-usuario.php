<?php
session_start();
if (!isset($_SESSION['login'])){
	session_destroy();
	header("Location: index.php");
}
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
						<h1 class="h3 mb-0 text-gray-800">Configurações</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item">perfil</li>
							<li class="breadcrumb-item active" aria-current="page">configurações</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<!-- Form Sizing -->
							<div class="card mb-6">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Cards Dashboard</h6>
								</div>
								<div class="card-body">
									<form>
										<div class="form-group">
											<div class="form-group">
												<!--<label>Switches</label>-->
												<div class="custom-control custom-switch">
													<input type="checkbox" class="custom-control-input" id="customSwitch1">
													<label class="custom-control-label" for="customSwitch1">Visualizar gráfico de evolução</label>
												</div>
												<div class="custom-control custom-switch">
													<input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
													<label class="custom-control-label" for="customSwitch2">Visualizar gráfico de clientes</label>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						

					</div>



				</div>
			</div>

			<!-- Footer -->
			<?php include 'footer.php'; ?>

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