<?php
include "../../config/connection.php";
$id = $_GET['id'];
try {
    $query=mysqli_query($mysqli, "DELETE FROM admin where id='$id'") or die(mysqli_error($mysqli));
} catch (\Throwable $th) {
    throw $th;
}

header('Location: '.base_url().'admin/cs.php');
