<?php
include '../init.php';
include '../assets/admin/head.php';
include '../assets/admin/header.php';

$errors= [];
?>

    <?php
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password']; // male - female

    echo "email = $email , password = $password";

      //$password = password_hash($password, PASSWORD_DEFAULT);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
      }
      

      if(empty($errors)){

      $sql = 'select * from admins where email = ? AND password = ?';

      $statement = $conn->prepare($sql);
      $statement->execute([
        $email, $password
      ]);


      $data = $statement->fetch();
      if($data){
      $_SESSION['admin_id'] = $data['id'];
      $url =  "/proj/admin/dashboard.php";
      header("Location: $url");
      }
      else
        $errors[] = 'data is wrong';
    }
    }
        
    ?>
    <?php


    if(!empty($errors))
     echo '<div class="text-center alert alert-danger">';
      
      
        foreach($errors as $error)
          echo $error . "<br>";
      
  echo '</div>';
  ?>
    <div class="register m-5">
        <div class="container">
    <form id="form" method="post" action="<?php $_SERVER['PHP_SELF']?>">


        <div class="form-group py-10">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>


        <div class="form-group py-10">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>


        <br>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>



<?php 
  include 'assets/footer.php';
  include 'assets/register/foot.php';
?>
  