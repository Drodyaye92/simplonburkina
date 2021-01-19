<?php

try {
    $db =new PDO('mysql:host=localhost; dbname=apprenants','root','');
} catch( Exceptiopn $e) {
    die('Erreur: '.$e ->getMessage());
}
if(extension_loaded('PDO')) {
    echo 'ca marche!';
}
?>