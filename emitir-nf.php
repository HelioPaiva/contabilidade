<?php
session_start();
if (!isset($_SESSION['login'])){
	session_destroy();
	header("Location: index.php");
}
require_once 'control/emissao-nf.php';
readDadosParaEmitirNF();
preencheComboServico();
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
									<form name="formCliente" action="emitir-nf.php?id=<?php echo $dadosEmissaoBD['cnpj']; ?>" method="POST">
										<div class="row">
											<div class="form-group col-md-4">
												<label for="idCNPJ">CNPJ</label>
												<input type="text" class="form-control" id="idCNPJ" name="cnpj" readonly="" value="<?php echo $dadosEmissaoBD['cnpj']; ?>">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-6">
												<label for="idNomeFantasia">Nome(Fantasia)</label>
												<input type="text" class="form-control" id="idNomeFantasia" name="nomeFantasia" readonly="" value="<?php echo $dadosEmissaoBD['nomeFantasia']; ?>">
											</div>
											<div class="form-group col-md-6">
												<label for="idRazaoSocial">Razão Social</label>
												<div class="custom-file">
													<input type="text" class="form-control" id="idRazaoSocial" name="razaoSocial" readonly="" value="<?php echo $dadosEmissaoBD['razaoSocial']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-md-2">
												<label for="idCEP">CEP</label>
												<input type="text" class="form-control" id="idCEP" name="cep" readonly="" value="<?php echo $dadosEmissaoBD['cep']; ?>">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-4">
												<label for="idEndereco">Endereço</label>
												<input type="text" class="form-control" id="idEndereco" name="endereco" readonly="" value="<?php echo $dadosEmissaoBD['endereco']; ?>">
											</div>
											<div class="form-group col-md-2">
												<label for="idBairro">Bairro</label>
												<input type="text" class="form-control" id="idBairro" name="bairro" readonly="" value="<?php echo $dadosEmissaoBD['bairro']; ?>">
											</div>
											<div class="form-group col-md-3">
												<label for="idCidade">Cidade</label>
												<input type="text" class="form-control" id="idCidade" name="cidade" readonly="" value="<?php echo $dadosEmissaoBD['cidade']; ?>">
											</div>
											<div class="form-group col-md-1">
												<label for="idUF">UF</label>
												<input type="text" class="form-control" id="idUF" name="uf" readonly="" value="<?php echo $dadosEmissaoBD['uf']; ?>">
											</div>
											<div class="form-group col-md-2">
												<label for="idNumero">Número / Complemento</label>
												<input type="text" class="form-control" id="idNumero" name="numero" readonly="" value="<?php echo $dadosEmissaoBD['numero']; ?>">
											</div>	
										</div>
										<div class="row">
											<div class="form-group col-md-3">
												<label for="idContato">Contato</label>
												<input type="text" class="form-control" id="idContato" name="contato" readonly="" value="<?php echo $dadosEmissaoBD['contato']; ?>">
											</div>
											<div class="form-group col-md-3">
												<label for="idEmail">E-mail</label>
												<input type="email" class="form-control" id="idEmail" name="email" readonly="" value="<?php echo $dadosEmissaoBD['email']; ?>">
											</div>
											<div class="form-group col-md-3">
												<label for="idTelefone">Telefone</label>
												<input type="text" class="form-control" id="idTelefone" name="telefone" readonly="" value="<?php echo $dadosEmissaoBD['telefone']; ?>">
											</div>
											<div class="form-group col-md-3">
												<label for="idCelular">Celular</label>
												<input type="text" class="form-control" id="idCelular" name="celular" readonly="" value="<?php echo $dadosEmissaoBD['telefone']; ?>">
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
													<?php if($servicosClienteBD) : ?>
														<?php foreach ($servicosClienteBD as $servico) : ?>
															<option value="<?php echo $servico['id']; ?>"><?php echo $servico['servico']; ?></option>
														<?php endforeach; ?>
													<?php endif; ?>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-md-12">
												<label for="idObservacao">Observação</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="obs"></textarea>
											</div>
										</div>

										<button type="submit" class="btn btn-primary">Emitir NF</button>
										<a href="seleciona-emissao-nf.php" class="btn btn-danger">Cancelar</a>
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