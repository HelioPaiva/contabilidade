<?php
//require_once 'controle/usuario.php';
//add();
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
						<h1 class="h3 mb-0 text-gray-800">Perfil</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item">Perfil</li>
							<li class="breadcrumb-item active" aria-current="page">Perfil</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<!-- Form Sizing -->
							<div class="card mb-6">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Atualização Cadastral</h6>
								</div>
								<div class="card-body">
									<form>
										<div class="form-group">
											<label for="exampleInputEmail1">Nome</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
											placeholder="">

										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">E-mail</label>
											<input type="email" class="form-control" id="exampleInputPassword1" placeholder="">
										</div>

										<button type="submit" class="btn btn-primary">Atualizar</button>
									</form>
								</div>
							</div>
						</div>


						<div class="col-lg-6">
							<!-- Form Basic -->
							<div class="card mb-3">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Alteração de senha</h6>
								</div>
								<div class="card-body">
									<form>
										<div class="form-group">
											<label for="exampleInputEmail1">Nova Senha</label>
											<input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
											placeholder="">

										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Confirme a nova senha</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
										</div>

										<button type="submit" class="btn btn-primary">Atualizar</button>
									</form>
								</div>
							</div>

						</div>


					</div>



				</div>
			</div>

				<!-- Modal Logout -->
					<?php include 'logout.php'; ?>

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