<?php
    include('config/conexion.php');

    if(isset($_POST['documento']) && !empty($_POST['documento']) && isset($_POST['password']) && !empty($_POST['password'])){

        $documento = $_POST['documento'];
        $password = $_POST['password'];

        $query = "SELECT * FROM  usuarios where (documento_user = '$documento' && passwordd = '$password')";
        $result = mysqli_query($conexion,$query);

        if (mysqli_num_rows($result)>0){
            echo json_encode(array('success'=> 1));
        }else{
            echo json_encode(array('success'=> 0));
        }

    }
