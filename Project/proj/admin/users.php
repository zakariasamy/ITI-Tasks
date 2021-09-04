<?php
include '../init.php';

if(!isset($_SESSION['admin_id']))
    header('Location: ../');

    include '../assets/admin/head.php';
    include '../assets/admin/header.php';


    
$sql = 'select id, name, email, fac from users order by id';
$statement = $conn->prepare($sql);
$statement->execute();

$data = $statement->fetchAll();


?>
    <?php 
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-success text-center">';
        echo $_SESSION['message'];
        echo '</div>';
        unset($_SESSION['message']);
    }

    ?>
    <div class="container">
        <button class="btn btn-primary m-3"><a href="users/add.php">Add new user</a></button>
        <table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">faculty</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($data as $user){
          echo '<tr>';
          echo "<td>" . $user['id'] . "</td>";
          echo "<td>" . $user['name'] . "</td>";
          echo "<td>" . $user['email'] . "</td>";
          echo "<td>" . $user['fac'] . "</td>";
          echo '<td><button type="button" class="btn btn-primary" class="
          margin-right: 4px;
          "><a href="users/edit.php?user_id=' . $user['id'] . '">edit</a></button><button name="delete" type="button" class="btn btn-danger"><a href="users/delete.php?user_id=' . $user['id'] . '">delete</a></button></td>';
          echo '</tr>';
      }
      ?>

  </tbody>
</table>
</div>
