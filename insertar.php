<?php

include('config/conexion.php');

if (isset($_POST['guardarllegadas'])) {
    $time = $_POST['time'];
    $fromcity = $_POST['fromcity'];
    $flightno = $_POST['flightno'];
    $remarks = $_POST['remarks'];

    $query = "INSERT INTO llegadas(time, fromcity, flightno, remarks ) VALUES ('$time', '$fromcity', '$flightno', '$remarks')";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed.");
    }

    header('Location: home.php');
}

if (isset($_POST['guardarDespegue'])) {
    $time = $_POST['time'];
    $destiny = $_POST['destiny'];
    $flightno = $_POST['flightno'];
    $gate = $_POST['gate'];
    $remarks = $_POST['remarks'];

    $query = "INSERT INTO salidas(time, destiny, flightno, gate, remarks ) VALUES ('$time', '$destiny', '$flightno', '$gate', '$remarks')";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed.");
    }

    header('Location: home.php');
}
