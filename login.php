<?php
  session_start();
?>

<html>
  <head>
    <title> Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/es_global.css">
  </head>

  <body>
    <div class="container">
      <form action="php/login_c.php" method="post">
        <div class="form_box">

          <h1>Login</h1>

          <?php 
          if(isset($_SESSION['não_autenticado'])){
          ?>

          <div class="erro_box">
            Usuário ou senha inválidos!!
          </div>

          <?php 
          }
          unset($_SESSION['não_autenticado']);
          ?>
                
          <label>Email</label>
          <input type="text" name="i_email" class="i_text" required>

          <label>Senha</label>
          <input type="password" name="i_senha" class="i_text" required>

          <input type="submit" value="Entrar" class="btt_form">

          <p> Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
      </form>
    </div>
  </body>
</html>