<?php
$usuario='root';
$senha= '';
$database='login';

$mysqli = new mysqli($host,$usuario,$senha,$database)
if($mysqli->error){
    die("Falha ao conectar com o banco de dados: " . $mysqli->error);
}
?>

// $conection = new mysqli("localhost","root","","sistema_escolar");
//     if($conection -> connect_error){
//                        die($conection -> connect_error);
//     }
