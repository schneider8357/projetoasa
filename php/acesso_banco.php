<?php
/** Função que recebe uma Query, conecta com o banco, executa a Query e retorna o resultado. */
function executa($query) {
$link = mysqli_connect("localhost", "ftpdbuser","ftpdbuserpwd", "ASA");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Falha na conexao: %s\n", mysqli_connect_error());
    exit();
}

if (!($res=mysqli_query($link, $query))) {
    printf("Erro: %s\n", mysqli_error($link));
    return 0;
}



/* close connection */
mysqli_close($link);
return $res;
}

function insere($valores) {
return executa("INSERT INTO ftpusers VALUES $valores");
}

function remove($valores) {
return executa("DELETE FROM ftpusers WHERE $valores");
}

function lista($valores) {
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
        $array[$i++] = $r;
    }
} else {
    echo "0 results";
}

return $array;
}

?>