<?php
include '../../init.php';
include '../../assets/register/head.php';
include '../../assets/admin/users/header.php';

$errors= [];
?>

    <?php
    if(isset($_POST['submit'])){
      $username =  $_POST['username'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $gander = $_POST['gander']; // male - female
      $fac = $_POST['fac']; // male - female
      $password = $_POST['password']; // male - female
      $address = $_POST['address']; // male - female
      $mobile = $_POST['mobile']; // male - female


      //$password = password_hash($password, PASSWORD_DEFAULT);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
      }
      
      if ($username == '') 
        $errors[] = "empty username";
      if ($name == '') 
        $errors[] = "empty name";
      
      if ($mobile == '') 
        $errors[] = "empty mobile";

      if ($address == '') 
        $errors[] = "empty address";
      
      if(empty($errors)){
      $sql = 'INSERT INTO users(username, name, email, gander, fac, password, address, mobile) VALUES(:username, :name, :email, :gander, :fac, :password, :address, :mobile)';

      $statement = $conn->prepare($sql);
      $statement->execute([
        ':username' => $username,
        ':name' => $name,
        ':email' => $email,
        ':gander' => $gander,
        ':fac' => $fac,
        ':fac' => $fac,
        ':password' => $password,
        ':address' => $address,
        ':mobile' => $mobile,
      ]);

      $id = $conn->lastInsertId();
      
      $_SESSION['user_id'] = $id;
      $_SESSION['message'] = 'new user has been added successfully';

      header("Location: ../users.php");
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
    <div class="register">
        <div class="container">
    <form id="form" method="post" action="<?php $_SERVER['PHP_SELF']?>">
        <div class="form-group py-10">
            <label for="username">username</label>
            <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" required>
          </div>
        <div class="form-group py-10">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" >
          </div>
        <div class="form-group py-10">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group py-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gander" id="exampleRadios1" value="male" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gander" id="exampleRadios2" value="female">
                <label class="form-check-label" for="exampleRadios2">
                  Female
                </label>
              </div>
          </div>
          <div class="form-group">
            <label for="faculty">Faculty</label>
            <select name="fac" class="form-control" id="faculty">
              <option>Choose.. </option>
              <option value="engi">Engi</option>
              <option value="science">Science</option>
            </select>
          </div>
        <div class="form-group py-10">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group py-10">
          <label for="exampleInputPassword1">address</label>
          <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="address" required>
        </div>
        <div class="form-group py-10">
          <label for="mobile">mobile</label>
          <input name="mobile" type="text" class="form-control" id="mobile" placeholder="mobile" required>
        </div>
      <br>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>



<?php 
  include '../../assets/register/foot.php';
?>
  