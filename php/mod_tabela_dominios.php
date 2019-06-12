<?php

include_once 'acesso_banco.php';

function insere($valores) {
return executa("INSERT INTO domains VALUES $valores");
}

function remove($valores) {
return executa("DELETE FROM domains WHERE $valores");
}

function altera($valores, $domain) {
return executa("UPDATE domains SET $valores WHERE domain='$domain'");
}

function lista_um($domain) {
$res = executa("SELECT * FROM domains where domain='$domain'");
$array = array();
if (mysqli_num_rows($res) == 1) {
    // output data of each row
    $row = mysqli_fetch_assoc($res);
    $r["domain"] = $row["domain"];
    return $r;
} else {
    printf("Algo inesperado ocorreu, tente novamente mais tarde");
    return;
}
}

function lista() {
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

?>