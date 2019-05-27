<!DOCTYPE html>
<html>
<body>
<?php
define('ROOT_PATH', '/var/www/html/projetoasa');
include ROOT_PATH . '/php/cadastro.php';

// Formato: (ip-do-servidor,usuario,senha,banco)
$valores = "testando";
$valores = "('$_POST[nome]', '$_POST[login]', '$_POST[senha]', $_POST[uid] , $_POST[gid], '$_POST[ativo]', '$_POST[dir]', '$_POST[shell]', '$_POST[email]')";
echo $valores;
insere($valores);
?>

</body>
</html>