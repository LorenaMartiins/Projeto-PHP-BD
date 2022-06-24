<?php
include("conexao.php");


  $email = $_POST["i_email"];
  $senha = $_POST["i_senha"];

  $query_1 = "select * from usuario where email = '{$email}'";
  $resposta = mysqli_query($conexao ,$query_1);
  $row = mysqli_num_rows($resposta);

  if($row == 1){
    $_SESSION['not_usuario'] = true;
    echo "<script> javascript:history.go(-1) </script>";
  }else{
    $query_2 = "insert into usuario (email, senha) values('{$email}', md5('{$senha}')";
    mysqli_query($conexao, $query_2);
  
  }


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