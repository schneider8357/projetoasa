<!DOCTYPE html>
<html>
<body>
<?php
<<<<<<< HEAD
include_once 'mod_tabela_usuarios.php';

if (altera("nome='" . $_POST['nome'] . "', login='" . $_POST['login'] . "', senha=encrypt('" . $_POST['senha'] . "'), uid=" . $_POST['uid'] . ", gid=" . $_POST['gid'] . ", ativo='" . $_POST['ativo'] . "', dir='" . $_POST['dir'] . "', shell='" . $_POST['shell'] . "', email='" . $_POST['email'] . "'", $_POST['email_antigo']) !== 0)
=======
include 'acesso_banco.php';

if (altera("nome='" . $_POST[nome] . "', login='" . $_POST[login] . "', senha=encrypt('" . $_POST[senha] . "'), uid=" . $_POST[uid] . ", gid=" . $_POST[gid] . ", ativo='" . $_POST[ativo] . "', dir='" . $_POST[dir] . "', shell='" . $_POST[shell] . "', email='" . $_POST[email] . "'", $_POST[email]) !== 0)
>>>>>>> 5114b759109b0a903c9412def6dddda94bcab2dc
    printf("Dados atualizados com sucesso!");
?>
</body>
</html>