<html>
<body>
 
<?php

function insere($valores) {
// Formato: (ip-do-servidor,usuario,senha,banco)
echo $valores;

$con = new mysqli("127.0.0.1","ftpdbuser","ftpdbuserpwd","ASA");
if ($con->connect_error)
  return"Não foi possível conectar com o banco: " . $conn->connect_error;

$sql=addslashes("INSERT INTO ftpusers VALUES $valores");

if ($con->query($sql) === TRUE)
  echo "Query OK";
else
  return "Erro: " . $conn->error;

$con->close();


}
?>

</body>
</html>
