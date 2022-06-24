<?php
  session_start();
?>

<!DOCTYPE html>
<html >
  <head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/es_global.css">
  </head>

  <body>
    <div class="container">
      <form action="./php/cadastro_usuario.php" method="post">
        <div class="form_box">
          <h1>Novo cadastro</h1>

          <label>Email</label>
          <input type="text" name="i_email" class="i_text" required>

          <label>Senha</label>
          <input type="password" name="i_senha" class="i_text" required>

          <input type="submit" value="Cadastrar" class="btt_form">
          
          <a href="index.html">Voltar</a>
        </div>
      </form>
    </div>
  </body>
</html>