<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mudar Senha</title>
</head>

<?php
include ("conexaoREL.php");
?>

<?php
if(!$_SESSION["loginREL"])
die("<h3>Você não tem autorização para entrar nesta página!</h3>");
else  
?> 

<?php 		  
$redefinir = $_SESSION["loginREL"];		  		  

$sql_senhaREL = mysql_query("SELECT * FROM relatores WHERE loginREL='$redefinir'");
while($linha = mysql_fetch_array($sql_senhaREL))
{
$mostrar_senhaREL = $linha["senhaREL"];

}
?>

<?php
if(!$_SESSION["loginREL"])
die("<h3>Você não tem autorização para entrar nesta página!</h3>");
else  
?> 

        <form method="post">
            <table>

                <tr>
                    <td>Nova senha:</td>
                    <td><input type="password" name="senhaREL" size="20" /></td>
                </tr>

                <tr>
                    <td><input type="submit" name="enviar" value="Confirmar"></input></td>   
                </tr> 


            </table>

        </form>

    </body>

    <?php
    include ("conexaoREL.php");
    ?>

    <?php
   if($_POST["enviar"])
       {
    $senhaREL = $_POST["senhaREL"];

if($senhaREL != ""){
$senhaREL = md5($senhaREL);}

    $modifica = "UPDATE relatores SET senhaREL='$senhaREL'";
    mysql_query($modifica,$conexao);
    echo "<script> alert ('Senha alterada com sucesso!'); </script>";

   }
?>

</html>