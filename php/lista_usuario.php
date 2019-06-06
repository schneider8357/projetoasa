<!DOCTYPE html>
<html>
<body>
<?php
define('ROOT_PATH', '/var/www/html/projetoasa');
include ROOT_PATH . '/php/acesso_banco.php';

$l = lista();
for ($i=0;$i<count($l);$i++){
    $row = $l[$i];
    echo "Nome: " . $row['nome'] . " ";
    echo "Login: " . $row['login'] . " ";
    echo "uid: " . $row['uid'] . "<br />";
}
?>

</body>
</html>
