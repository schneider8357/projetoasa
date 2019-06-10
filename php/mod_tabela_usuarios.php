<?php

include_once 'acesso_banco.php';

function insere($valores) {
return executa("INSERT INTO ftpusers VALUES $valores");
}

function remove($valores) {
return executa("DELETE FROM ftpusers WHERE $valores");
}

function altera($valores, $email) {
return executa("UPDATE ftpusers SET $valores WHERE email='$email'");
}

function lista_um($email) {
$res = executa("SELECT * FROM ftpusers where email='$email'");
$array = array();
if (mysqli_num_rows($res) == 1) {
    // output data of each row
    $row = mysqli_fetch_assoc($res);
    $r["nome"] = $row["nome"];
    $r["login"] = $row["login"];
    $r["senha"] = $row["senha"];
    $r["uid"] = $row["uid"];
    $r["gid"] = $row["gid"];
    $r["ativo"] = $row["ativo"];
    $r["dir"] = $row["dir"];
    $r["shell"] = $row["shell"];
    $r["email"] = $row["email"];
    $r["email"] = $row["email"];
    $r["uid"] = $row["uid"];
    return $r;
} else {
    printf("Algo inesperado ocorreu, tente novamente mais tarde");
    return;
}
}

function lista() {
$res = executa("SELECT * FROM ftpusers");
$array = array();
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_assoc($res)) {
        $r["nome"] = $row["nome"];
        $r["login"] = $row["login"];
        $r["uid"] = $row["uid"];
        $r["gid"] = $row["gid"];
        $r["ativo"] = $row["ativo"];
        $r["dir"] = $row["dir"];
        $r["shell"] = $row["shell"];
        $r["email"] = $row["email"];
        $r["email"] = $row["email"];
        $r["uid"] = $row["uid"];
        $array[$i++] = $r;
    }
} else {
    echo "0 results";
}

return $array;
}

?>