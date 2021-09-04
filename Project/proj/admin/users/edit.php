<?php
include '../../init.php';

if(!isset($_SESSION['admin_id']))
    header('Location: ../');

    include '../../assets/admin/head.php';
    include '../../assets/admin/users/header.php';


    if(isset($_GET['user_id'])){
        $sql = 'select * from users where id = ?';
        $statement = $conn->prepare($sql);
        $statement->execute([
            $_GET['user_id']
          ]);

        $data = $statement->fetch();
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
                
          if($password != ''){
            $sql = 'UPDATE shop.users SET username = ?, name = ?, email = ?, gander = ?, fac = ?, password = ?, address = ?, mobile = ? where id = ?';
      
            $statement = $conn->prepare($sql);
            
            if(
            $statement->execute([
              $username,
              $name,
              $email,
              $gander,
              $fac,
              $password,
              $address,
              $mobile,
              $_GET['user_id'],
            ]))
            $_SESSION['message'] = 'the user has been updated successfully';
            
            header("Location: /proj/profile.php");
            }
            else{
      
              $sql = 'UPDATE shop.users SET username = :username, name = :name, email = :email, gander = :gander, fac = :fac, address = :address, mobile = :mobile where id = :id';
      
              $statement = $conn->prepare($sql);
      
      
              $statement->execute([
                ':id' => $_GET['user_id'],
                ':username' => $username,
                ':name' => $name,
                ':email' => $email,
                ':gander' => $gander,
                ':fac' => $fac,
                ':fac' => $fac,
                ':address' => $address,
                ':mobile' => $mobile,
              ]);
            header("Location: /proj/admin/users.php");
      
              $_SESSION['message'] = 'the user has been updated successfully';
              
              header("Location: /proj/admin/users.php");
              
            }
          }
      }
    }
    
?>

<div class="register">
        <div class="container">
    <form id="form" method="post" action="<?php $_SERVER['PHP_SELF']?>">
        <div class="form-group py-10">
            <label for="username">username</label>
            <input name="username" value="<?php echo $data['username'] ?>" type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" required>
          </div>
        <div class="form-group py-10">
            <label for="name">Name</label>
            <input name="name" value="<?php echo $data['name'] ?>" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" >
          </div>
        <div class="form-group py-10">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" value="<?php echo $data['email'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group py-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gander" id="exampleRadios1" value="male" value="male" <?php  if($data['gander'] == 'male') echo 'checked' ?>>
                <label class="form-check-label" for="exampleRadios1">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gander" id="exampleRadios2" value="female" <?php if($data['gander'] == 'female') echo 'checked' ?>>
                <label class="form-check-label" for="exampleRadios2">
                  Female
                </label>
              </div>
          </div>
          <div class="form-group">
            <label for="faculty">Faculty</label>
            <select name="fac" class="form-control" id="faculty">
              <option>Choose.. </option>
              <option value="engi" <?php if($data['fac'] == 'engi') echo 'selected' ?>>Engi</option>
              <option value="science" <?php if($data['fac'] == 'science') echo 'selected' ?>>Science</option>
            </select>
          </div>
        <div class="form-group py-10">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group py-10">
          <label for="exampleInputPassword1">address</label>
          <input name="address" value="<?php echo $data['address'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="address" required>
        </div>
        <div class="form-group py-10">
          <label for="mobile">mobile</label>
          <input name="mobile" value="<?php echo $data['mobile'] ?>" type="text" class="form-control" id="mobile" placeholder="mobile" required>
        </div>
      <br>
        <button name="submit" type="submit" class="btn btn-primary">update</button>
      </form>
    </div>
</div>

