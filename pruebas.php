<?php
    require("conexion.php");

    $nombre = "";
    $edad =  "";
    $passwords = "";


    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    }

    if (isset($_POST['edad'])) {
        $edad = $_POST['edad'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }

    $hash = password_hash($passwords, PASSWORD_DEFAULT);

    echo json_encode($nombre);
    echo json_encode($edad);

    $sql = "INSERT INTO personas (id, nombre, edad, contra) VALUES ('', '$nombre', '$edad', '$hash')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>