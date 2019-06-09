<!DOCTYPE html>
<html>
<body>
<?php
define('ROOT_PATH', '/var/www/html/projetoasa');
include ROOT_PATH . '/php/acesso_banco.php';

$valores = "('$_POST[nome]', '$_POST[login]', '$_POST[senha]', $_POST[uid] , $_POST[gid], '$_POST[ativo]', '$_POST[dir]', '$_POST[shell]', '$_POST[email]')";
if (insere($valores) !== 0)
    printf("Usuário cadastrado com sucesso!");
?>

</body>
</html>
