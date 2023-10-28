<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// db connection 

$data = mysqli_connect($servername, $username, $password);

if(!$data){
    echo "error in connection";
}

$db_conn = mysqli_query($data,"CREATE DATABASE IF NOT EXISTS $dbname" );

$database_conn = mysqli_connect($servername,$username,$password,$dbname);

$usertable_query = "CREATE TABLE IF NOT EXISTS users (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NULL , `email` VARCHAR(255) NULL , `password` VARCHAR(255) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";


mysqli_query($database_conn, $usertable_query);
?>