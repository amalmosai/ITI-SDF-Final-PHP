<?php


require_once("./connection.php");
session_start();
//get action from url
$action=isset($_GET["action"])?$_GET["action"]:"";


//open dashboard for admin


//open log in page
if($action=="login")
{
    

    require_once('views/login.php');
    exit;

}
//open log in page
if($action=="logout")
{
    

    require_once('views/logout.php');
    exit;

}

//open home page
if($action=="homepage" ||$action=="")
{
    

    require_once('views/home.php');
    exit;

}
//open about us page
if($action=="aboutuspage")
{



    require_once('views/aboutus.php');
    exit;

}
//open about us page
if($action=="contactuspage")
{
    

    require_once('views/contactus.php');
    exit;

}


//open sign up  page

if($action=="signuppage")
{
    require_once('views/account.php');
    exit;
}


///////////////////////////////
///////////////////////////////
///////////////////////////////
//user index
///////////////////////////////
///////////////////////////////
///////////////////////////////

//sign up
if(isset($_POST['submit']))
{   
        //check user enter all data
        if(empty($_POST["fullname"]))
        {
            header("location:./index.php?action=signuppage");
            exit;
       
        }

        $fullname=$_POST["fullname"];
        $phone=$_POST["phone"];
        $email = $_POST["email"];
        $password=$_POST["password"];
        $city=$_POST["city"];
        $address=$_POST["address"];

        //check if email exist

    $sql="select email from users";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $user=$stmt->fetchAll(pdo :: FETCH_ASSOC);

    foreach ($user as $value){ 
        if($value['email']==$email)
        {
            header("location:./index.php?action=signuppage");
            exit;

        }
    } 

    // create new user in database
    
    $sql = "insert into users (fullname,email,password,user_type,city,street,phone) values('$fullname','$email','$password','user','$city','$address','$phone')";
    $db->prepare($sql)->execute();
    header("location:./index.php?action=login&added=added"); // redirect to log in page
    exit;
}

  
//check for log in data  
if($action=="loginrequest"){


    $sql="select * from users";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $user=$stmt->fetchAll(pdo :: FETCH_ASSOC);

    foreach ($user as $value){
    if($_POST['email']==$value['email'] && $_POST['password']==$value['password'])
    
    {
    
            session_start();
            $_SESSION=$value;

            //cookies part
            $remember=$_POST['remember'];
            if(!empty($remember))
            {
                setcookie("email",$email,time()+ (86400 * 90), "/");
                setcookie("password",$password,time()+ (86400 * 90), "/");
            }elseif(isset($_COOKIE["email"])&& isset($_COOKIE["password"]))
            {
                setcookie("email","");
                setcookie("password","");
            }

              // if he is vendor go to products
            if($_SESSION['user_type']=="vendor")
            {
            header("Location:./index.php?action=productspage");
            exit;
            }
            elseif( $_SESSION['user_type']=="admin")
              {
                header("location:admin_panel/admin");
                exit;
              }

            header("location:./index.php?action=itemspage");//redirect to items page
            exit;
            
        }

    }

    header("location:./index.php?action=login&error=error");
}





// check if user log in
// check if user log in


// if(!isset($_SESSION["email"])){

//     header("Location:./index.php?action=login"); // redirect to log in page 
//     exit;
//   }


  
// open user profile


if($action=="userprofile" && $_SESSION['user_type']=="user")
{

      // get all data from users
      $sql="select * from users where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);

      // get all data from items
      $sql="select * from items where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $item=$stmt->fetchAll(pdo :: FETCH_ASSOC);
      foreach ($item as $value) {
        if ("$value[item_status]" == "pending") {
            $pending[] = $value;
            // print_r($pending);
        }elseif ("$value[item_status]" == "approved") {
            $approved[] = $value;
            // print_r($approved);
        }elseif ("$value[item_status]" == "rejected") {
            $rejected[] = $value;
            // print_r($rejected);
        }
      }
      /////////////////////////////////////////
      // get all data from carts
      $sql="select * from orders where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $orders=$stmt->fetchAll(pdo :: FETCH_ASSOC);

      // get all products user has bought 
      $sql="select sum(quantity) as product_quantity from product_orders where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $product_quantity=$stmt->fetch(pdo :: FETCH_ASSOC);

    // get all orders user has made 
    $sql="select count(order_id) as orders_quantity from orders where user_id=$_SESSION[user_id]";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $orders_quantity=$stmt->fetch(pdo :: FETCH_ASSOC);

      
  
      // store  in database
  
      //  header("Location:index.php"); 
      // inject view ---------
  
      require_once("views/userprofile.php");
  }

