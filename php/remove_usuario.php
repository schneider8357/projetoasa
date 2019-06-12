<!DOCTYPE html>
<html>
<body>
<?php
include 'mod_tabela_usuarios.php';

if (remove("email='$_GET[email]'") !== 0)
    printf("Usuário removido com sucesso!");
?>
</body>
</html>