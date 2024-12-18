<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'cmt';
 
$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 
?>
<?php
$consulta = "SELECT * FROM retorno";
$con      = $mysqli->query($consulta) or die($mysqli->error);
?>
<html>

  <title>Retorno CMT</title>

<style type="text/css"> 
body {
  font: 75%/1.6 "Myriad Pro", Frutiger, "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", Verdana, sans-serif;
}
table {
  border-collapse: collapse;
  width: 30em;
  border: 1px solid #666;
}
thead {
  background: #ccc url(https://www.devfuria.com.br/html-css/tabelas/bar.gif) repeat-x left center;
  border-top: 1px solid #a5a5a5;
  border-bottom: 1px solid #a5a5a5;
}
tr:hover {
  background-color:#3d80df;
  color: #000;
}
thead tr:hover {
  background-color: transparent;
  color: inherit;
}
tr:nth-child(even) {
    background-color: #edf5ff;
}
th {
  font-weight: normal;
  text-align: left;
}
th, td {
  padding: 0.1em 1em;
}
</style> 
<body>
  <table border="1" id="armario">
  <thead>
    <tr>
      <td>Nome</td>
      <td>Retorno</td>
      <td>Ação</td>
    </tr>
    </thead>
    <?php while($dado = $con->fetch_array()) { ?>
     <tbody>
    <tr>
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo $dado['horario']; ?></td>
      
      <td>
        <a href="exibe.php?codigo=<?php echo $dado['id']; ?>">Editar</a>

      </td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
</body>
</html>