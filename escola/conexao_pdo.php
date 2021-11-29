<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "bdcurso";

try{
    $con = new PDO("mysql:host=$server;dbname=$bd",$user,$pass);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao Babidi Badabá";
} catch(PDOException $e) {
    echo "Deu ruim ".$e->getMessage();

}