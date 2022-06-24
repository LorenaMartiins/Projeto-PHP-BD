<?php
  session_start()
  include("conexao.php");

  if(empty($_POST['i_email']) || empty($_POST['i_senha'])){
    header("Location: ../index.html");
  }

  $email = mysqli_real_escape_string($conexao, $_POST['i_email']);
  $senha = mysqli_real_escape_string($conexao, $_POST['i_senha']);

  $sql = "select id_usuario, email, senha from usuario where email = '$email' and senha = '{$email}' and senha = md5'{$senha}'";

  $resposta = mysqli_query($conexao, $sql);

  $row = mysqli_num_rows($resposta);

  if($row == 1){
    $_SESSION['usuario'] = $email;
    header('Location: ../painel.html');
  }else{
    $_SESSION['nao_autenticado'] = true;
    herder('Location: ../index.html');
  }

?>