if($action=="changeuserimage"){
  // if(empty($_file))
  // {
  //   header("Location:index.php?action=userprofile&error=error");
  // }else{

    if($_FILES['image']['size']==0)
    {
      header("Location:index.php?action=userprofile");

    }else{
      $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
      $img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
    //   22jgoijfsomgkl.png   
        //           ( from ,to  )
        move_uploaded_file($_FILES["image"]["tmp_name"],"assets/imgs/users_imgs/". $img_name);
        // store  in database
    $sql= "update users set image='$img_name' where user_id=$_SESSION[user_id]";
    $db->prepare($sql)->execute();
    $_SESSION['image'] = $img_name;
    header("Location:index.php?action=userprofile");
  

    }


  }




// open vendor profile

if($action=="userprofile" && $_SESSION['user_type']=="vendor")
{

      // get all data from users
      $sql="select * from users where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
     
      // get all data from orders

      /////////////////////////////////////////
      // get all data from products
      $sql="select * from products where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $product=$stmt->fetchAll(pdo :: FETCH_ASSOC);
  
      // get all sold products quantity
       $sql="select sum(product_orders.quantity) as sold_products_quantity from products join product_orders on products.product_id=product_orders.product_id where products.user_id=$_SESSION[user_id]";
       $stmt=$db->prepare($sql);
       $stmt->execute();
       $sold_products_quantity=$stmt->fetch(pdo :: FETCH_ASSOC);

      // get total sells
      $sql="select sum(product_orders.quantity*products.price) as total_sells from products join product_orders on products.product_id=product_orders.product_id where products.user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $total_sells=$stmt->fetch(pdo :: FETCH_ASSOC);
      


       
   
      // inject view ---------
  
      require_once("views/vendor.php");
    }



/////////////////////////////////////////

// open admin profile

elseif($action=="userprofile" && $_SESSION['user_type']=="admin")
{
  
      // get all data from users
      $sql="select * from users where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
     
      // get all data from items
      $sql="select * from items where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $item=$stmt->fetchAll(pdo :: FETCH_ASSOC);
      foreach ($item as $value) {
        if ("$value[item_status]" == "pending") {
            $pending[] = $value;
            // print_r($pending);
        }elseif ("$value[item_status]" == "approved") {
            $approved[] = $value;
            // print_r($approved);
        }elseif ("$value[item_status]" == "rejected") {
            $rejected[] = $value;
            // print_r($rejected);
        }
      }
      /////////////////////////////////////////
      // get all data from carts
      $sql="select * from products where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $product=$stmt->fetchAll(pdo :: FETCH_ASSOC);
  
      // store  in database
  
      //  header("Location:index.php"); 
      // inject view ---------
  
      require_once("views/userprofile.php");
}

// ////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////

// product index
// ////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////

//get user data from session
if(isset($_SESSION['user_id']))
{
  $user_id =$_SESSION['user_id'];
  $user_address=$_SESSION['city']." ".$_SESSION['street'];
}



//get product id from url if sent
$product_id=isset($_GET["product_id"])?$_GET["product_id"]:"";
$product_price=isset($_GET["product_price"])?$_GET["product_price"]:"";
//total price in order cart






 //open products page
 //  fetch all products from database
 if($action=="productspage"){

    $sql="select * from products";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
   
    // inject view ---------
    require_once("views/products.php");
    exit;
  }

//open add product page
elseif($action=="openaddproductpage")
{
    if($_SESSION["user_type"]=="user"){

        header("Location:./index.php?action=productspage"); // redirect to products page 
        exit;
      }
  require_once("views/addproduct.php");
  exit;
}
  
//  store product in database

