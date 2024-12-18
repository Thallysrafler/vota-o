<script language="JavaScript">
function abrir(URL) {

  var width = 900;
  var height = 350;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=auto, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}
</script>



<?php
session_start();
include_once("../votacao/conexao.php");
header( 'Content-Type: text/html; charset=utf-8' );
$_SESSION['msg'] = "RESULTADO DA ELEIÇÃO";
?>
<title>Página de Votação CIPA - 2021</title>
<style type="text/css" media="all">
    #uppercase{ text-transform: uppercase;}
	
	#td.emergencia { background: #FF0000; }
	#td.muitourgente {background: rgb(255,165,0); }
	#td.urgente {background: rgb(255,255,000); }
	#td.poucourgente {background: rgb(000,255,000); }
	#td.naourgente {background: rgb(000,000,255); }
		 
		 #banner {
  width: auto;
  height: auto;
  position: relative;
  
  
}

#banner:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  background: url(logo.jpg) center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: 60%;
  opacity: 0.4;
  pointer-events: none;
    
}
        </style>
<head>

</head>

<body onload='timedCount()' >

<div id="txt" align="right"></div>
<form name="form1" method="post" action="">
<div id="banner">


		
		

<table width="100%" height="174" border="1">
  <tr bgcolor="#00CCFF">
  	<td align="center" width="10%" bgcolor="#999999"><strong>Número do Candidato</strong></td>
    <td align="center" width="50%" bgcolor="#999999"><strong>Nome</strong></td>
    <td align="center" width="50%" bgcolor="#999999"><strong>Setor</strong></td>
 
    <td align="center" width="9%" bgcolor="#999999">Identificação</td>
    
     <td align="center" width="9%" bgcolor="#999999">Quantidade de Votos</td>
	
    
  </tr>
  <center> <font size="+6"> <strong><?php
if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

$sql = "SELECT * FROM produtos order by qnt_voto DESC";
$res = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_assoc($res)) {
@$bu = $row ['id'];


?>
  <tr>
	<td height="29" align="center"><?php echo $row['id'];?></td>
	<td height="29" align="center"><strong><font id="uppercase"> <?php echo $row['nome'];?></font></strong></td>
	<td height="29" align="center"><strong><font id="uppercase"><?php echo $row['setor'];?></font></strong></td>
	<?php 
	@$situacao = $row['id']; 

	if($situacao == '1'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/1.jpeg" width="54" height="54"></td>

	<?php  } ?>

 	<?php if($situacao == '2'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/2.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<?php if($situacao == '3'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/3.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<?php if($situacao == '4'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/4.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<?php if($situacao == '5'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/5.jpeg" width="54" height="54"></td>

	<?php  } ?>
     
	<?php if($situacao == '6'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/6.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<?php if($situacao == '7'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/7.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<?php if($situacao == '8'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/8.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<?php if($situacao == '9'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/9.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<?php if($situacao == '10'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/10.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<?php if($situacao == '11'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/11.jpeg" width="54" height="54"></td>

	<?php  } ?>
	<?php if($situacao == '12'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/12.jpeg" width="54" height="54"></td>

	<?php  } ?>
	<?php if($situacao == '13'){ ?>
	<td height="29" align="center"><img src="../votacao/candidatos/13.jpeg" width="54" height="54"></td>

	<?php  } ?>

	<td height="29" align="center"><strong><font id="uppercase"> <?php echo $row['qnt_voto'];?></font></strong></td>
   
  </tr>
  
    <?php } ?>
	
<br />

<?php 
       setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
       date_default_timezone_set( 'America/Bahia' );
        
?>

<font size=4 face="arial"><?php echo date('d-m-Y H:i:s');?></font>

<div align="right"><input type="button" onClick="window.print()" value="Imprimir Resultado"></div>

<table width="100%" height="44" border="1">
  <tr bgcolor="#00CCFF">
	<td align="center" width="10%" bgcolor="#999999"><strong>Id do Eleitor</strong></td>
	<td align="center" width="50%" bgcolor="#999999"><strong>Eleitor Votante</strong></td>
  </tr>
<?php
$sql = "SELECT * FROM votacao ORDER BY nome";
$res = mysqli_query($conexao, $sql);
$count = mysqli_num_rows($res);
while ($row = mysqli_fetch_assoc($res)) {
?>
 <tr>
 	<td height="19" align="center"><?php echo $row['id'];?></td>
 	<td height="19" align="center"><strong><font id="uppercase"> <?php echo $row['usuario'];?></font></strong></td>
  </tr>     
    <?php };?>

<table  width="100%" height="44" border="1">
	<tr>
	 		<td style="font-size:18px" bgcolor="#999999"><strong>Total de Votantes:</strong></td>
			<td style="font-size:18px" bgcolor="#999999"><strong><center><?php echo $count;?></center></strong></td>
	</tr>
</table>


</form>

</body>

