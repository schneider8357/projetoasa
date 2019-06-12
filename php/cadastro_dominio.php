<!DOCTYPE html>
<html>
<body>
<?php
include_once 'mod_tabela_dominios.php';

$valores = "('$_POST[domain]')";
if (insere($valores) !== 0)
    printf("Domínio cadastrado com sucesso!");
?>

</body>
</html>
