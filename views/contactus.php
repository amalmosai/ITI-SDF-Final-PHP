<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/headernavbarfooter.css">


  <!-- <link rel="stylesheet" href="assets/css/headernavbarfooter.css"> -->
  <style>

    .about-sec2 .container .about-contact{
  padding: 15px 0;
  color: var(--dark);
  line-height: 1.6;
}
.map iframe {
  width: 100%;
  margin-bottom: 25px;
}

.about-sec2 {
  background-color: #f3f3f3;
}





.contact-us .container .msg h2,
.contact-us .container .gen-info h2 {
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #c5c3c3;
}

.contact-us .container .msg form {
  display: flex;
  flex-direction: column;
}

.contact-us .container .msg form input,
.contact-us .container .msg form textarea {
  padding: 10px 20px 10px 5px;
  margin-bottom: 15px;
  border-radius: 5px;
  outline: none;
  border: 1px solid #5f5f5f;
}





.contact-us .container .msg form input:last-of-type {
  background-color: var(--dark);
  color: #fff;
  font-weight: bold;

}

.contact-us .container .g-info {
  display: flex;
  flex-direction: column;
  line-height: 1.7;
}

.contact-us .container .blank {
  width: 100%;
  height: 100px;
  margin-top: 20px;
  margin-bottom: 35px;
  border-top: 1px solid #c5c3c3;
  border-bottom: 1px solid #c5c3c3;
}
.successmessage{
  color:var(--green, #a4c63b);
}
.failedmessage{
  color:red;

}







  </style>
  <title>Document</title>
</head>

<body>
<?php
      require_once("headerandnavbar.php");
      ?>
      <!-- start get in touch -->
  <div class="about-sec2">
    <div class="container">
      <div class="about-contact">
        <h2>Get In Touch With Us</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias non excepturi perspiciatis delectus
          nihil ea voluptatum aliquid repellendus ex doloribus sed dignissimos fugiat, magni qui nam consequatur laborum
          natus.</p>
      </div>
    </div>
  </div>
  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14580.8691141937!2d32.8648428!3d23.988103300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1671808624313!5m2!1sar!2seg"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="contact-us">
    <div class="container">
      <div class="row justify-content-md-between">
      <div class="msg col-12 col-md-7 col-lg-5">
        <h2>Send Us A Message</h2>
        <?php
        if(isset($_GET['success']))
        {
          echo "<h1 class='successmessage'> Message Send Successfully</h1>";
        }elseif(isset($_GET['failed']))
        {
          echo "<h5 class='failedmessage'> Enter full message details</h5>";
        }
        
        ?>
        <form method="post" action="index.php?action=messagestore">
          <input type="text" id="name" name="name" placeholder="Your Name">
          <input type="email" id="email" name="email" placeholder="Your E-mail">
          <textarea name="message" rows="10" cols="30" placeholder="Enter Your Message"></textarea>
          <input type="submit" value="Send Message">
        </form>
      </div>
      <div class="gen-info col-12 col-md-4 col-lg-4">
        <h2>General Info</h2>
        <div class="g-info">
          <span>  Aswan ,AswanUniversity -Sahary Branch Aswan, Aswan Governorate, Egypt 81511</span>
          <span>08:30 - 15:30</span>
          <span>http://www.iti.gov.eg/</span>
          <span>02 35355645</span><br><br>
          <span>Recycling-team</span>
          <span>Recycling@gmail.com</span>
          
        </div>
        <div class="blank">
        </div>
      </div>

      </div>
     
    </div>
  </div>

  <?php
      require_once("footer.php");
      ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="assets/js/contact.js"></script>

</html>