<?php

$host='127.0.0.1';
$usuario='root';
$senha='';
$database='prodecgeral';

$conexao = mysqli_connect($host, $usuario, $senha, $database);
/*$conexao = mysqli_connect(HOST, USUARIO, SENHA, db) or die('Não foi possivel conectar');*/
/*$mysqli = new mysqli($host, $usuario, $senha, $database);*/

if (mysqli_connect_error()){
    echo "Falha na conexão" . mysqli_connect_error();    
}
/*
if($mysqli->error){
    die('Falha ao conectar o banco de dados:'.$mysqli->error);
}*/

