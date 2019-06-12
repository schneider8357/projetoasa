<!DOCTYPE html>
<html>
<head>
    <title>Lista de Domínios</title>
    <meta charset='iso-8859-1'>
</head>
<body>
<table>
<tr>
    <th>Domínio</th>
</tr>
<?php
include_once 'mod_tabela_dominios.php';

foreach (lista() as $row){
    echo "<tr>\n\t";
    echo "<td>" . $row['domain'] . "</td>\n\t";
    echo "<td><a href='altera_dominio_form.php?domain=", urlencode($row['domain']), "'>Altera</a></td>";
    echo "<td><a href='remove_dominio.php?domain=", urlencode($row['domain']), "'>Remove</a></td>";
    echo "</tr>\n";

}
?>
</table>
</body>
</html>