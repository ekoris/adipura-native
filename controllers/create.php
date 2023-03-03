<?php

include "../config/connection.php";

$name = $_POST['name'];
$phone = $_POST['phone'];

$admin=mysqli_query($mysqli, "SELECT number FROM admin ORDER BY RAND()") or die(mysqli_error($mysqli));
$result=mysqli_fetch_array($admin);
$adminPic = $result[array_rand($result)];

mysqli_query($mysqli, "INSERT INTO orders(name,phone,wa_admin,status) VALUES('$name','$phone','$adminPic',1)");
try {
    $url = "https://wa.me/".$adminPic."?text=Hallo%20adipura%2C%20saya%20".$_POST['name'].".%20ingin%20pesan%20buku.";
    $urlWa = str_replace(PHP_EOL, '', $url);
    header("Location: ".$urlWa."");
} catch (\Throwable $th) {
    header("Location: index.php");
}
