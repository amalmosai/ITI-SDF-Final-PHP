<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/headernavbarfooter.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">  
    <title>cart</title>
    <style>
        .orderdetails{
            margin-top: 30px;
            min-height:60vh;
        }

    
        .orderdetails .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: 0 auto 20px;
    text-align: center;
    font-family: arial;
    padding-bottom: 0px;
    padding:0px
    
  }
  .orderdetails img{
    width: 100%;
    height:300px
  }

  .orderdetails .card_container{
    padding:0px 10px;


  }

  
  .orderdetails .price {
    color: grey;
    font-size: 22px;
  }
  .orderdetails .card .remove-cart {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }
  .orderdetails .card .remove-cart:hover {
    opacity: 0.7;
  }
  .orderdetails #totalprice{
    padding: 50px 0;
  }
  .orderdetails .checkout{
    text-align: center;

  }
  .orderdetails .checkout-btn:hover{
    transform: scale(1.1);
  }

  .orderdetails .checkout-btn{
    padding: 20px 40px;
    background-color: var(--green);
    font-weight: bold;
    color: white;
  }

    </style>

</head>
<body onload="getData()">
<?php
      require_once("headerandnavbar.php");
      ?>
<!-- cart page  section -->
<div class="orderdetails">
    <div class="container">

        <div class=" row justify-content-start" id="orderdetailscontainer ">

    <?php
    foreach($result as $value) 
    { 

        $total_price+=$value['price']*$value['quantity'];
    ?>
            <div class="card_container col-md-6 col-lg-4">
                <div class="card">
                    <img src="assets/imgs/products_imgs/<?php echo $value['image']; ?>">
                    <h2><?php echo $value['name']; ?></h2>
                    <h5><?php echo 'QTY: '.$value['quantity']; ?></h5>
                    <p class="price"><?php  echo $value['price']." EGP"; ?></p>
                    <a class='remove-cart' href="index.php?action=deleteitemfromcart&id=<?php echo $value['id']; ?>">remove from cart</a>
                </div>
            </div>

    <?php
    }
    ?>        
        </div>
            <div>
              
                <p class="card price " id="totalprice">Total Price =<?php echo $total_price.' EGP';?></p>
            </div>
            <div class="checkout mb-5">
                <a class="btn checkout-btn" href="index.php?action=checkoutpage"> checkout now</a>
            </div>
    </div>
</div>

    
<?php
      require_once("footer.php");
      ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>