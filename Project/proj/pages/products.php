<div class="products mt-3 mb-3" id="products">
<div class="container-fluid">
<h3 style="font-size: 31px;
    color: #009ee2;
    text-align: center;margin: 28px 0;"><strong>Products</strong></h3>

    <div class="row g-2">
        <?php foreach($data as $product){
            echo '<div class="col-md-4">';
            echo '<div class="card">';
            echo '<div class="img-container">';
            echo '<img src="images/'  . $product["image"] . '"  width=400 height=400>';
            echo '</div>';
            echo '<div class="product-detail-container">';
            echo '        <div class="d-flex justify-content-between align-items-center">';
            echo '            <h6 class="mb-0"><a href="product.php?id=' . $product['id'] . '">' . $product['title'] . '</a></h6> <span class="text-primary font-weight-bold">$' . $product["price"]. '</span>';
            echo '       </div>';

            echo '       <div class="mt-3">         <button onclick="details(' . $product["id"] . ')" id="details" type="submit" class="btn btn-primary btn-block">تفاصيل</button> 
            </div>';
            echo '   </div>';
            echo '</div>';
       echo ' </div>';
        }?>


    </div>
</div>
</div>