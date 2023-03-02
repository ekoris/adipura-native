<?php
include "../../config/connection.php";
$id = $_GET['id'];
$query="DELETE from orders where id='$id'";
mysqli_query($mysqli, $query);
header("Location: ../index.php");
