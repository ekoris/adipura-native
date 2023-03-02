<?php

require_once("../../config/connection.php");

$username = $_POST['name'];
$password =  md5($_POST['password']);

$query=mysqli_query($mysqli, "SELECT * FROM users where username = '$username' and pass = '$password'") or die(mysqli_error($mysqli));
$user = mysqli_fetch_array($query);

session_start();
$_SESSION["message"] = null;
if(isset($user)){
    $_SESSION["user"] = $user;
    header("Location: ../index.php");
}else{
    $_SESSION["message"] = 'Username/Password Salah';
    header("Location: ../login.php");
}


?>