<?php

// MYSQL
$servername = "localhost"; 
$database = "curso_estoque"; 
$username = "root";
$password = "";
$conexao = mysqli_connect($servername, $username, $password, $database);


// PDO

$pdo = new PDO("mysql:dbname=$database;host=localhost", $username, $password);

