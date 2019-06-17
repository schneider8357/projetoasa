<!DOCTYPE html>
<html>
<body>
<?php
include_once 'mod_tabela_usuarios.php';

function lista_dominios() {
    $res = executa("SELECT * FROM domains");
    $array = array();
    if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $i = 0;
        while($row = mysqli_fetch_assoc($res)) {
            $r["domain"] = $row["domain"];
            $array[$i++] = $r;
        }
    } else {
        echo "0 results";
    }
    return $array;
}

$domain = split('@', $_POST['email'])[1];
$array = lista_dominios();
$dominio_existe = FALSE;
foreach ($array as $row)
    if (in_array($domain, $row))
        $dominio_existe = TRUE;

if ($dominio_existe) {
    $valores = "('$_POST[nome]', '$_POST[login]', encrypt('$_POST[senha]'), $_POST[uid] , $_POST[gid], '$_POST[ativo]', '/home/$domain/$_POST[login]', '$_POST[shell]', '$_POST[email]')";
    if (insere($valores) !== 0)
        printf("Usuário cadastrado com sucesso!");
} else {
    printf("Domínio não cadastrado.");
}

?>

</body>
</html>
