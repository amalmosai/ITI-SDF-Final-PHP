<?php
require_once("../connection.php");
/////////////////////////get data

$action=isset($_GET["action"])?$_GET["action"]:"";
if($action==""){
    $sql="select * from users";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    require("views/dashboard.php");
}
////////dashboard

elseif($action=="dashboard"){
    $sql="select * from users";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    require("views/dashboard.php");
    
}
//////////users

elseif($action=="user"){  
$sql="select * from users";
$stmt=$db->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
require("views/users.php");
}
///////////// Products

elseif($action=="product"){
    $sql="select * from users JOIN products on products.user_id=users.user_id";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $product=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    require("views/products.php");
}
///////////// items

elseif($action=="item"){
    $sql="select * from users join items  on items.user_id=users.user_id and item_status='pending'";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $pending_item=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    $sql="select * from users join items  on items.user_id=users.user_id and item_status !='pending'";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $other_item=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    require("views/items.php");
}
 
///////////// orders

elseif($action=="order"){
    $sql="select * from product_orders join orders
    on product_orders.order_id=orders.order_id join products
    on product_orders.product_id=products.product_id";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $order=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    require("views/orders.php");
}
///////////messages

elseif($action=="message"){
$sql="select * from message";
$stmt=$db->prepare($sql);
$stmt->execute();
$message=$stmt->fetchAll(pdo :: FETCH_ASSOC);
require("views/messages.php");
}
///////////////////////////////delete

//////////message delete
elseif($action=="message_del"){
    $sql="delete from message where id= $_GET[id] ";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $db= null;
    header("location: index.php?action=message");
}
///////////user delete
elseif($action=="user_del"){
    $sql="delete from users where user_id=$_GET[id]";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $db= null;
    header("location: index.php?action=user");
}

/////////// product delete
elseif($action=="product_del"){
    $sql="delete from products where product_id= $_GET[id] ";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $db= null;
    header("location: index.php?action=product");
}

///////////order delete
elseif($action=="order_del"){
    $sql="delete from product_orders where id= $_GET[id] ";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $db= null;
    header("location: index.php?action=order");
}
//////////////////////////add user
elseif($action=="create")
{
    header("Location:views/adduser.php");
}
elseif($action=="store")
{
    $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
      $img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
    //   22jgoijfsomgkl.png   
        //           ( from ,to  )
        move_uploaded_file($_FILES["image"]["tmp_name"],"../../assets/imgs/users_imgs/". $img_name);
    $sql= "insert into users(fullname,email,password,image,user_type,city,street,phone)
    values('$_POST[fullname]','$_POST[email]','$_POST[password]','$img_name','$_POST[role]','$_POST[city]','$_POST[address]','$_POST[phone]')";
    $db->prepare($sql)->execute();
    $db=null;
    header("Location:index.php?action=user");
}


///////////////////////////item rejected &accepted
elseif($action=="approved")
{
    $user_id=$_GET['user_id'];
    $item_id=$_GET["id"];
    $item_points=$_POST["number"];
    $sql= "update items set item_status= 'approved',points=$item_points where item_id= $item_id";
    $db->prepare($sql)->execute();
    $sql= "update users set total_points=total_points+$item_points where  user_id=$user_id ";
    $db->prepare($sql)->execute();
    $db=null;


    header("Location:index.php?action=item");
} 
elseif($action=="rejected")
{
    $sql= "update items set item_status='rejected'  where item_id=$_GET[id]";
    $db->prepare($sql)->execute();
    $db=null;
    header("Location:index.php?action=item");
} 
?>