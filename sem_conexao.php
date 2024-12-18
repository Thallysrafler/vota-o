<html>
<body>
<title>Scripts CMT</title>
<iframe frameborder="0" width="400" height="600" align="left" src="mensagem.html" > </iframe>
<form action="sem_conexao.php" method="post" align = "center" enctype="multipart/form-data">
 <?php
session_start();
include('verifica_login.php');
include_once("conexao.php");
?>
 <table width="625" align="center" border="0">
    <tr>
   <strong>    SCRIPT - SEM CONEXÃO</strong></div><td width="389"></td>
   <p></p>
  </tr>
  <tr>
  <tr>
   <td width="219"><strong> * Conectado no WGC ?</strong></td>
    <td><label for="conectado"></label>
      <select name="conectado_wgc">
   <option value="sim">Selecione uma opção</option>
  <option value="sim">Sim</option>
  <option value="não">Não</option>
  </select></td>
  </tr>
        <td width="219"><strong> * Cabos Verificados ?</strong></td>
    <td><label for="cabos"></label>
      <select name="cabos_conectados">
   <option value="sim">Selecione uma opção</option>
  <option value="sim">Sim</option>
  <option value="não">Não</option>
  </select></td>
  </tr>
    <td width="219"><strong> * Retirou da tomada: </strong></td>
    <td><label for="tomada"></label>
      <select name="tomadas_conectadas">
   <option value="sim">Selecione uma opção</option>
  <option value="sim">Sim</option>
  <option value="não">Não</option>
  </select></td>
  </tr>
    <td width="219"><strong> *Conferência POE / LAN:</strong> </td>
    <td><label for="lan"></label>
      <select name="lans_conectadas">
   <option value="sim">Selecione uma opção</option>
  <option value="sim">Sim</option>
  <option value="não">Não</option>
  <option value="não">Não se aplica</option>
  </select></td>
  </tr>
    <td width="219">  Qual o Status dos Led's?</td>
    <td><label for="leds"></label>
      <input name="leds" type="text" id="leds" size="50"></td>
  </tr>
 
    <td width="219">Quais led's foram verificados?:</td>
    <td><input type="checkbox" name="power" value="sim"> POWER<br>
  <input type="checkbox" name="los" value="sim"> LOS<br>
  <input type="checkbox" name="pon" value="sim" > PON<br>
  <input type="checkbox" name="lan" value="sim" > LAN<br>
  <input type="checkbox" name="outros" value="quais" > OUTROS <label for="outros"></label>
      <input name="outros_dispositivos" type="text" id="outros_dispositivos" size="30"></td>
      </tr>
	  <td width="219">Possui acesso remoto?</td>
     <td><label for="acesso"></label>
      <select name="acesso_remoto">
   <option value="sim">Selecione uma opção</option>
  <option value="sim">Sim</option>
  <option value="não">Não</option>
  </select></td>
	  </tr>
   </tr>
      <td width="219"><strong>* Modelo do Equipamento:</strong></td>
     <td><label for="equipamento"></label>
      <input name="equipamento" type="text" id="equipamento" size="50"></td>
	  </tr>
      <td width="177"><strong>* Telefone p/ Contato:</strong></td>
     <td><label for="telefone"></label>
      <input name="telefone" type="text" id="telefone" size="50"></td>
	  </tr>
      <td width="219"><strong>* Teste de Velocidade Realizado?</strong></td>
     <td><label for="teste"></label>
      <select name="teste_velocidade">
   <option value="sim">Selecione uma opção</option>
  <option value="sim">Sim</option>
  <option value="não">Não</option>
  <option value="não">Não se aplica</option>
  </select></td>
	  </tr>
    <td width="219">Observação:</td>
    <td><label for="observacao"></label>
      <textarea name="observacao" type="text" id="observacao" rows="5" cols="50" size="450"></textarea></td>
  
 
     <td width="3"></div>
     </tr>
     
  <tr>
   
   
   
  
 <td colspan="2" bgcolor="#FFFFFF"><div align="center">
   
      <input type="submit" name="enviar" id="enviar" value="enviar" />
      <input name="acao" type="hidden" id="acao" value="enviar"/>
      
      </div></td>
  </tr>
  <tr>
  
  </tr>
  </tr>
