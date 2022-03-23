<?php
    function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    
    $database = "carros";
    
    $con =mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$database);
    
    return $con;
    }
