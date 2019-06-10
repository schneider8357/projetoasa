<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
    <meta charset='iso-8859-1'>
</head>
<body>
<table>
<tr>
    <th>Nome</th>
    <th>Login</th>
    <th>uid</th>
    <th>gid</th>
    <th>Ativo</th>
    <th>Diretorio</th>
    <th>Shell</th>
    <th>E-mail</th>
</tr>
<?php
include_once 'mod_tabela_usuarios.php';

foreach (lista() as $row){
    echo "<tr>\n\t";
    echo "<td>" . $row['nome'] . "</td>\n\t";
    echo "<td>" . $row['login'] . "</td>\n\t";
    echo "<td>" . $row['uid'] . "</td>\n\t";
    echo "<td>" . $row['gid'] . "</td>\n\t";
    echo "<td>" . $row['ativo'] . "</td>\n\t";
    echo "<td>" . $row['dir'] . "</td>\n\t";
    echo "<td>" . $row['shell'] . "</td>\n";
    echo "<td>" . $row['email'] . "</td>\n";
    echo "<td><a href='altera_usuario_form.php?email=", urlencode($row['email']), "'>Altera</a></td>";
    echo "<td><a href='remove_usuario.php?email=", urlencode($row['email']), "'>Remove</a></td>";
    echo "</tr>\n";

}
?>
</table>
</body>
</html>