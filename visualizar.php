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
include_once("conexao.php");
include('verifica_login.php');
header( 'Content-Type: text/html; charset=utf-8' );
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
<script type="text/javascript">
  //10 Segundos
  var t = 10;

  function timedCount()
  {
    if(t > 0)
    {
      document.getElementById("txt").innerText = "Atualizando Página de votação em : " + t + " segundos.";
      setTimeout("timedCount()", 1000);
	  t = t - 1;
    }
	else
	{
	  //Destino
	  location.href = "visualizar.php";
	}
  }
</script>
</head>

<body onload='timedCount()' >

<div id="txt" align="right"></div>

<h3 align="right">Logado como : <?php echo $_SESSION['nome'];?> &nbsp;&nbsp;
<a href="logout.php">Sair</a></h4>
<form name="form1" method="post" action="">
<div id="banner">

		
		

<table width="100%" height="174" border="1">
  <tr bgcolor="#00CCFF">
  	<td align="center" width="10%" bgcolor="#999999"><strong>Número do Candidato</strong></td>
    <td align="center" width="50%" bgcolor="#999999"><strong>Nome</strong></td>
    <td align="center" width="50%" bgcolor="#999999"><strong>Setor</strong></td>
 
    <td align="center" width="9%" bgcolor="#999999">Identificação</td>
    
     <td align="center" width="9%" bgcolor="#999999">Votar</td>
	
    
  </tr>
  <center> <font size="+6"> <strong><?php
if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."|";
			unset($_SESSION['msg']);
		}

$sql = "SELECT * FROM produtos";
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

    <td height="29" align="center"><strong><font id="uppercase"><?php echo "<a href='confirma.php?id=".$row['id']."'>Votar</a><hr></td> 
     ";?>
  </tr>
  
<?php } ?>
	
<br />

</form>

</body>

