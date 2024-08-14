<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css?133221">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">  
    <title>Document</title>
    <style>

      #aboutus {
        background-color: var(--green);
        padding-bottom: 20px;
      }
      .about_us_page {
        width: 100%;
        margin-top: 0;
        padding-top: 20px;
        text-align: center;
        background-color: var(--green, #a4c63b);
      }
      .about_us_page.about_us_item h3 {
         margin-bottom: 20px;
      }
      .our_info_items {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        font-size: 20px;
      }
      .about_us_item {
        width: 24%;
        padding: 20px;
        margin-bottom: 15px;
        background-color: var(--white, #fff);
        border-radius: 10px;
      }
      .carousel-inner{
        background-color: #EEE !important;
      }
      .carousel-inner  .carousel-item{
        background-color: #EEE !important;
      }
      .carousel-inner .carousel-item img{
        width: 35% !important;
      }
      @media (max-width:992px){
        .about_us_item{
            width: 48%;
        }
        .carousel-inner .carousel-item img{
        width: 80% !important;
        }
      }
      @media (max-width:768px){
      .about_us_item{
          width: 100%;
      }
      }
    

    </style> 
</head>



<body onload="getData_about_us()">
<?php
      require_once("headerandnavbar.php");
      ?>
        <!------------------------------- slider ------------------------------------->

        <!-- slider  -->
        <div id="carouselExampleInterval" class="carousel slide carousel-fade  t-center" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active  mt-4 mb-4" data-bs-interval="2000">
            <img src="assets/imgs/website_imgs/Recycling-bro.svg" class="d-block m-auto" alt="...">
          </div>
          <div class="carousel-item  mt-4 mb-4" data-bs-interval="2000">
            <img src="assets/imgs/website_imgs/Recycling-amico.svg" class="d-block  m-auto" alt="...">
          </div>
          <div class="carousel-item  mt-4 mb-4" data-bs-interval="2000">
            <img src="assets/imgs/website_imgs/Recycling-pana.svg" class="d-block  m-auto" alt="...">
          </div>
        </div>
      </div>

        <!------------------------------- about us ------------------------------------->
    <div id="aboutus">

        <div class="container">
                <div class="about_us">
                        <h2>ABOUT US</h2>
                        <div class="about_our_info">
                                <div class="about_item">
                                        <h3>OUR SERVICES</h3>
                                        <p>If you want to get rid of the things that make a mess in your home, then you are in the right place. We can help you get rid of these things. Not only that, we also give you points for these things. We can also display your recycled products on our website</p>
                                </div>
                                <div class="about_item">
                                        <h3>OUR IMPACT</h3>
                                        <p>Our impact to make world zero waste, save resources and money, reduce pollution, and help the earth.</p>
                                </div>
                                <div class="about_item">
                                        <h3>HOW WE WORK</h3>
                                        <p>We work by collecting items from customers and delivering them to recycling factories, while giving points to customers in exchange for these items. We also display the products of recycled factories on our website for those who want to buy.</p>
                                </div>
                                
                        </div>
                </div>
        </div>
</div>
  


    <!-- Footer -->
    <?php
      require_once("footer.php");
      ?>

</body>
<script src="assets/js/aboutus.js?122"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>    