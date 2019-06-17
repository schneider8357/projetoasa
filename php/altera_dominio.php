<!DOCTYPE html>
<html>
<body>
<?php
include_once 'mod_tabela_dominios.php';


if (altera($_POST['dominio_antigo'], $_POST['domain']) !== 0)
    printf("Dados atualizados com sucesso!");
?>
</body>
</html>