<?php
require_once 'control/usuario.php';
logout();
?>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabelLogout">Oh não!</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<p>Tem certeza que deseja sair?</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
			<a href="logout.php" class="btn btn-primary">Sair</a>
		</div>
	</div>
</div>
</div>