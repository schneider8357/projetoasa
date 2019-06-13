<!DOCTYPE html>
<html>
<body>
<?php
include_once 'mod_tabela_dominios.php';


$domain = $_POST['domain'];

$array = lista();
$dominio_existe = FALSE;
foreach ($array as $row)
    if (in_array($domain, $row))
        $dominio_existe = TRUE;

if (!$dominio_existe) {
    if (insere($domain) !== 0)
        printf('Domínio criado com sucesso!<br/>');
    else
        printf("Erro ao inserir domínio no banco de dados.<br/>");
} else
    printf("Domínio já cadastrado.");
?>

</body>
</html>
