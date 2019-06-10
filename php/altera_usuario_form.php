<!DOCTYPE html>
<html>
<body>
<h1>Alterar dados de usuário</h1>
<form action="altera_usuario.php" method="post">
<?php
<<<<<<< HEAD
include_once 'mod_tabela_usuarios.php';

$row = lista_um($_GET['email']);
=======
include 'acesso_banco.php';

$row = lista_um($_GET[email]);
>>>>>>> 5114b759109b0a903c9412def6dddda94bcab2dc
echo 'Nome: <input type="text" name="nome" value="' . $row['nome'] . '" /><br><br>';
echo 'Login: <input type="text" name="login" value="' . $row['login'] . '" /><br><br>';
echo 'Senha: <input type="password" name="senha" value="' . $row['senha'] . '" /><br><br>';
echo 'UID: <input type="text" name="uid" value="' . $row['uid'] . '" /><br><br>';
echo 'GID: <input type="text" name="gid" value="' . $row['gid'] . '" /><br><br>';
if ($row['ativo'] == 's') {
    $s = 'checked';
    $n = '';
} else {
    $s = '';
    $n = 'checked';
}
echo 'Ativo: S: <input type="radio" name="ativo" value="s" ' . $s . '/> N:<input type="radio" name="ativo" value="n" ' . $n . '/><br><br>';
echo 'Diretório: <input type="text" name="dir" value="' . $row['dir'] . '" /><br><br>';
echo 'Shell: <input type="text" name="shell" value="' . $row['shell'] . '" /><br><br>';
echo 'Email: <input type="text" name="email" value="' . $row['email'] . '" /><br><br>';
<<<<<<< HEAD
echo '<input type="hidden" name="email_antigo" value="' . $row['email'] . '" /><br><br>';
=======
>>>>>>> 5114b759109b0a903c9412def6dddda94bcab2dc
?>
<input type="submit" value="Alterar Usuário"/>
</form>
</body>
</html>