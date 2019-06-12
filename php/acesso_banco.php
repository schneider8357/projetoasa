<?php

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
?>