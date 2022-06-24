<?php

  session_start();
  include("conexao.php");

  $email = $_POST["i_email"];
  $senha = $_POST["i_senha"];

  $query_1 = "select * from usuario where email = '{$email}'";
  $resposta = mysqli_query($conexao ,$query_1);
  $row = mysqli_num_rows($resposta);

  if($row == 1){
    $_SESSION['not_usuario'] = true;
    echo "Nome do usuario esta em uso!!";
  }else{
    $query_2 = "insert into usuario (email, senha) values('{$email}', md5('{$senha}')";
  
    ?>
  }
  <?php


?>

<html>

    <head>
        <title>Cadastro concluído</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Cadastro concluído!</h1>
        Faça o login <a href="../index.html">aqui!</a>
    </body>

</html>