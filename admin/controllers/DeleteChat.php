<?php
include "../../config/connection.php";
$id = $_GET['id'];
$query=mysqli_query($mysqli, "DELETE FROM orders where id='$id'") or die(mysqli_error($mysqli));

header('Location: '.base_url().'admin/index.php');
