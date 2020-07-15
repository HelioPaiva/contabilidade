<?php
session_start();
if (!isset($_SESSION['login'])){
	session_destroy();
	header("Location: index.php");
}
require_once 'control/usuario.php';
editUsuario();
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
						<h1 class="h3 mb-0 text-gray-800">Atualizar Dados Usuário</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item"><a href="seleciona-usuario.php">Usuário</a></li>
							<li class="breadcrumb-item active" aria-current="page">Atualizar Usuário</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<!-- Form Basic -->
							<div class="card mb-4">
								<div class="card-body">
									<form name="formUsuario" action="editar-usuario.php?id=<?php echo $usuarioBD['id'];?>" method="POST">
										<div class="row">
											<div class="form-group col-md-6">
												<label for="idNome">Nome</label>
												<input type="text" class="form-control" id="idNome" name="nome" value="<?php echo $usuarioBD['nome'] ?>" required="">
											</div>
											<div class="form-group col-md-4">
												<label for="idSexo">Sexo</label>
												<select class="form-control mb-3" name="sexo" required="">
													<option value="">Selecione</option>
													<option value="M" <?=($usuarioBD['sexo'] == 'M')?'selected':''?>>Masculino</option>
													<option value="F" <?=($usuarioBD['sexo'] == 'F')?'selected':''?>>Feminino</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-4">
												<label for="idEmail">E-mail</label>
												<input type="email" class="form-control" id="idEmail" name="email" value="<?php echo $usuarioBD['email'] ?>"required="">
											</div>
											<div class="form-group col-md-4">
												<label for="idPerfil">Perfil</label>
												<select class="form-control mb-3" name="perfil" required="">
													<option value="">Selecione</option>
													<option value="1" <?=($usuarioBD['idPerfil'] == '1')?'selected':''?>>Administrador</option>
													<option value="2" <?=($usuarioBD['idPerfil'] == '2')?'selected':''?>>Master</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-8">
												<label for="idObservacao">Observação</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="obs"><?php echo $usuarioBD['obs'] ?></textarea>
											</div>
										</div>

										<button type="submit" class="btn btn-primary">Atualizar</button>
										<a href="seleciona-usuario.php" class="btn btn-danger">Cancelar</a>
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