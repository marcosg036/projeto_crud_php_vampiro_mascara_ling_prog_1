<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'vampiro_mascara';

    $connection = new mysqli($servername, $username, $password, $database);

    if($connection->connect_error){
        die('Erro de conexão: '.$connection->connect_error);
    }
?>