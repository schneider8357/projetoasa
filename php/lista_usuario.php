<!DOCTYPE html>
<html>
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
define('ROOT_PATH', '/var/www/html/projetoasa');
include ROOT_PATH . '/php/acesso_banco.php';

$l = lista();
foreach ($l as $row){
    echo "<tr>\n\t";
    echo "<td>" . $row['nome'] . "</td>\n\t";
    echo "<td>" . $row['login'] . "</td>\n\t";
    echo "<td>" . $row['uid'] . "</td>\n\t";
    echo "<td>" . $row['gid'] . "</td>\n\t";
    echo "<td>" . $row['ativo'] . "</td>\n\t";
    echo "<td>" . $row['dir'] . "</td>\n\t";
    echo "<td>" . $row['shell'] . "</td>\n";
    echo "<td>" . $row['email'] . "</td>\n";
    echo "<td><a href='remove_usuario.php?email=", urlencode($row['email']), "'>Remove</a></td>";
    echo "</tr>\n";

}
?>
</table>
</body>
</html>