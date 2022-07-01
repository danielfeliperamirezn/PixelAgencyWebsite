<?php 

    $server = 'localhost';
    $username = 'root';
    $password = 'root';
    $databsae = 'clientePixel';

    try {
        $conn = new mysqli($server, $username, $password, $databsae);
    } catch (Exception $e){
        die('conexion fallida:'.$e->getMessage());
    }

