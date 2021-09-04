<?php
  include 'init.php';
  include 'assets/head.php';
  include 'assets/header.php';

  $data;
  if(isset($_GET['id'])){
    $sql = 'select * from products where id = ?';
    $statement = $conn->prepare($sql);
    $statement->execute([$_GET['id']]);
    $data = $statement->fetch();
  }

?>

<div class=" text-center" style="margin:120px 0;">
<div class="container">
<?php
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-success text-center">';
        echo $_SESSION['message'];
        echo '</div>';
        unset($_SESSION['message']);
    }

?>
    <h2><?php echo $data['title'] ?></h2>
    <div class="row">
        <div class="col-4"><img style="width: 100%;" src="images/<?php echo $data['image'] ?>"></div>
        <div class="col-8">
           
        <?php echo $data['description'] ?>
        <br>
        <br>

    </div>
    </div>
    <div class="row">
        <div class="col-4">
        <div class="price">
            <h3>      
                 <span style="color: #352780;"><?php echo $data['price'] ?></span> السعر
            </h3>

        </div> 
        </div>
        <div class="col-8">
        <input id="qty" name="quantity" type="number" value="1" min="1"> Quentity
        <br>
        <br>
        <button id="buy" type="submit" onclick="buy()" class="btn btn-primary btn-block">شراء الآن</button> 
        <input id="user_id" type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">    
        <input id="product_id" type="hidden" name="product_id" value="<?php echo $data['id']?>">    
    </div>
    </div>
    </div>
</div>


  <?php 
  include 'assets/footer.php';
 ?>
    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
<script src="js/fontawesome/all.js"></script>
<script>
    function buy(){
        var quantity = document.getElementById("qty").value;
        var user = document.getElementById("user_id").value
        var product = document.getElementById("product_id").value
        var url = "/proj/order.php?user_id=" + user + "&product_id=" + product + "&quantity=" + quantity;
        
        window.location.href = url;
    }
</script>
</body>
</html>