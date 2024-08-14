
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN'
        crossorigin='anonymous'></script>
        <link rel='stylesheet' href='assets/css/all.min.css'>
        <link rel='stylesheet' href='assets/css/user.css?v=<?php echo time(); ?>'>
        <link rel="stylesheet" href="assets/css/headernavbarfooter.css?v=<?php echo time(); ?>">
        
</head>

<body class='bg-light'>
<?php
      require_once("headerandnavbar.php");
      ?>
    <div class='user-page mb-3 '>
        <div class='container'>
            <div class='row'>
                <div class='left col-12 col-md-3  bg-w'>
                    <div class='user-img'>
                        <div class='res-img'>
                            <?php echo"<img height=300 px id='photo' src='./assets/imgs/users_imgs/$_SESSION[image]' alt='profile picture'>" ?>
                            <form method="post" action="index.php?action=changeuserimage" enctype="multipart/form-data">
                            <label for="img">Uplode image </label>
                            <input id="img" type='file' name='image' hidden></input>
                            <label class='bg-secondary' for="change">Save Image </label>
                            <input id="change" type='submit'hidden></input>
                            </form>
                            <?php
                            if(isset($_GET['error']))
                            {
                                echo"

                                <small>choose valid image</small>
                                
                                ";


                            }
                            
                            ?>
                        </div>
                        <div class='uname'>
                            <?php foreach ($result as  $value){
                                echo "<h2 class = 'text-break'>$value[fullname]</h2>
                            <div class='address text-break'>$value[street],$value[city]</div>
                            <div class='address text-break'>$value[email]</div>";} ?>
                        </div>
                    </div>
                    <div class='profile-nav col-12'>
                        <div class='panel'>
                            <ul class='nav nav-pills nav-stacked col-12'>
                                <li class='active col-12' onclick='changeNav(0)'><a href='#'> <i class='fa fa-user'></i> Profile</a></li>
                                <li class='col-12' ><a href='index.php?action=additempage'> <i class='fa-solid fa-recycle'></i> Add Item</a></li>
                                <!-- <li class='col-12' ><a href='index.php?action=addproductpage'> <i class='fa-solid fa-recycle'></i> Add Product</a></li> -->
                                <li class='col-12' onclick='changeNav(1)'><a href='##'> <i class='fa-solid fa-recycle'></i> Items</a></li>
                                <li class='col-12' onclick='changeNav(2)'><a href='##'> <i class='fa-solid fa-clock'></i> pending Items</a></li>
                                <li class='col-12' onclick='changeNav(3)'><a href='##'> <i class='fa-solid fa-credit-card'></i> orders</a></li>
                                <li class='col-12' onclick='changeNav(4)'><a href='#'> <i class='fa fa-edit'></i> Edit profile</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='row list-separated profile-stat mt-3'>
                        <div class='col-md-4 col-sm-4 col-xs-6'>
                            <div class='uppercase profile-stat-text'> items </div>
                            <div class='uppercase profile-stat-title'> <?php echo count($item) ?> </div>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-6'>
                            <div class='uppercase profile-stat-text'> products </div>
                            <div class='uppercase profile-stat-title'> <?php echo $product_quantity['product_quantity'] ?> </div>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-6'>
                            <div class='uppercase profile-stat-text'> points </div>
                            <div class='uppercase profile-stat-title'> <?php echo $result[0]['total_points']?> </div>
                        </div>
                    </div>
                </div>
                <div class='right col-12 offset-md-1 col-md-8 '>
                    <article>
                        <div class='user-products active col-12'>
                            
                            <h2>User Details</h2>
                            <div class='col'>
                                <div class='card mb-4 bg-w'>
                                    <div class='card-body'>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Full Name</p>
                                            </div>
                                            <div class='col-sm-9'>
                                                <?php foreach($result as $value){
                                                    echo"
                                                <p class='text-muted mb-0'>$value[fullname]</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Email</p>
                                            </div>
                                            <div class='col-sm-9'>
                                                <p class='text-muted mb-0'>$value[email]</p>";}?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Phone</p>
                                            </div>
                                            <div class='col-sm-9'>
                                            <?php foreach($result as $value){
                                                echo"
                                                    <p class='text-muted mb-0'>$value[phone]</p>";}?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Account</p>
                                            </div>
                                            <div class='col-sm-9'>
                                            <?php foreach($result as $value){
                                                echo"
                                                <p class='text-muted mb-0'>$value[user_type]</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Address</p>
                                            </div>
                                            <div class='col-sm-9'>
                                                <p class='text-muted mb-0'>$value[street],$value[city]</p> ";} ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='row'>
                                <div class='col-md-6'>
                                    <div class='panel'>
                                        <div class='panel-body bg-w pb-2'>
                                            <div class='bio-chart'>
                                                <div style='display:inline;width:100px;height:100px;'><canvas
                                                        width='100' height='100px'></canvas><input class='knob'
                                                        data-width='100' data-height='100' data-displayprevious='true'
                                                        data-thickness='.2' value='<?php echo $result[0]['total_points']?>' data-fgcolor='#e06b7d'
                                                        data-bgcolor='#e8e8e8'
                                                        style='width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; background: none;'>
                                                </div>
                                            </div>
                                            <div class='bio-desk'>
                                                <h4 class='red'>Points</h4>
                                                <p>published : 15 July</p>
                                                <p>Deadline : 15 August</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='panel'>
                                        <div class='panel-body bg-w pb-2'>
                                            <div class='bio-chart'>
                                                <div style='display:inline;width:100px;height:100px;'><canvas
                                                        width='100' height='100px'></canvas><input class='knob'
                                                        data-width='100' data-height='100' data-displayprevious='true'
                                                        data-thickness='.2' value='<?php echo count($item) ?>'   data-fgcolor='#4CC5CD'
                                                        data-bgcolor='#e8e8e8'
                                                        style='width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; background: none;'>
                                                </div>
                                            </div>
                                            <div class='bio-desk'>
                                                <h4 class='terques'>Items</h4>
                                                <p>published : 15 July</p>
                                                <p>Deadline : 15 August</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='panel'>
                                        <div class='panel-body bg-w pb-2'>
                                            <div class='bio-chart'>
                                                <div style='display:inline;width:100px;height:100px;'><canvas
                                                        width='100' height='100px'></canvas><input class='knob'
                                                        data-width='100' data-height='100' data-displayprevious='true'
                                                        data-thickness='.2' value='<?php echo $product_quantity['product_quantity'] ?>' data-fgcolor='#96be4b'
                                                        data-bgcolor='#e8e8e8'
                                                        style='width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 25px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; background: none;'>
                                                </div>
                                            </div>
                                            <div class='bio-desk'>
                                                <h4 class='green'>Products</h4>
                                                <p>published : 15 July</p>
                                                <p>Deadline : 15 August</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='panel'>
                                        <div class='panel-body bg-w pb-2'>
                                            <div class='bio-chart'>
                                                <div style='display:inline;width:100px;height:100px;'><canvas
                                                        width='100' height='100px'></canvas><input class='knob'
                                                        data-width='100' data-height='100' data-displayprevious='true'
                                                        data-thickness='.2' value='<?php echo $orders_quantity['orders_quantity'] ?>' data-fgcolor='#96be4b'
                                                        data-bgcolor='#e8e8e8'
                                                        style='width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 25px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; background: none;'>
                                                </div>
                                            </div>
                                            <div class='bio-desk'>
                                                <h4 class='green'>orders</h4>
                                                <p>published : 15 July</p>
                                                <p>Deadline : 15 August</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>  


                        <div style="overflow-x:auto" class='user-products col-12'>
                            <h2>Your Items</h2>
                            <table  class='table table-bordered col-12'>
                                <thead>
                                    <tr class='table-dark'>
                                        <th scope='col'>number</th>
                                        <th scope='col'>image</th>
                                        <th scope='col'>Name</th>
                                        <th  scope='col'>discription</th>
                                        <th scope='col'>status</th>
                                        <th scope='col'>points</th>

                                    </tr>
                                </thead>
                                <tbody class='align-middle'>
                                <?php
                                    foreach ($item as $value) {
                                        $status =$value['item_status'];
                                        echo "
                                        <tr >
                                        <th scope='row'>$value[item_id]</th>
                                        <td><img src='assets/imgs/items_imgs/$value[image]'
                                                alt='img'></td>
                                        <td>$value[name]</td>
                                        <td class = 'text-break'>$value[description]</td>
                                        
                                        <td class='$status'>$value[item_status]</td>
                                        <td>$value[points]</td>
                                    </tr>";} ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class='user-products col-12'>
                            <h2>Pending Items</h2>
                                      <?php if(isset($pending)){
                                             foreach ($pending as  $value){
                                                 echo "
                            <div class='card mb-3' style='max-width: 100%;'>
                                <div class='row g-0'>
                                  <div class='col-md-4'>
                                                    <img src='assets/imgs/items_imgs/$value[image]' class='col-12 rounded-start' alt='...'>
                                                  </div>
                                                  <div class='col-md-8  bg-warning'>
                                                    <div class='card-body'>
                                                    
                                                      <h5 class='card-title h2'>$value[name]</h5>
                                                      </div>  
                                                      <p class='card-text'>$value[description]</p>
                                                </div>
                                            </div>
                                        </div>";} 
                           } 
                           ?>
                        </div>
                        <div style="overflow-x:auto" class='user-products col-12'>
                            <h2>Orders</h2>
                            
                                <table class='table table-bordered'>
                                <thead class='thead-dark'>
                                  <tr>
                                    <th scope='col'>Order_id</th>
                                    <th scope='col'>Order date</th>
                                    <th scope='col'>Price</th>
                                    <th scope='col'>Discount</th>
                                    <th scope='col'>Final_price</th>

                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                  
                                  foreach ($orders as  $value){
                                echo "
                                  <tr>
                                    <th scope='row'>$value[order_id]</th>
                                    <td>$value[order_date]</td>
                                    <td>$value[price]</td>
                                    <td>$value[discount]</td>
                                    <td>$value[final_price]</td>
                                  </tr>
                                  
                                  ";}
                                     
                                  ?>

                                </tbody>
                              </table>
                              
                              
                                </div>
                                
                        <div class='user-products'>
                            <div class='container'>
                                <div class='.col-xs-4 .col-md-offset-2'>
                                    <div class='panel panel-default panel-info Profile'>
                                        <div class='h1'> Edit & Update </div>
                                 
                                        <div class='panel-body'>
                                            <div class='form-horizontal'>
                                                <form method="post"  action="./index.php?action=updateuserdata" enctype="multipart/form-data">
                                                    <div class='form-group mb-4'>
                                                    
                                                        <label class='control-label'>Full Name</label>
                                                        <div class=''>
                                                        <?php foreach ($result as  $value)?>
                                                        <?="<input class='form-control bg-w' type='text' name='name' placeholder='First Name'
                                                                 value = '$value[fullname]'   required> "?>
                                                        </div>
                                                    </div>
                                                    <div class='form-group mb-4'>
                                                        <label class='control-label'>Password</label>
                                                        <div class=''>
                                                           <?= "<input class=form-control bg-w type='password' name='password' placeholder='Password'
                                                                value = '$value[password]'   required >"?>
                                                        </div>
                                                    </div>
                                                    <div class='form-group mb-4'>
                                                        <label class='col-sm-2 control-label'>Street</label>
                                                        <div class=''>
                                                            <?= "<input class='form-control bg-w' type='text' name='street' placeholder='Location'
                                                            value = '$value[street]'   required>" ?>
                                                        </div>
                                                    </div>
                                                    <div class='form-group mb-4'>
                                                        <label class='col-sm-2 control-label'>City</label>
                                                        <div class=''>
                                                            <?= "<input class='form-control bg-w' type='text' name='city' placeholder='City'
                                                            value = '$value[city]'   required>" ?>   
                                                        </div>
                                                    </div>
                                                    <div class='form-group mb-4'>
                                                    <label class=' control-label'>Phone</label>
                                                        <div class=''>
                                                        <?= "<input class='form-control bg-w type='text' name='phone' placeholder='xxx-xxx-xxxx'
                                                            value = '$value[phone]'  required>" ?>
                                                        </div>
                                                    </div>
                                                    <div class='form-group mb-4'>
                                                        <div class=''>
                                                            <button class='btn btn-primary'>Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> <!-- end form-horizontal -->
                                        </div> <!-- end panel-body -->
                            
                                    </div> <!-- end panel -->
                            
                            
                                </div> <!-- end size -->
                            </div> <!-- end container-fluid -->
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </div>
    <?php
      require_once("footer.php");
      ?>

    <script src='assets/js/user.js?v=<?php echo time(); ?>'></script>
</body>

</html>