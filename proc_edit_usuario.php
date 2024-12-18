<?php
session_start();
include_once("conexao.php");


$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE usuario SET senha= md5('{$senha}') WHERE id='$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_affected_rows($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	echo $senha;
	header("Location: edit_usuario.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: edit_usuario.php?id=$id");
}
