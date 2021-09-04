<?php 
$servername = "localhost";
$username = "zakaria";
$password = "!IHH2Nzj!$";
try {
    $conn = new PDO("mysql:host=$servername;dbname=shop", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }