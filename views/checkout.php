<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./file.css"> -->
    <title>Items</title>
    <link rel="stylesheet" href="assets/css/all.min.css"> 
    <link rel="stylesheet" href="assets/css/normalize.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/headernavbarfooter.css?v=<?php echo time(); ?>">


        
        <style>
            a{
                text-decoration: none;
            }
            .but {
            background-color: #61ac64;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            line-height: 30px;
            border-radius: 25px;
        }
        
        .A{
        
            box-shadow: 10px 10PX #61ac64;
        }
        </style>
</head>
</head>
<body>
    
  <?php
      require_once("headerandnavbar.php");
      ?>


    <div class="container pt-5 mb-5">
        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-6 ">
                <h3 class="pt-4 pb-4">Billing address</h3>
                <form class=" row " action="index.php?action=completeorder" method="post">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">full name</label>
                        <input name="fullname" type="text" class="form-control" id="validationCustom01" value="<?php echo $_SESSION['fullname'];?>" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="validationCustom05" value="<?php echo $_SESSION['email'];?>" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">City</label>
                        <input name="city"  type="text" class="form-control" id="validationCustom05" value="<?php echo $_SESSION['city'];?>" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Street</label>
                        <input name="street"  type="text" class="form-control" id="validationCustom05" value="<?php echo $_SESSION['street'];?>" required>
                    </div>

                    <div class="col-md-12">
                        <div class=>
                            <label class="form-label">phone</label>
                            <input  name="phone"  type="number" class="form-control" id="validationCustom05" value="<?php echo $_SESSION['phone'];?>" required>
                        </div>
                    </div>


                    <div class="col-12 pt-5 d-flex justify-content-center ">
                        <button class="but" type="submit">continue to check</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 offset-md-1 ">
              

                <h3 class="pb-4">Your items</h3>

                <ul class=" card A list-group list-group-flush ">
                
                    
                  <?php
                
                
                    // $checkproductexist=0;
                    foreach($result as $value){
                        $total_price+=$value['price']*$value['quantity'];
                        // $checkproductexist=1;

                   echo "<li class='list-group-item'>
                  
                   <h5> $value[name]</h5>
                   <h6> QTY $value[quantity]</h6>
                   <p> $value[price]</p>
               </li>
               "; 
                   }
                   echo "<div>
                   <p class='card price ' id='totalprice'>Total Price =$total_price EGP</p>
               </div>";

                   $_SESSION['total_price']=$total_price;                    
                   $residual_points=0;
              

                   foreach($point_result as $value){
                    $total_points=$value["total_points"];
                    if($total_points>$total_price){
                       
                        echo"<div>
                        <p class='card price'id='total price'>Discount=$total_price EGP</p>
                        </div>";
                       
                        $residual_points=$total_points-$total_price;
                        $discount=$total_price;
                       $final_price=0;
                       $_SESSION['residual_points']=$residual_points;
                       $_SESSION['final_price']=0;
                       $_SESSION['discount']=$discount;

                        echo"<div>
                        <p class='card price'id='total price'>Final price=$final_price EGP</p>
                        </div>";
    
                    }else{
                        echo"
                        <div>
                        <p class='card price'id='total price'>Discount=$value[total_points]EGP</p>
                        </div>";
                        $residual_points=0;
                        $final_price=$total_price-$total_points;
                        $_SESSION['residual_points']=0;
                        $_SESSION['final_price']=$final_price;
                        $_SESSION['discount']=$total_points;
 

                        echo"
                        <div>
                        <p class='card price'id='total price'>Final price=$final_price EGP</p>
                        </div>";
    
                    }
    
    
    
    
                   }
    
                      ?>
    
                 

                  </div>
          </div>
    </div>
                  
                  <?php
      require_once("footer.php");
      ?>

     


</body>
</html>