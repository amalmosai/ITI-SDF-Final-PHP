<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">  
    <link rel="stylesheet" href="assets/css/headernavbarfooter.css?v=<?php echo time(); ?>">

    <title>Document</title>

    <style>
      .item-page{
        min-height:50vh;

      }
       
       .img_blog,
.img_item {
  border-radius: 5px 5px 0 0;
}

.item .first-item {
  margin: 30px;
}

.product_header a {
  text-decoration: none;
}

.product-price {
  color: #128c37;
  font-size: 15px;
  font-weight: 500;
  margin-bottom: 5px;
}

.product-location {
  font-size: 20px;
  color: #333333;
  position: relative;
  padding: 0 25px 0 0;
}

.main-items {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 10px 0px;
  margin: 10px 0px 25px;
}

.item {
  margin-left: 5px;
  border-radius: 5px;
}

.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  padding-bottom: 20px;
  border-radius: 5px;
}
.card img{
  width: 100%;
  height: 300px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.our-item-title h4 {
      color: rgb(8, 88, 28);
      margin-bottom: 25px;
      font-weight: bold;
      font-size: 25px;
      margin: 5px;
    }

    </style>
</head>
<body>
<?php
      require_once("headerandnavbar.php");
      ?>

    <!-- item-page -->

    <div class="item-page">
        <div class="container">
            <div class="our-item-title mt-4">
                <h4>Products</h4>
            </div>
            <!-- <a class="btn btn-primary" href="index.php?action=openaddproductpage"> add product</a> -->
            <?php  if(isset($_SESSION['user_id']) && $_SESSION['user_type'] =="vendor" ){
              echo "
            <a class='btn' href='index.php?action=openaddproductpage' style='position: fixed !important;
      right: 5% !important; top:50%; z-index:10;width:60px;height:60px ;line-height:50px;font-weight:bolder; border-radius:50%;background-color:#a4c63b;'><i class='fa-solid fa-plus' style='font-size:20px; color:white'></i></a>
      ";} ?>
            <div class="main-items row align-items-center  flex-lg-row justify-content-start mt-4">

                <!-- items -->
      <?php
      foreach($result as $values) 
      { 
      ?>
              <div class='card-con p-2 col-md-6 col-lg-4 col-xl-3'>
                <div class="card mb-3">
                    <img src=' assets/imgs/products_imgs/<?php echo $values['image']; ?>'
                        width="300" height="200" class="img_item" title="" alt="recycle">
                    <div class="container">
                        <div class="product_header">
                            <a href='index.php?action=showproductdetails&product_id= <?php echo $values['product_id']; ?> '>
                                <h2 class="name">
                                    <span class="name-product"><?php echo $values['name']; ?></span>
                                </h2>
                            </a>
                        </div>
                        <div class="product-price"><?php  echo $values['price']." EGP"; ?></div>
                    </div>
                </div>
      </div>

      <?php
      }
      ?>


            </div>


        </div>
    </div>
    <!-- Footer -->
    <?php
      require_once("footer.php");
      ?>
    </body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>