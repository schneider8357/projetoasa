<!DOCTYPE html>
<html>
<body>
<?php
include 'mod_tabela_dominios.php';

if (remove("domain='$_GET[domain]'") !== 0)
    printf("Domínio removido com sucesso!");
?>
</body>
</html>