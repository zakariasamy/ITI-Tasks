<?php
  include 'init.php';
  
  
  if(isset($_GET['user_id']) && isset($_GET['product_id']) && isset($_GET['quantity'])){
      $user =  $_GET['user_id'];
      $product = $_GET['product_id'];
      $quantity = $_GET['quantity'];

      $url = "/proj/product.php?id=" . $product ;

    $sql = 'select * from products where id = ?';

  
  $statement = $conn->prepare($sql);
  $statement->execute([
      $product
      ]);
  
    $data = $statement->fetch();
    $price = $data['price'];

    $total_price = $price * $quantity;
    $sql = 'INSERT INTO orders(user_id, quantity, total_price, product_id) VALUES(?, ?, ?, ?)';
    $statement = $conn->prepare($sql);
      $statement->execute([
        $user, $quantity, $total_price, $product
      ]);
      $_SESSION['message'] = "The product were ordered successfully";
      header("Location: $url");
    
}