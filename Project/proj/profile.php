<?php
  include 'init.php';
  include 'assets/head.php';
  include 'assets/header.php';
  $sql = 'select * from users where id = ?';

  if(!isset($_SESSION['user_id']))
    header("Location: /proj");

$statement = $conn->prepare($sql);
$statement->execute([
    $_SESSION['user_id']
    ]);

    $data = $statement->fetch();

?>
<div style="margin:94px 0;">
<div class="container">
    <?php 
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-success">';
        echo $_SESSION['message'];
        echo '</div>';
        unset($_SESSION['message']);
    }

    ?>
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $data['name'] ?></h4>
                      <p class="text-secondary mb-1"><?php echo $data['fac'] ?></p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>

                    </div>
                  </div>
                </div>
              </div>
       
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['name'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['email'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['mobile'] ?>
                     
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['address'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="edit-profile.php">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

 


            </div>
          </div>

        </div>
    </div>

</div>

<?php
  include 'assets/footer.php';