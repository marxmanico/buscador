<?php
$servidor="localhost"; //127.0.0.1
$baseDeDatos="buscador";
$usuario="root";
$contrasenia="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
}catch(Exception $ex){
    echo $ex->getMessage();
}
?>