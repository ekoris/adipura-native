<?php

include "../../config/helper.php";
session_start();
$_SESSION["user"] = null;
$_SESSION["message"] = null;

header('Location: '.base_url().'admin/login.php');
?>