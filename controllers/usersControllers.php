<?php 
include "config.php";
global $database_conn;

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
    //$sql = "UPDATE users set name='$name', email='$email' WHERE id='$user_id'";
    $result = mysqli_query($database_conn, $sql);
    header('location: ../register.php');
}
?>