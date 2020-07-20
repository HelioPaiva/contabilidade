<?php
session_start();
if (!isset($_SESSION['login'])){
	session_destroy();
	header("Location: index.php");
}
require_once 'control/cliente.php';
editCliente();
?>
<!DOCTYPE html>
<html lang="en">
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
		$(document).ready( function() { 

			$('#idPesquisar').click(function(){
				/* Configura a requisição AJAX */
				$.ajax({
					url : 'consultar-cnpj.php', /* URL que será chamada */ 
					type : 'POST', /* Tipo da requisição */ 
					data: 'cnpj=' + $('#idCNPJ').val(), /* dado que será enviado via POST */
					dataType: 'json', /* Tipo de transmissão */
					success: function(data){
						if(data.status == "OK"){
							$('#idCNPJ').val(data.cnpj);
							$('#idNomeFantasia').val(data.fantasia);
							$('#idRazaoSocial').val(data.nome);
                                //$('#idSituacao').val(data.situacao);
                                $('#idLogradouro').val(data.logradouro);
                                $('#idNumero').val(data.numero);
                                $('#idComplemento').val(data.complemento);
                                $('#idCEP').val(data.cep);
                                $('#idBairro').val(data.bairro);
                                $('#idMunicipio').val(data.municipio);
                                $('#idUF').val(data.uf);
                                $('#idEmail').val(data.email);
                                $('#idTelefone').val(data.telefone);
                                $('#idNaturezaJuridica').val(data.natureza_juridica);
                                $('#idAbertura').val(data.abertura);
                                $('#idAtividadePrincipal').val(data.atividade_principal[0].code + ' ' + data.atividade_principal[0].text);
                                $('#idAtividadeSecundaria').val(data.atividades_secundarias[0].code + ' ' +data.atividades_secundarias[0].text);
                                $('#idTipo').val(data.tipo);
                                $('#idResponsavel').val(data.qsa[0].nome);
                                $('#idSocio').val(data.qsa[1].nome);
                                $('#idCapital').val(data.capital_social);
                            }else{
                            	alert("CNPJ inválido");
                            	$('#idCNPJ').val("");  
                            }
                        }
                    });   
				return false;    
			});

			$('#idCEP').blur(function(){
				/* Configura a requisição AJAX */
				var cep = document.getElementById("idCEP").value;
				$.ajax({
					url : 'consultar_cep.php', /* URL que será chamada */ 
					type : 'POST', /* Tipo da requisição */ 
					data: 'cep=' + $('#idCEP').val(), /* dado que será enviado via POST */
					dataType: 'json', /* Tipo de transmissão */
					success: function(data){
						if(data.cep != ""){
							$('#idLogradouro').val(data.logradouro);
							$('#idBairro').val(data.bairro);
							$('#idMunicipio').val(data.localidade);
							$('#idUF').val(data.uf);
							$('#idNumero').val("");

						}else{
							alert("CEP Invalido");
							$('#idLogradouro').val("");
							$('#idBairro').val("");
							$('#idMunicipio').val("");
							$('#idUF').val("");
							$('#idCEP').val("");
							$('#idLogradouro').focus();
						}
					}
				});   
				return false;    
			});


		});

		function validaCNPJ(){
			var cnpj = document.getElementById("idCNPJ").value;
			if(cnpj == ""){
				alert('CNPJ inválido!');
				document.getElementById("idCNPJ").focus();
				return false;
			}
		}
		function validaCEP(){
			var cep = document.getElementById("idCEP").value;
			if(cep == ""){
				alert('CEP inválido!');
				document.getElementById("idCEP").focus();
				return false;
			}
		}
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
						<h1 class="h3 mb-0 text-gray-800">Atualizar Dados Cliente</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item"><a href="seleciona-cliente.php">Cliente</a></li>
							<li class="breadcrumb-item active" aria-current="page">Atualizar Cliente</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<!-- Form Basic -->
							<div class="card mb-4">
								<div class="card-body">
									<form name="formCliente" action="editar-cliente.php?id=<?php echo $clienteBD['id'];?>" method="POST">
										<div class="row">
											<div class="form-group col-md-4">
												<label for="idCNPJ">CNPJ</label>
												<input type="text" class="form-control" id="idCNPJ" name="cnpj" value="<?php echo $clienteBD['cnpj'];?>" readonly="">
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
												<label for="idRazaoSocial">Razão Social</label>
												<div class="custom-file">
													<input type="text" class="form-control" id="idRazaoSocial" name="razaoSocial" value="<?php echo $clienteBD['razaoSocial'];?>" required="">
												</div>
											</div>
											<div class="form-group col-md-6">
												<label for="idNomeFantasia">Nome(Fantasia)</label>
												<input type="text" class="form-control" id="idNomeFantasia" name="nomeFantasia" value="<?php echo $clienteBD['nomeFantasia'];?>">
											</div>
											
										</div>

										<div class="row">
											<div class="form-group col-md-2">
												<label for="idCEP">CEP</label>
												<input type="text" class="form-control" id="idCEP" name="cep" required="" value="<?php echo $clienteBD['cep'];?>" onkeyup="maskCEP(this);" maxlength="9" required="">
											</div>
											<div class="form-group col-md-3">
												<label for="idLogradouro">Endereço</label>
												<input type="text" class="form-control" id="idLogradouro" name="endereco" value="<?php echo $clienteBD['endereco'];?>">
											</div>
											<div class="form-group col-md-2">
												<label for="idBairro">Bairro</label>
												<input type="text" class="form-control" id="idBairro" name="bairro" value="<?php echo $clienteBD['bairro'];?>">
											</div>
											<div class="form-group col-md-2">
												<label for="idMunicipio">Cidade</label>
												<input type="text" class="form-control" id="idMunicipio" name="cidade" value="<?php echo $clienteBD['cidade'];?>">
											</div>
											<div class="form-group col-md-1">
												<label for="idUF">UF</label>
												<input type="text" class="form-control" id="idUF" name="uf" value="<?php echo $clienteBD['uf'];?>">
											</div>
											<div class="form-group col-md-2">
												<label for="idNumero">Número / Complemento</label>
												<input type="text" class="form-control" id="idNumero" name="numero" required="" value="<?php echo $clienteBD['numero'];?>">
											</div>	
										</div>
										<div class="row">
											<div class="form-group col-md-2">
												<label for="idContato">Contato</label>
												<input type="text" class="form-control" id="idContato" name="contato" value="<?php echo $clienteBD['contato'];?>" required="">
											</div>
											<div class="form-group col-md-4">
												<label for="idEmail">E-mail</label>
												<input type="email" class="form-control" id="idEmail" name="email" value="<?php echo $clienteBD['email'];?>">
											</div>
											<div class="form-group col-md-3">
												<label for="idTelefone">Telefone</label>
												<input type="text" class="form-control" id="idTelefone" name="telefone" required="" value="<?php echo $clienteBD['telefone'];?>">
											</div>
											<div class="form-group col-md-3">
												<label for="idCelular">Celular</label>
												<input type="text" class="form-control" id="idCelular" name="celular" value="<?php echo $clienteBD['celular'];?>">
											</div>
										</div>

										<div class="row">
											<div class="form-group col-md-12">
												<label for="idObservacao">Observação</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="obs"><?php echo $clienteBD['obs'];?></textarea>
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