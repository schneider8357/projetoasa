<!DOCTYPE html>
<html>
<body>
<?php
include_once 'mod_tabela_usuarios.php';

$valores = "('$_POST[nome]', '$_POST[login]', '$_POST[senha]', $_POST[uid] , $_POST[gid], '$_POST[ativo]', '$_POST[dir]', '$_POST[shell]', '$_POST[email]')";
if (insere($valores) !== 0)
    printf("Usuário cadastrado com sucesso!");
?>

</body>
</html>
