<?php 
$server = 'localhost';
$database = 'login';
$username = 'root';
$password = 'root';


$connection = new mysqli($server, $user, $password, $database);

if ($connection->connect_errno){
    echo "failed to connect database". $connection->connect_error; 
}



?>