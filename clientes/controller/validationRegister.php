<?php 

    require '../model/database.php';

    $_POST;

    $sql = "INSERT INTO clientesPixel (nombre, telefono, servicio, ciudad, dominio, contraseña) VALUES (?, ?, ?, ?, ?, ?)";
    $stamen = $conn->prepare($sql);
    $stamen->bind_param('ssssss', $_POST['nombre'], $_POST['telefono'],$_POST['servicios'], $_POST['ciudad'], $_POST['dominio'], $_POST['password']);
    //$stamen->execute();
    if($stamen->execute()) {
        $conn->affected_rows;
        $_SESSION["dominio"] = $_POST['dominio'];
        $_SESSION["password"] = $_POST['password'];
        //header('location: colecciones.php');
    } else {
        header('location: index.php');
    }


?>