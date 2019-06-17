<!DOCTYPE html>
<html>
<body>
<h1>Alterar dados de domínio</h1>
<form action="altera_dominio.php" method="post">
<?php
include_once 'mod_tabela_dominios.php';

$row = lista_um($_GET['domain']);
echo 'Domínio: <input type="text" name="domain" value="' . $row['domain'] . '" /><br><br>';
echo '<input type="hidden" name="dominio_antigo" value="' . $row['domain'] . '" /><br><br>';
?>
<input type="submit" value="Alterar Domínio"/>
</form>
</body>
</html>