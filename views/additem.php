
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">



  <style>
    .item .container .item_form {
      border: 2px solid#5f5f5f;
      margin: 5px auto;
      border-radius: 10px;
      /* padding: 10px; */

    }

    .item .container .item_form form input,
    .item .container .item_form form textarea {
      margin-bottom: 50px;
      border-radius: 5px;
      outline: none;
      border: 2px solid #5f5f5f;
      margin: 0 auto;
      padding: 5px;
    }

    .item .container .item_form form textarea {
      height: 150px;
    }

    .item .container form .btn-primary {
      border-radius: 15px;
      width: 100px;
      color: white;
      border: 0px;
      background-color: #a4c63b;
      padding: 10px 0;
      margin: 20px;
    }

    .item .container .item_form form .form-label {
      margin: 10px 0;
      font-size: 20px;
    }
  </style>


</head>


<body>
<?php
      require_once("headerandnavbar.php");
      ?>




  <!-------------------------  page add item-------------------  -->

  <div class="item my-3">
    <div class="container">
      <div class="item_form  row g-3 col-lg-10  ">

        <form class="row g-3" method="post" action="./index.php?action=itemsstore" enctype="multipart/form-data">
          <div class="col-md-12 ">
            <label for="ItemName" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="ItemName" name="item_name" required>
          </div>

          <div class="col-12">
            <label for="Item Description" class="form-label">Item Description</label>
            <textarea rows="10" class="form-control" placeholder="item description" id="description" name="item_description" required></textarea>

          </div>
          <div class="col-12">
            <label for="Item Image" class="form-label">Item Image</label>
            <input type="file" id="item_upload" class="form-control" name="item_image" required>

          </div>

          <div class="col-12">

            <button type="submit" class="btn btn-primary" > ِAdd Item</button>
          </div>
        </form>
      </div>
    </div>





    <!-- ------------------------------Footer ---------------------------------->
    <?php
      require_once("footer.php");
      ?>

</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="assets/js/additems.js?v=<?php echo time(); ?>"></script>

</html>