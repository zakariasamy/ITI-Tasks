<?php
  include 'init.php';
  include 'assets/head.php';
  include 'assets/header.php';

  if(!isset($_SESSION['user_id']))
    header('Location: ../');

$sql = 'SELECT * FROM orders join products on orders.product_id = products.id where user_id = ? order by orders.id desc;';
$statement = $conn->prepare($sql);
$statement->execute([$_SESSION['user_id']]);

$data = $statement->fetchAll();
?>
<div class="container">
        <button class="btn btn-primary m-3"><a href="users/add.php">Add new user</a></button>
        <table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">product</th>
      <th scope="col">quantity</th>
      <th scope="col">total_price</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($data as $order){
          echo '<tr>';
          echo "<td>" . $order['id'] . "</td>";
          echo "<td>" . $order['title'] . "</td>";
          echo "<td>" . $order['Quantity'] . "</td>";
          echo "<td>" . $order['total_price'] . "</td>";
          echo '</tr>';
      }
      ?>

  </tbody>
</table>
</div>

