<!----------------------------new Header Top-------------------- -->

<div class="header-top">
    <div class="container">
      <div class="head row">
        <div class="head-logo col-12 col-md-5 d-flex justify-content-center justify-content-md-start">
          <a href="index.php?action=homepage"><i class="fa-solid fa-recycle"></i></a>
          <a href="index.php?action=homepage">Recycling</a>
        </div>
        <div class="head-login col-12 col-md-7 d-flex justify-content-center justify-content-md-end">
          <div class="login row col-12 justify-content-md-end">
            <?php  if(!isset($_SESSION['user_id'])){
              echo "
              <a class='mb-1 p-1 p-md-3  col-md-3 text-center ' href='index.php?action=login'>LogIn</a>
              <a class='mb-1 p-1 p-md-3  col-md-3 text-center' href='index.php?action=signuppage'>SignUp</a> 
              ";}else{
                echo "
                <a class='mb-1 p-1 p-md-3  col-md-3 text-center'  href='index.php?action=userprofile'>Profile</a>
                ";
                if($_SESSION['user_type']!="vendor")
                {
                  echo "
                  <a class='mb-1 p-1 p-md-3  col-md-3 text-center' href='index.php?action=cart'><i class='fa-solid fa-cart-shopping'></i></a>
                  ";
                }
                echo "
                <a class='mb-1 p-1 p-md-3  col-md-3 text-center' href='index.php?action=logout'> logout </a>
                ";
                
              } ?>
              
          </div>
        </div>
      </div>
    </div>
  </div>

  <!----------------------end of header---------------- -->


  <!------------------new navbar--------------------- -->

  <nav class="navbar navbar-expand-lg nav_bar ">
    <div class="container-fluid d-flex justify-content-center">
      <button class="navbar-toggler navbar-light bg-light  " type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon   "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item p-lg-2">
            <a class="nav-link mt-3 mt-lg-0" href="index.php?action=homepage">HOME</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="index.php?action=itemspage">ITEMS</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="index.php?action=productspage">PRODUCTS</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="index.php?action=aboutuspage">ABOUT US</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="index.php?action=contactuspage">CONTACT US</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- --------------------------end of navbar ---------------->