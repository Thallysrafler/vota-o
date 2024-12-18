<?php
session_start();
include_once("conexao.php");
//Verificar se está vindo a variável id pela URL
if(isset($_GET['id'])){
$cand = ($_GET['id']);
}
$str = (string) $cand;
if ($cand > 9) {
	$dig = str_split($str);
} else {
	$dig[0] = 0; 
	$dig[1] = $str;
}
$tag = '<img src="../votacao/candidatos/';
$tag = $tag . $str;
$tag = $tag . '.jpeg"';
$tag = $tag . 'width="125" height="150">';
//echo $tag;
$sql = "SELECT * FROM produtos where id = '{$cand}'";
$res = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($res);
//echo $row['nome'];
//echo $row['setor']; 
$tag2 = 'votar.php?id=';
$tag2 = $tag2 . $str;
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Página de Votação CIPA - 2020</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/urna.css">
</head>
<body>
<div>
            <img id="tela" alt="fundo da urna" src="images/tela.jpg" width="451" height="423" border="0">
            <img id="topo" alt="topo da urna" src="images/topo.jpg" width="192" height="183" border="0">
            <img id="faixaDir" alt="faixa da direita" src="images/faixaDir.jpg" width="38" height="357" border="0">
            <img id="ladoEsqTec" alt="lado esquerdo do teclado" src="images/ladoEsqTec.jpg" width="19" height="160" border="0">
            <img id="n_1" alt="tecla número 1" src="images/n1.jpg" style="cursor: pointer;" width="51" height="41" border="0">
            <img id="n_2" alt="tecla número 2" src="images/n2.jpg" style="cursor: pointer;" width="48" height="41" border="0">
            <img id="n_3" alt="tecla número 3" src="images/n3.jpg" style="cursor: pointer;" width="48" height="41" border="0">
            <img id="ladoDirTec" alt="lado direito teclado" src="images/ladoDirTec.jpg" width="26" height="152" border="0">
            <img id="n_4" alt="tecla número 4" src="images/n4.jpg" style="cursor: pointer;" width="51" height="42" border="0">
            <img id="n_5" alt="tecla número 5" src="images/n5.jpg" style="cursor: pointer;" width="48" height="42" border="0">
            <img id="n_6" alt="tecla número 6" src="images/n6.jpg" style="cursor: pointer;" width="48" height="42" border="0">
            <img id="n_7" alt="tecla número 7" src="images/n7.jpg" style="cursor: pointer;" width="51" height="41" border="0">
            <img id="n_8" alt="tecla número 8" src="images/n8.jpg" style="cursor: pointer;" width="48" height="41" border="0">
            <img id="n_9" alt="tecla número 9" src="images/n9.jpg" style="cursor: pointer;" width="48" height="41" border="0">
            <img id="ptabaixo7" alt="parte abaixo 7" src="images/ptabaixo7.jpg" width="51" height="36" border="0">
            <img id="n_0" alt="tecla número 0" src="images/n0.jpg" style="cursor: pointer;" width="56" height="36" border="0">
            <img id="ptabaixo9" alt="parte abaixo 9" src="images/ptabaixo9.jpg" width="40" height="28" border="0">
            <img id="confirma" alt="tecla confirma" src="images/confirma.jpg" data-proximo="fim.html" style="cursor: pointer;" width="66" height="49" border="0">
            <img id="branco" alt="tecla branco" src="images/branco.jpg" style="cursor: pointer;" width="63" height="41" border="0">
            <img id="corrige" alt="tecla corrige" src="images/corrige.jpg" style="cursor: pointer;" width="63" height="41" border="0">
            <img id="abaixoTec" alt="abaixo teclado" src="images/abaixoTec.jpg" width="226" height="27" border="0">
</div> 
	<form action="" method="post"> 
		<input type=image id="Foto"style="cursor: pointer;" width="120" height="145" border="0" <?php echo $tag ?> >
	</form>
	<p id="Voto" style="font-size:50px"><?php echo $dig[0]." ".$dig[1];?></p>
	<table id="Nome">
		<tr>
			<td style="font-size:18px"><?php echo $row['nome'];?></td>
		</tr>
		<tr>
			<td style="font-size:18px"><?php echo $row['setor'];?></td>
		</tr>
	</table>

	<form action=<?php echo $tag2;?> method="post"> 
		<input type=image id="confirma" src="images/confirma.jpg" style="cursor: pointer;" width="66" height="49" border="0">
	</form>

	<form action="visualizar.php" method="post"> 
    		<input type=image id="corrige" src="images/corrige.jpg" style="cursor: pointer;" width="63" height="41" border="0">
	</form>
</body>
<html>
