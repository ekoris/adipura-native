<?php
include "../../config/connection.php";
$id = $_GET['id'];
$query="DELETE from orders admin id='$id'";
mysqli_query($mysqli, $query);
header("Location: ../cs.php");
