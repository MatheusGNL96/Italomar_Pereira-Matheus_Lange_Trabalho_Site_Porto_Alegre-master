<?php

$con = mysqli_connect("localhost","root","","formpoa");

if(mysqli_connect_errno()){
    echo "Falha ao conectar: " . mysqli_connect_error();
    die();
}

?>