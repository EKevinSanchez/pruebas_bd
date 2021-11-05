<?php
    require("conexion.php");

    $nombre = "";
    $edad =  "";


    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    }

    if (isset($_POST['edad'])) {
        $edad = $_POST['edad'];
    }

    echo json_encode($nombre);
    echo json_encode($edad);

    $sql = "INSERT INTO personas (id,nombre, edad) VALUES ('', '$nombre', '$edad')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>