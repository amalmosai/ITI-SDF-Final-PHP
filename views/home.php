<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/all.min.css?">
    <link rel="stylesheet" href="assets/css/normalize.css?">  
    <title>Document</title>
  <style>
    /*                                     blog                                */
    .main-blog1 {
      margin-bottom: 100px;
    }
    .home_blog img {
      width: 100%;
      height: 200px;
      border-radius: 5px;
    }
    .home_blog h1 {
      text-align: center;
    }
    .home_blog_items {
      width: 100%;
      padding-bottom: 30px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      text-align: center;
    }
    .home_blog_item {
      width: 30%;
      margin-bottom: 30px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .home_blog_item:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
    .home_blog_item h4 {
      padding: 10px 0 0 0;
    }
    .home_blog_item h4 a {
      color: #6ac280;
    }
    .home_blog_item p {
      padding: 10px;
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

    @media (max-width: 992px) {
      .home_blog_item {
          width: 48%;
      }
      .carousel-inner .carousel-item img{
      width: 80% !important;
      }
    }
    @media (max-width: 768px) {
      .home_blog_item {
          width: 100%;
      }
    }




 
  
  </style>
</head>





<body>
<!-- <div id="loader" class="loader"></div>
<div id="myBody"> -->


<?php
      require_once("headerandnavbar.php");
      ?>
  <!-- slider  -->
      <div id="carouselExampleInterval" class="carousel slide carousel-fade  t-center" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active  mt-4 mb-4" data-bs-interval="2000">
            <img src="assets/imgs/website_imgs/Recycling-bro.svg" class="d-block  m-auto" alt="...">
          </div>
          <div class="carousel-item mt-4 mb-4" data-bs-interval="2000">
            <img src="assets/imgs/website_imgs/Recycling-amico.svg" class="d-block m-auto" alt="...">
          </div>
          <div class="carousel-item  mt-4 mb-4" data-bs-interval="2000">
            <img src="assets/imgs/website_imgs/Recycling-pana.svg" class="d-block   m-auto" alt="...">
          </div>
        </div>
      </div>
      <!----------------------------------- blogs ----------------------------------------->
  
    <div id="main-blog1">
      <div class="home_blog">
            <div class="container">
                  <h1>BLOGS</h1>
                  <div class="home_blog_items">
                        <div class="home_blog_item">
                              <img src="assets/imgs/website_imgs/Recycling-amico.svg">
                              <h3>Waste Paper and Cardboard</h3>
                              <p>Every tonne of recycled paper or cardboard can save up to 17 trees, two cubic yards of landfill capacity and 4100 kW/hours of electricityDid you know that 70% less energy is used when making new paper from recycled stock than when using virgin pulp!. </p>
                        </div>
                        <div class="home_blog_item">
                              <img src="assets/imgs/website_imgs/Recycling-pana.svg">
                              <h3>Plastic Recycling</h3>
                              <p>There are about 50 different groups of plastics,with hundreds of different varieties. Most types of plastic are recyclable, and because of this, they need to be recycled to reduce the amount of waste sent to landfill and help prevent rubbish from ending up in the oceans. </p>
                        </div>
                        <div class="home_blog_item">
                              <img src="assets/imgs/website_imgs/Recycling-rafiki.svg">
                              <h3>Metal Recycling</h3>
                              <p>All grades of non-ferrous and ferrous metal are recyclable for future use. Because metals don't lose quality when recycled, we can recycle metal many times over.recycling one aluminium drink can saves enough energy to power a television for around three hours! </p>
                        </div>
                        <div class="home_blog_item">
                              <img src="assets/imgs/website_imgs/Recycling-rafiki.svg">
                              <h3>WEEE Recycling (Electronic Devices)</h3>
                              <p>All grades of non-ferrous and ferrous metal are recyclable for future use.Because metals don't lose quality when recycled,we can recycle metal many times over. </p>
                        </div>
                        <div class="home_blog_item">
                              <img src="assets/imgs/website_imgs/Recycling-amico.svg">
                              <h3>Wood Recycling</h3>
                              <p> Wood can be reused as a building material,recycled into mulch for landscaping.Even low-grade wood is useful because we can use it for fuel to generate environmentally friendly energy.</p>
                        </div>
                        <div class="home_blog_item">
                              <img src="assets/imgs/website_imgs/Recycling-pana.svg">
                              <h3>Glass Recycling</h3>
                              <p>Glass can take around one million years to fully decompose,which is a big issue for landfill sites getting too full.It is crucial to ensure we recycle as much glass as possible.</p>
                        </div>
                  </div>
            </div>
      </div>
    </div>      
      <?php
      require_once("footer.php");
      ?>
<!-- </div> -->
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script>
    var myVar;


function loading() {
    myVar = setTimeout(showPage, 3000);
    document.getElementById("loader").style.display = "block";
    document.getElementById("myBody").style.display = "none"; 
}

function showPage() {
    document.getElementById("myBody").style.display = "block";
    document.getElementById("loader").style.display = "none";
}
  </script>
</html>