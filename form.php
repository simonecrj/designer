<?php
include 'header.php';
?>

<div class="container">
  <h2>Login</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Confirmar a senha
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

</body>
</html>
