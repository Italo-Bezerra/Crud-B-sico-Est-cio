<div class="container">
  <h2>Registre um Aluno</h2>
  <form action="?controller=alumno&&action=save" method="POST">
    <div class="form-group">
      <label for="text">Nome:</label>
      <input type="text" class="form-control" id="nombres" placeholder="Escreva seu nome" name="nombres">
    </div>

    <div class="form-group">
      <label for="text">Sobrenome</label>
      <input type="text" name="apellidos" class="form-control" placeholder="Escreva seu sobrenome">
    </div>
    <div class="check-box">
      <label>Aluno Ativo  <input type="checkbox" name="estado">  </label>      
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>