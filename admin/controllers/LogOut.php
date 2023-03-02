<?php

session_start();
$_SESSION["user"] = null;
$_SESSION["message"] = null;
header("Location: ../login.php");
?>