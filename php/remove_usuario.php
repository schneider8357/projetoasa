<!DOCTYPE html>
<html>
<body>
<?php
define('ROOT_PATH', '/var/www/html/projetoasa');
include ROOT_PATH . '/php/acesso_banco.php';

if (remove("email='$_GET[email]'") !== 0)
    printf("Usuário removido com sucesso!");
?>

</body>
</html>