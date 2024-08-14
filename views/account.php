<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">  
  <title>Document</title>
</head>
<body>
<?php
      require_once("headerandnavbar.php");
      ?>

  <!-- start sign up -->

    <div class="account">
      <div class="container">
        <form method="post" action="./index.php?action=signupdata" >
          <p class="creatAccount">
            Create your account
          </p>
          <div class="name col-12">
            <input id="fullName" name="fullname" type="text" placeholder="Full Name"  required>

          </div>
          <div class="U_E_P col-md-6">
            <input id="user_name" name="phone" type="number" placeholder="Phone number"  required>
            <input id="email" name="email" type="email" placeholder="Email"  required>
            <small id="error_email"></small>
            <input id="password" name="password" type="password" placeholder="password"   required>
            <small id="error_pass"></small>
            <!-- <br>
            <small style="color: red;display: none;" id="error">the password must be more than 8 characters</small>
            <br> -->
          </div>
          <div class="location col-md-6">
            <input id="city" type="text" placeholder="City" name="city"  required>
            <input id="address" type="text" placeholder="Address" name="address"  required>
          </div>
          <div class="submit"> 
            <input id="submit" name="submit" type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>
    
    <?php
      require_once("footer.php");
      ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="assets/js/account.js?v=<?php echo time(); ?>"></script>
</body>

</html>