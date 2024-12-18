<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 

 $conectado = @ fsockopen('10.10.6.101', 23, $numeroDoErro, $stringDoErro, 10);
if ($conectado) {
?>   <img src="img/ok.jpg" width="100" height="100" title = "Pingando" alt="Pingando" longdesc="Pingando" />
<?php } else {
 ?>   <img src="img/x.jpg" width="100" height="100" title = " Não está Pingando" alt="Não está Pingando" longdesc="Não está Pingando" />
<?php }
?>
</body>
</html>