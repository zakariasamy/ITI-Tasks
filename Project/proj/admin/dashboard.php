<?php
include '../init.php';
if(isset($_SESSION['admin_id'])){
    include '../assets/admin/head.php';
    include '../assets/admin/header.php';

    echo "<p class='m-5' style='color:green;'>Welcome to Dashboard</p>";

}
else{
    header('Location: ../');
}