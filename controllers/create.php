<?php

include "../config/connection.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
// Insert user data into table

$result = mysqli_query($mysqli, "INSERT INTO orders(name,phone) VALUES('$name','$phone')");
header("Location: https://wa.me/6282324613477?text=Hallo%20adipura%2C%20saya%20".$_POST['name'].".%20ingin%20pesan%20buku.");

die();