elseif($action=="productsstore"){

  // //check if user enter full product's data
  if(empty($_POST['product_name']) || empty($_POST['product_description']) || empty($_FILES['product_image']['name']))
  {
    // require_once("views/addproduct.php");
    header("Location:./index.php?action=openaddproductpage");
    exit;
  }

    // upload file 
    $ext=pathinfo($_FILES["product_image"]["name"],PATHINFO_EXTENSION);
    $img_name=md5(microtime().$_FILES["product_image"]["name"]).".".$ext; 
  //   22jgoijfsomgkl.png   
      //           ( from ,to  )
  move_uploaded_file($_FILES["product_image"]["tmp_name"],"assets/imgs/products_imgs/". $img_name);
  // store  in database
  $sql= "insert into products (name,description,image,price,quantity,user_id) 
  values('$_POST[product_name]','$_POST[product_description]','$img_name','$_POST[product_price]','$_POST[product_quantity]','$user_id')" ;
  $db->prepare($sql)->execute();
  $db=null;
  header("Location:index.php?action=productspage");

}

// product show details from database
elseif($action=="showproductdetails")
{
  $sql="select * from products where product_id = $product_id ";
  $stmt=$db->prepare($sql);
  $stmt->execute();
  $result=$stmt->fetch(pdo :: FETCH_ASSOC);
 
  // inject view ---------
  require_once("views/productdetailspage.php");
  exit;

}

// add product to cart
elseif($action=="addtocart")
{
  //check if product exist in cart
  $sql="select count(product_id) as product_quantity from cart where product_id=$product_id  and user_id = $_SESSION[user_id] ";
  $stmt=$db->prepare($sql);
  $stmt->execute();
  $product_quantity=$stmt->fetch(pdo :: FETCH_ASSOC);
  if($product_quantity['product_quantity']>=1)
  {
    $sql="update cart set quantity=quantity+1 where product_id=$product_id  and user_id = $_SESSION[user_id] ";
    $stmt=$db->prepare($sql);
    $stmt->execute();

  }else{
    $sql="insert into cart (user_id,product_id,price) values('$user_id','$product_id','$product_price') ";
    $stmt=$db->prepare($sql);
    $stmt->execute();
   

  }
  header("Location:index.php?action=showproductdetails&product_id=$product_id");
  exit;
}

// open cart page
// mn zyad

elseif($action=="cart" )
{

  // redirect to log in if he doesnt log in
  if(!isset($_SESSION['user_id']))
  {
    header("location:index.php?action=login");
  }

    $sql="   select cart.id, name , products.price , image ,cart.quantity from cart join products on cart.product_id=products.product_id and cart.user_id=$user_id";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
     $total_price=0;



    // inject view ---------
    require_once("views/cart.php");
    exit;
}elseif($action=="deleteitemfromcart")
{
  //check if  quantity of product more than 1
  $sql="select quantity from cart where id=$_GET[id]  and user_id = $_SESSION[user_id] ";
  $stmt=$db->prepare($sql);
  $stmt->execute();
  $product_quantity=$stmt->fetch(pdo :: FETCH_ASSOC);
  if($product_quantity['quantity']>1)
  {
    $sql="update cart set quantity=quantity-1 where id=$_GET[id]  and user_id = $_SESSION[user_id] ";
    $stmt=$db->prepare($sql);
    $stmt->execute();

  }else{

$sql="delete from cart where id='$_GET[id]'";
$stmt=$db->prepare($sql);
$stmt->execute();
$db=null;
      }
header("location:index.php?action=cart");

}


///////////////////////////////
///////////////////////////////
///////////////////////////////
///////////////////////////////
//items index
///////////////////////////////
///////////////////////////////
///////////////////////////////
///////////////////////////////


// open items page
 //  fetch all item approved for recycling
 if($action=="itemspage"){
    $sql="select * from items where item_status='approved'";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    // inject view ---------
    require_once("views/items.php");
    exit;
    
  }

//open add items page
elseif($action=="additempage")
{
    require_once('views/additem.php');
    exit;
}

//  store items in database

