<?php
include '../../init.php';

if(!isset($_SESSION['admin_id']))
header('Location: ../');

include '../../assets/admin/head.php';
include '../../assets/admin/users/header.php';



if(isset($_GET['user_id'])){

    $sql = 'delete from users where id = ?';
    
    $statement = $conn->prepare($sql);
    $statement->execute([
        $_GET['user_id']
    ]);
    $_SESSION['message'] = 'the user has been deleted successfully';
    header('Location: ../users.php');

}

