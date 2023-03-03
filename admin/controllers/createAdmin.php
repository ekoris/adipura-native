<?php

include "../../config/connection.php";
$name = $_POST['name'];
$phone = $_POST['phone'];
// Insert user data into table

$result = mysqli_query($mysqli, "INSERT INTO admin(name,number) VALUES('$name','$phone')");
header('Location: '.base_url().'admin/cs.php');

die();