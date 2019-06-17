<?php

include_once 'acesso_banco.php';
include_once 'configura_named_e_httpd.php';

function insere($domain) {
executa("INSERT INTO domains VALUES ('$domain')");

configura_zona($domain);
configura_site($domain);

}

function lista_usuarios() {
    $res = executa("SELECT * FROM ftpusers");
    $array = array();
    if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $i = 0;
        while($row = mysqli_fetch_assoc($res)) {
            $r["email"] = $row["email"];
            $r["domain"] = split('@', $row["email"])[1];
            $array[$i++] = $r;
        }
    }
    
    return $array;
}

function remove_usuario($valores) {
return executa("DELETE FROM ftpusers WHERE $valores");
}

function remove($domain) {
$array = lista_usuarios();
foreach ($array as $row)
    if (in_array($domain, $row))
        remove_usuario("email='$row[email]'");
exec('rm '.escapeshellarg("/etc/projetoasa/sites/www.$domain"));
exec('rm '.escapeshellarg("/etc/projetoasa/zones/$domain"));
exec('rm '.escapeshellarg("/etc/projetoasa/zone_files/$domain"));
exec('/etc/projetoasa/rndc &');
exec('/etc/projetoasa/apache &');
$arg = escapeshellarg($domain);
$include = 'include \"/etc/projetoasa/zones/'.$arg.'\";';
exec("sed -ci 's@^$include@//$include@g' /etc/projetoasa/zones.conf");
exec("rm -rf /home/$arg");
executa("DELETE FROM domains WHERE domain='$domain'");
}

function altera($old_domain, $domain) {
remove($old_domain);
insere($domain);
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
    printf("Algo inesperado ocorreu, tente novamente mais tarde<br/>");
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