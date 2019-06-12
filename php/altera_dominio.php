<!DOCTYPE html>
<html>
<body>
<?php
include_once 'mod_tabela_dominios.php';

if (altera("domain='" . $_POST['domain'] . "'", $_POST['dominio_antigo']) !== 0)
    printf("Dados atualizados com sucesso!");
?>
</body>
</html>