elseif($action=="itemsstore"){

  // //check if user enter full item's data
  if(empty($_POST['item_name']) || empty($_POST['item_description']) || empty($_FILES['item_image']['name']))
  {

    header("Location:index.php?action=additempage");
    exit;
  }

    // upload file 
    $ext=pathinfo($_FILES["item_image"]["name"],PATHINFO_EXTENSION);
    $img_name=md5(microtime().$_FILES["item_image"]["name"]).".".$ext; 
  //   22jgoijfsomgkl.png   
      //           ( from ,to  )
  move_uploaded_file($_FILES["item_image"]["tmp_name"],"assets/imgs/items_imgs/". $img_name);
  // store  in database
  $sql= "insert into items (name,description,image,address,item_status,user_id) values('$_POST[item_name]','$_POST[item_description]','$img_name','$user_address','pending','$user_id')" ;
  $db->prepare($sql)->execute();
  $db=null;
  header("Location:index.php?action=itemspage");
  exit;
}


//checkout page


if($action=="checkoutpage")
{
  // get all products from cart
  $sql="   select name , products.price , image, cart.quantity from cart join products on cart.product_id=products.product_id and cart.user_id=$user_id";
  $stmt=$db->prepare($sql);
  $stmt->execute();
  $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
  $total_price=0;

  //get total points of user to make discount for him

  $sql="   select total_points from users where user_id='$_SESSION[user_id]'";
  $stmt=$db->prepare($sql);
  $stmt->execute();
  $point_result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
  $total_points=0;
  $final_price=0;


  require_once('views/checkout.php');
}



if($action=="completeorder"){

  if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['city']) || empty($_POST['street']) || empty($_POST['phone']))
  {
    header("location:./index.php?action=checkoutpage&error=error");
  }
  else
  {

      $sql="insert into orders (price,discount,final_price,user_id,fullname,email,city,street,phone)
      values('$_SESSION[total_price]','$_SESSION[discount]','$_SESSION[final_price]','$_SESSION[user_id]','$_POST[fullname]','$_POST[email]','$_POST[city]','$_POST[street]','$_POST[phone]')";
      $stmt=$db->prepare($sql);
      $stmt->execute();
    
      // update user total points
      $sql="UPDATE users SET total_points= $_SESSION[residual_points] WHERE user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
  
      //now lets add to product_orders to put the products in every order
      //get user_order_id
  
      $sql="SELECT order_id from orders where user_id=$_SESSION[user_id] order by order_id DESC limit 1 ";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $result=$stmt->fetch(pdo :: FETCH_ASSOC);
      $user_order_id=$result["order_id"];
  
      //get products_id that user bought
      $sql="   select product_id ,quantity from cart where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
      foreach ($result as $value)
       {
        // add products_order table
        $sql="insert into product_orders (user_id,order_id,product_id,quantity)
        values($_SESSION[user_id],$user_order_id,$value[product_id],$value[quantity])";
        $stmt=$db->prepare($sql);
        $stmt->execute();
      }
  
    //remove all items in cart
      $sql=" delete from cart where user_id=$_SESSION[user_id]";
      $stmt=$db->prepare($sql);
      $stmt->execute();
      
      header("location:index.php?action=orderaddedsuccessfully");

  }


}
if($action=="orderaddedsuccessfully")
{
  require_once('views/successorder.php');
    exit;
}




// message store from contact us page
if($action=="messagestore"){

  

  // //check if user enter full message's data
  if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
  {
  
    header("Location:index.php?action=contactuspage&failed");
    exit;
  }

  // store message  in database
  $sql= "insert into message (name,email,message) values('$_POST[name]','$_POST[email]','$_POST[message]') " ;
  $db->prepare($sql)->execute();
  $db=null;
  header("Location:index.php?action=contactuspage&success=success");
  exit;
}
if($action=="updateuserdata"){
  // upload file 
  // $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
  // $img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
 //   22jgoijfsomgkl.png   
    //           ( from ,to  )
//    move_uploaded_file($_FILES["image"]["tmp_name"],"../imgs/". $img_name);
$sql= "update users set fullname='$_POST[name]' ,password='$_POST[password]',street='$_POST[street]',city='$_POST[city]',phone='$_POST[phone]' where user_id=$_SESSION[user_id]";
$db->prepare($sql)->execute();
// $db=null;
header("location:index.php?action=userprofile");
 
}



?>