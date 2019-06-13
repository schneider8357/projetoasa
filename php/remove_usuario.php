<!DOCTYPE html>
<html>
<body>
<?php
include 'mod_tabela_usuarios.php';
$user = split('@', $_GET['email'])[0];
$domain = split('@', $_GET['email'])[1];
exec("rm -rf /home/$domain/$user");
if (remove("email='$_GET[email]'") !== 0)
    printf("Usuário removido com sucesso!");
?>
</body>
</html>