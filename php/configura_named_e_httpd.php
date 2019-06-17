<?php
function configura_zona($domain) {
    $file = shell_exec('cat ../templates/bind');
    $file = str_replace('{{domain}}', $domain, $file);
    $cmd = 'echo '.escapeshellarg($file).' >> /etc/projetoasa/zones/'.escapeshellarg($domain);
    exec($cmd);
    $cmd = 'echo '.escapeshellarg('include "/etc/projetoasa/zones/'.$domain.'";').' >> /etc/projetoasa/zones.conf';
    exec($cmd);
    $file = shell_exec('cat ../templates/bind_file');
    $file = str_replace('{{domain}}', $domain, $file);
    $cmd = 'echo '.escapeshellarg($file).' >> /etc/projetoasa/zone_files/'.escapeshellarg($domain);
    exec($cmd);
    exec('/etc/projetoasa/rndc &');
}

function configura_site($domain) {
    exec('mkdir '.escapeshellarg("/home/$domain"));
    exec('mkdir '.escapeshellarg("/home/$domain/adm"));
    $file = shell_exec('cat ../templates/httpd');
    $file = str_replace('{{domain}}', $domain, $file);
    $cmd = 'echo '.escapeshellarg($file).' >> /etc/projetoasa/sites/www.'.escapeshellarg($domain);
    exec($cmd);
    exec('/etc/projetoasa/apache &');
}
?>