<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/headernavbarfooter.css?v=<?php echo time(); ?>">



  <style>
    /* start item section */
     a{
      text-decoration: none;

    }
    #item-page{
      min-height:50vh;
      
    }
    

    .our-item-title {
      color: var(--green);
      font-size: 30px;
      margin-top: 15px;
    }

    .our-item-title h4 {
      color: rgb(8, 88, 28);
      margin-bottom: 25px;
      font-weight: bold;
      font-size: 25px;
      margin: 5px;
    }

    .main-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      padding: 10px 0px;
      margin: 10px 0px 25px;
    }

    .main-items .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding-bottom: 20px;


    }

    .main-items .card img {
      width: 100%;
      border-radius: 10px;
      height: 200px;



    }

    .main-items .card .product_header {
      font-size: 30px;
      margin-top: 15px;
      color: rgb(4, 87, 41);
      padding: 10px;

    }

    .main-items .card .product-location {
      font-size: 20px;
      color: #333333;
      position: relative;
      padding: 0 25px 0 0;
      padding: 10px;

    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
    .item-page .container a{
      position: fixed !important;
      right: 0 !important;
    }




    /* end item section */
  </style>


  <title>Document</title>
</head>

<body>


      <?php
      require_once("headerandnavbar.php");
      ?>




  <!------------------------------ item-page ---------------------------->

  <div id="item-page">

    <div class="container">

      <div class="our-item-title mt-4">

        <h4>Recycled Items</h4> 
      </div>
      <?php  if(isset($_SESSION['user_id']) && $_SESSION['user_type'] == "user" ){ 
        echo"
      <a class='btn' href='index.php?action=additempage' style='position: fixed !important;
      right: 3% !important; top:50%; z-index:10;width:60px;height:60px ;line-height:50px;font-weight:bolder; border-radius:50%;background-color:#a4c63b;'><i class='fa-solid fa-plus' style='font-size:20px; color:white'></i></a>
      ";} ?>
      <div class="main-items row justify-content-start">

      <?php
      foreach($result as $values) 
      { 
        ?>
        
        <div class='card-con p-2 col-md-6 col-lg-4 col-xl-3 mt-4'>
          <div class='card  mb-3'>
            <img src='assets/imgs/items_imgs/<?php echo $values['image']; ?>'>
            <div class='product_header'><?php echo $values['name']; ?></div>
            <div class='product-location'><?php echo$values['address']; ?></div>
          </div>
        </div>
        
        <?php
      }
        ?>
        </div>
      </div>
    </div>
  </div>


      <?php
      require_once("footer.php");
      ?>


</body>

<script src="assets/js/items.js?v=<?php echo time(); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>