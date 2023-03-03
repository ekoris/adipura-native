<?php

include "../config/connection.php";

$name = $_POST['name'];
$phone = $_POST['phone'];

$result = mysqli_query($mysqli, "INSERT INTO orders(name,phone) VALUES('$name','$phone')");
$admin=mysqli_query($mysqli, "SELECT number FROM admin ORDER BY RAND()") or die(mysqli_error($mysqli));
$result=mysqli_fetch_array($admin);
$adminPic = $result[array_rand($result)];

header("Location: https://wa.me/".$adminPic."?text=Hallo%20adipura%2C%20saya%20".$_POST['name'].".%20ingin%20pesan%20buku.");

die();