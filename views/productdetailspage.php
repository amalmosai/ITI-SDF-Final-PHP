


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css"> 
    <link rel="stylesheet" href="assets/css/productdetailspage.css?v=<?php echo time(); ?>">
 
    <title>productdetailspage</title>

</head>
<body>
<?php
      require_once("headerandnavbar.php");
      ?>

    <!-- product details page  section -->


    <div class="productdetailspage">
      <div class="container">
        <div class="row mb-md-5">
          <div class="productdetailspage__img col-md-5 mb-5">
            <img id="productdetailspage__img" src="assets/imgs/products_imgs/<?php echo $result['image']; ?>" alt="">
          </div>
          <div class="productdetailspage__content col-md-5">
            <h2 class="product_name" id="product_name"><?php echo $result['name']; ?></h2>
            
            
            <strong class="product_price" id="product_price"><?php echo $result['price']; ?></strong>
            <strong class="EGP">EGP</strong>
            <?php
            if($_SESSION['user_type']!="vendor")
            {

            
            
            ?>

            <p><button class="product_addtocart_btn"    onclick="location.href='index.php?action=addtocart&product_id=<?php echo $result['product_id']; ?>&product_price=<?php echo $result['price']; ?>' "  >Add to Cart</button></p>
              <?php
              }
              ?>
          </div>
        </div>
        <div class="product_details">
          <strong class="product_details_title">product details</strong>
          <div>
             <p class="product_details_content text-wrap" id="product_details_content"><?php echo $result['description']; ?></p>

          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
<?php
      require_once("footer.php");
      ?>
  


 

      



</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/productdetailspage.js?v=<?php echo time(); ?>"></script>
</html>