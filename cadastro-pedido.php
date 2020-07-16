<?php
session_start();
if (!isset($_SESSION['login'])){
  session_destroy();
  header("Location: index.php");
}
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
						<h1 class="h4 mb-0 text-gray-800">Cadastro Pedido</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Home</a></li>
							<li class="breadcrumb-item"><a href="seleciona-pedido.php">vendas</a></li>
							<li class="breadcrumb-item active" aria-current="page">Cadastro Pedido</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<!-- Form Sizing -->
							<div class="card mb-6">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Pedidos</h6>
								</div>
								<div class="card-body">
									<form>
										<div class="form-group">
											<div class="form-group">
												<label for="idCategoria">Categoria</label>
												<select class="form-control mb-3" name="idCategoria" required="">
													<option value="">Selecione</option>
													<option value="1">Pizza</option>
													<option value="2">Bebidas</option>
												</select>
											</div>
											<div class="form-group">
												<label for="idProduto">Produto</label>
												<select class="form-control mb-3" name="idProduto" required="">
													<option value="">Selecione</option>
													<option value="1">Mussarela</option>
													<option value="2">Calabresa</option>
												</select>
											</div>
											<div class="form-group">
												<label for="idQuantidade">Quantidade</label>
												<input type="text" class="form-control" id="idQuantidade" name="quantidade" required="">
											</div>
											<div class="form-group">
												<label for="idValorUnitario">Valor Unitário</label>
												<input type="text" class="form-control" id="idValorUnitario" name="valorUnitario" required="">
											</div>
											<div class="form-group">
												<label for="idValorTotal">Valor Total</label>
												<input type="text" class="form-control" id="idValorTotal" name="valorTotal" readonly="">
											</div>
										</div>
										<button type="submit" class="btn btn-primary">Adicionar</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- Form Sizing -->
							<div class="card mb-6">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Lista de Produtos</h6>
								</div>
								<div class="card-body">
									<form>
										<div class="form-group">
											<div class="form-group">
												<div class="row">
													<div class="col-lg-12 mb-4">
														<!-- Simple Tables -->
														<div class="card">

															<div class="table-responsive">
																<table class="table align-items-center table-flush">
																	<thead class="thead-light">
																		<tr>
																			<th>ID</th>
																			<th>Produto</th>
																			<th>Quantidade</th>
																			<th>Vl.Unitário</th>
																			<th>Vl.Total</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>0001</td>
																			<td>Mussarela</td>
																			<td>3</td>
																			<td>15,00</td>
																			<td>45,00</td>
																		</tr>
																		<tr>
																			<td>0002</td>
																			<td>Calabresa</td>
																			<td>1</td>
																			<td>14,00</td>
																			<td>14,00</td>
																		</tr>
																		<tr>
																			<td>0003</td>
																			<td>4 Queijo</td>
																			<td>2</td>
																			<td>30,00</td>
																			<td>60,00</td>
																		</tr>
																		<tr>
																			<td>0004</td>
																			<td>Coca-Cola</td>
																			<td>2</td>
																			<td>8,00</td>
																			<td>16,00</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class="card-footer"></div>
														</div>
														<br>
														<button type="submit" class="btn btn-primary">Fechar Pedido</button>
														<a href="seleciona-pedido.php" class="btn btn-danger">Cancelar</a>
													</div>
												</div>
												<!--Row-->
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