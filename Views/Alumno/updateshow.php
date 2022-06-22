<div class="container">
	<h2>Atualizar Alunos</h2>
	<form action="?controller=alumno&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $alumno->getId() ?>" >
		<div class="form-group">
			<label for="text">Nome</label>
			<input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $alumno->getNombres() ?>">
		</div>
		<div class="form-group">
			<label for="text">Sobrenome</label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $alumno->getApellidos(); ?>">
		</div>
		<div class="check-box">
			<label>Ativo <input type="checkbox" name="estado" <?php echo $alumno->getEstado() ?>></label>
		</div>
		<button type="submit" class="btn btn-primary">Atualizar</button>

	</form>
</div>