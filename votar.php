<?php
session_start();
include_once("conexao.php");
//Verificar se está vindo a variável id pela URL
if(isset($_GET['id'])){
	if(isset($_COOKIE['voto_cont'])){
		$_SESSION['msg'] = "<span style='color: red'>Você já votou!</span>";
		header("Location: visualizar.php");
	}else{
		setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 15);
		$result_produto = "UPDATE produtos SET qnt_voto=qnt_voto + 1
		WHERE id ='".$_GET['id']."'"; 
		$votou_em = "INSERT INTO votacao values('','".$_SESSION['nome']."','55','".$_SESSION['usuario']."')";
//		$votou_em = "INSERT INTO votacao values('','".$_SESSION['usuario']."','".$_GET['id']."')";
		$voto_em = mysqli_query($conexao,$votou_em);
		$resultado_produto = mysqli_query($conexao, $result_produto);
		
		if(mysqli_affected_rows($conexao)){
			$_SESSION['msg'] = "<span style='color: green'>Voto recebido com sucesso!</span>";
			unset($_SESSION['msg']);
			header("Location: votou.php");
		}else{
			$_SESSION['msg'] = "<span style='color: red'>Erro ao votar!</span>";
			header("Location: visualizar.php");
		}
	}
}