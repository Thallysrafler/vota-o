<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
#$query = "select * from usuario where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
$res = mysqli_fetch_assoc($result);

if($row == 1) 
{
	$_SESSION['usuario'] = $usuario;
	$_SESSION['nome'] = $res['nome'];
	$query = "select usuario from votacao where usuario = '{$usuario}'";
	$result = mysqli_query($conexao, $query);
	$row = mysqli_num_rows($result);
	if($row > 0) {
		$_SESSION['ja_votou'] = true;
		header('Location: index.php');
		exit();
		     }
	if ($usuario == 'admin') {
		header('Location: resultado.php');
		exit();
		      }
	header('Location: visualizar.php');
	exit();
} else 
{
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}