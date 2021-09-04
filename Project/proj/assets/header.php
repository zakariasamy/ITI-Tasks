<header>
        <div class="top">
            <div class="container">
        <div class="row">
            <div class="email col-7 text-left">
                <i class="far fa-envelope align-middle"></i> <span class="align-middle">zakariasamy10@gmail.com</span>
            </div>
            <div class="icons col-5 text-right">
                
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#" ><i class="fab fa-instagram-square"></i></a>
                <a href="#"><i class="fab fa-youtube-square"></i></a>

            </div>
        </div>
    </div>
        </div>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="http://localhost/proj">
        <img
          src="images/logo.svg"
          height="30"
          alt=""
          loading="lazy"
          style="margin-top: -1px;"
        />
      </a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/proj">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/proj/index.php#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/proj/index.php#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/proj/index.php#partners">Partners</a>
          </li>
          <?php if(isset($_SESSION['user_id'])){
          echo '<li class="nav-item">'
            . '<a class="nav-link" href="http://localhost/proj/logout.php">Logout</a>'
          . '</li>';
          }?>
          
        </ul>
        <!-- Left links -->
  
        <div class="d-flex align-items-center">
          <?php if(!isset($_SESSION['user_id'])){
            echo '<button type="button" class="first">';
            echo '  <a href="register.php">Register</a>';
            echo '</button>';
            echo ' <button type="button" class="second">';
            echo ' <a href="login.php">Login</a>';
            echo ' </button>';
          }
          else{
            echo '<button type="button" class="first">';
            echo '  <a href="orders.php">my Orders</a>';
            echo '</button>';
            echo '<button type="button" class="first">';
            echo '  <a href="profile.php">my Profile</a>';
            echo '</button>';
          }
              ?>
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
    </header>
