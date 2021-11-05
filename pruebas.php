<?php
    include_once ('humano.php');

    if(isset($_GET['palabra'])){
        $palabra = $_GET['palabra'];
        if(isset($_GET['tipo'])){
            $tipo = $_GET['tipo'];
            if($tipo == 'mayusculas'){
                echo "la palabra en ".$tipo." es: ".strtoupper($palabra);
            }else if($tipo == 'minusculas'){
                echo "la palabra en ".$tipo." es: ".strtolower($palabra);
            }
        }
        $palabra = strtolower($palabra);
    }

    $persona = new Humano();
    $persona->nombre=$_POST['nombre'];
    $persona->apellido=$_POST['apellido'];
    $persona->edad=$_POST['edad'];
    $persona->sexo=$_POST['sexo'];
    $persona->pais=$_POST['pais'];
    $persona->imprimir();





?>