</table>
 <div align="center">
 <textarea id="script" name="select" onClick='highlight(this);' type="text"  rows="10" cols="60" size="450">
<?php
@$conectado = $_POST['conectado_wgc'];
@$cabos = $_POST['cabos_conectados'];
@$tomada = $_POST['tomadas_conectadas'];
@$lan = $_POST['lans_conectadas'];
@$leds= $_POST['leds'];
@$power= $_POST['power'];
@$los= $_POST['los'];
@$pon= $_POST['pon'];
@$lan= $_POST['lan'];
@$outros= $_POST['outros'];
@$outros_dispositivos = $_POST['outros_dispositivos'];
@$remoto = $_POST['acesso_remoto'];
@$modelo = $_POST['equipamento'];
@$telefone = $_POST['telefone'];
@$velocidade = $_POST['teste_velocidade'];
@$observacao = $_POST['observacao'];

$power= "NÃO";
$los= "NÃO";
$pon= "NÃO";
$lan= "NÃO";
$outros= "NÃO";
 
 if(isset($_POST['power'])){
     $power = "SIM"; 
} else{
	$power = "NÃO";
}
	if(isset($_POST['los'])){
     $los = "SIM"; 
} else{
	$los = "NÃO";
}
	if(isset($_POST['pon'])){
      $pon = "SIM"; 
} else{
	$pon = "NÃO";
}
	if(isset($_POST['lan'])){
     $lan = "SIM"; 
} else{
	$lan = "NÃO";
}
	if(isset($_POST['outros'])){
      $outros = "QUAIS?"; 
} else{
	$outros = " ";
}
//@$x = $_POST['x'];
@$acao = $_POST['acao'];
	//if($x=='ATIVO'){
		if($acao=='enviar'){
			if($modelo==''|| $velocidade==''){
		echo "'ERRO!  OS CAMPOS EM NEGRITO SÃO OBRIGATÓRIOS!!'";
			} else {
				echo "CONECTADO NO WGC:" ; echo htmlspecialchars($_POST['conectado_wgc']), "\n";
				echo "CABOS VERIFICADOS:"; echo htmlspecialchars($_POST['cabos_conectados']), "\n";
				echo "DESLIGOU OS EQUIPAMENTOS:"; echo htmlspecialchars($_POST['tomadas_conectadas']), "\n"; 
				echo "CONFERENCIA POE / LAN:"; echo htmlspecialchars($_POST['lans_conectadas']), "\n";
				echo "STATUS DOS LEDS:"; echo htmlspecialchars($_POST['leds']), "\n"; 
				echo "LEDS VERIFICADOS: \n";
				echo "POWER:"; echo $power ; 
				echo "\n LOS:"; echo $los ; 
				echo "\n PON:"; echo $pon ; 
				echo "\n LAN:"; echo $lan ; 
				echo "\n OUTROS:"; echo htmlspecialchars($_POST['outros_dispositivos']), "\n"; 
				echo "ACESSO REMOTO:"; echo htmlspecialchars($_POST['acesso_remoto']), "\n"; 
				echo "MODELO DO EQUIPAMENTO:"; echo htmlspecialchars($_POST['equipamento']), "\n"; 
				echo "TELEFONE DE CONTATO:"; echo htmlspecialchars($_POST['telefone']), "\n"; 
				echo "TESTE DE VELOCIDADE REALIZADO?"; echo htmlspecialchars($_POST['teste_velocidade']), "\n"; 
				echo "OBSERVAÇÃO:"; echo htmlspecialchars($_POST['observacao']), "\n";
				
	
}}
?>
</textarea>
<br />&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
<button type="button" onClick="myFunction()">Copiar </button>
<script>
function myFunction() {
  document.getElementById("script").select();
  document.execCommand('copy');
  alert('Conteúdo copiado do sucesso!!')
}
</script></div>
 <td width="219"><div align="center"><a href="menu.php"><< Voltar</a></div></td>
</form>



</body>
</html>




