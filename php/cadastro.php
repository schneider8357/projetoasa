<html>
<body>
 
<?php

function insere($valores) {
$link = mysqli_connect("localhost", "ftpdbuser","ftpdbuserpwd", "ASA");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_query($link, "INSERT INTO ftpusers VALUES $valores")) {
    printf("Errormessage: %s\n", mysqli_error($link));
}

/* close connection */
mysqli_close($link);
}
?>

</body>
</html>
