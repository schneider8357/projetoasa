<!DOCTYPE html>
<html>
<body>
<?php
include 'acesso_banco.php';

if (remove("email='$_GET[email]'") !== 0)
    printf("Usuário removido com sucesso!");
?>
</body>
</html>