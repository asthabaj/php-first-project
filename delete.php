<?php
session_start();
include "connect.php";
if(isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];

    // Query to select user based on userid
    $sql = "UPDATE `user` SET `deleted_at` = NOW() WHERE id = '$userid'";
    mysqli_query($con, $sql);

    
    
}
header('location:index.php');
?>