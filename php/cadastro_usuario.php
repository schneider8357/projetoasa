 
<?php
define('ROOT_PATH', '/root/projetoasa');
include 'php/cadastro.php';
$valores = "'$_POST['nome']', '$_POST['login']', '$_POST['senha']', $_POST['uid'] , $_POST['gid'], '$_POST['ativo']', '$_POST['dir']', '$_POST['shell']', '$_POST['email']'"
// Formato: (ip-do-servidor,usuario,senha,banco)
$con = new mysqli("127.0.0.1","ftpdbuser","ftpdbuserpwd","ASA");
if ($con->connect_error)
  die("Não foi possível conectar com o banco: " . $conn->connect_error);

$sql=addslashes("INSERT INTO ftpusers VALUES ()");

if ($con->query($sql) === TRUE)
  echo "Query OK";
else
  die("Erro: " . $conn->error);

$con->close();

?>
