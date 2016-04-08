<?php
$host="localhost";
$user="root";
$password="";
$database="employees";
try {
    $connection = new PDO("mysql:host={$host};dbname={$database}", $user, $password);
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

