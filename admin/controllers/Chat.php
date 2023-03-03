<?php


if ( isset($_REQUEST['update-status']) ) {
    updateStatus();
}

function updateStatus()
{
    include "../../config/connection.php";
    $status = $_GET['status'];
    $id = $_GET['update-status'];
    $result = mysqli_query($mysqli, "UPDATE orders set status = $status where id = '$id'");
    header('Location: '.base_url().'admin/index.php');

}