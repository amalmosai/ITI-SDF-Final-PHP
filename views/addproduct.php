
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/headernavbarfooter.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css"> 
   <style>
    .product .container .product_form {
      border: 2px solid black;
      /* width: 50%; */
      padding: 50px 20px;
      margin: 20px 0;
      border-radius: 10px;
    }


    .product .container .product_form form input,
    .product .container .product_form form textarea {
      padding: 15px 50px;
      margin-bottom: 50px;
      border-radius: 5px;
      outline: none;
      border: 2px solid #5f5f5f;
      margin: 0 auto;
      width: 100%;

    }

    .product .container form .add_product {
      border-radius: 15px;
      text-align: center;
      color: white;
      border: 0px;
      background-color: var(--green);
      display: block;
      padding: 20px;
      margin: 0 auto;

    }

    .product .container .product_form form p {
      margin: 20px 0;
    }
  </style>
</head>

<body>
<?php
      require_once("headerandnavbar.php");
      ?>
  <!--add product  -->
  <div class="product">
    <div class="container">
      <div class="product_form col-lg-8 m-auto my-5">
        <form method="post" action="index.php?action=productsstore" enctype="multipart/form-data">
          <p>product name</p>

          <input type="text" placeholder="please enter product name" id="product_name" name="product_name"   required>
          <br>
          <p>product price</p>

          <input type="number" placeholder="please enter product price" id="product_price" name="product_price"   required>
          <br>

          <p>product description</p>

          <textarea placeholder="product description" id="description" name="product_description"   required></textarea>
          <br>
          <p>product quantity</p>

          <input type="number" placeholder="please enter product quantity" id="product_quantity" name="product_quantity"   required>
          <br>
          
          <p>product image</p>

          <input type="file" id="product_upload" name="product_image"   required>
          <br>
          <button class="add_product mt-2 " onclick="saveproduct()">add product</button>
        </form>
      </div>
    </div>
  </div>
  <?php
      require_once("footer.php");
      ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="assets/js/addproduct.js?v=<?php echo time(); ?>"></script>

</html>