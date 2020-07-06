<?php
//require_once 'controle/aluno.php';
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
						<h1 class="h3 mb-0 text-gray-800">Emissão de Nota Fiscal</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item"><a href="seleciona-cliente.php">Nota Fiscal</a></li>
							<li class="breadcrumb-item active" aria-current="page">Emissão de Nota Fiscal</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<!-- Form Basic -->
							<div class="card mb-4">
								<div class="card-body">
									<form name="formCliente" action="cadastro-cliente.php" method="POST">
										<div class="row">
											<div class="form-group col-md-4">
												<label for="idCNPJ">CNPJ</label>
												<input type="text" class="form-control" id="idCNPJ" name="cnpj" required="">
											</div>
											<!--
											<div class="form-group col-md-5" style="padding-top: 34px; padding-left: 0px; font-size: 15px;">
												<button class="btn btn-primary" type="button">
													<i class="fas fa-search fa-sm"></i>
												</button>
												Importar informações cadastradas na receita federal
											</div>
											-->
										</div>
										<div class="row">
											<div class="form-group col-md-6">
												<label for="idNomeFantasia">Nome(Fantasia)</label>
												<input type="text" class="form-control" id="idNomeFantasia" name="nomeFantasia" required="">
											</div>
											<div class="form-group col-md-6">
												<label for="idRazaoSocial">Razão Social</label>
												<div class="custom-file">
													<input type="text" class="form-control" id="idRazaoSocial" name="razaoSocial">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-md-2">
												<label for="idCEP">CEP</label>
												<input type="text" class="form-control" id="idCEP" name="cep" required="">
											</div>
											<div class="form-group col-md-3">
												<label for="idEndereco">Endereço</label>
												<input type="text" class="form-control" id="idEndereco" name="endereco">
											</div>
											<div class="form-group col-md-2">
												<label for="idBairro">Bairro</label>
												<input type="text" class="form-control" id="idBairro" name="bairro">
											</div>
											<div class="form-group col-md-2">
												<label for="idCidade">Cidade</label>
												<input type="text" class="form-control" id="idCidade" name="cidade">
											</div>
											<div class="form-group col-md-1">
												<label for="idUF">UF</label>
												<input type="text" class="form-control" id="idUF" name="uf">
											</div>
											<div class="form-group col-md-2">
												<label for="idNumero">Número / Complemento</label>
												<input type="text" class="form-control" id="idNumero" name="numero" required="">
											</div>	
										</div>
										<div class="row">
											<div class="form-group col-md-2">
												<label for="idContato">Contato</label>
												<input type="text" class="form-control" id="idContato" name="contato">
											</div>
											<div class="form-group col-md-4">
												<label for="idEmail">E-mail</label>
												<input type="email" class="form-control" id="idEmail" name="email" required="">
											</div>
											<div class="form-group col-md-3">
												<label for="idTelefone">Telefone</label>
												<input type="text" class="form-control" id="idTelefone" name="telefone" required="">
											</div>
											<div class="form-group col-md-3">
												<label for="idCelular">Celular</label>
												<input type="text" class="form-control" id="idCelular" name="celular" required="">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-2">
												<label for="idValorServico">Valor (R$)</label>
												<input type="text" class="form-control" id="idContato" name="valor">
											</div>
											<div class="form-group col-md-3">
												<label for="idDataVencimento">Data Vencimento</label>
												<input type="date" class="form-control" id="idDataVencimento" name="dataVencimento">
											</div>
											<div class="form-group col-md-7">
												<label for="idServico">Serviço</label>
												<select class="form-control mb-3" name="servico" required="">
													<option value="">Selecione</option>
													<option value="1">Vendas</option>
													<option value="2">Prestação de Serviços</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-md-12">
												<label for="idObservacao">Observação</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observacao"></textarea>
											</div>
										</div>

										<button type="submit" class="btn btn-primary">Cadastrar</button>
										<a href="seleciona-emissao-nf.php" class="btn btn-danger">Cancelar</a>
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