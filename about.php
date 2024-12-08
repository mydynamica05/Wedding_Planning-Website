<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
<!--font awsome cdn link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<!-- swiper css link -->
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
 <!-- custom css file-->
 <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">
<?php  @include 'header.php';?>
<section class="about">
    <img src="images/a1.png" alt="" height="50px" width="50px">
    <h3>About us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Placeat quam inventore obcaecati blanditiis nemo voluptas!
          Asperiores, reprehenderit non est, magnam corrupti quas 
          illo quidem qui, perspiciatis quod nam at ex.</p>
          <a href="contact.php" class="btn">contact us</a>
</section>
<section class="team">
    <h1 class="heading">our team</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/p1.jpg" alt=""  >
            <h3>Vijay</h3>
            <p>CEO</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/p2.jpg" alt="" >
            <h3>Suriya</h3>
            <p>Wedding planner</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/p3.jpg" alt=""  >
            <h3>Vikram</h3>
            <p>Accountan</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/p4.jpg" alt=""  >
            <h3>S.k</h3>
            <p>decorator</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        


    </div>
</section>




<?php  @include 'footer.php';?>
</div>


<!-- swiper j.s link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--custom js file link-->
<script src="js/script.js"></script>

</body>
</html>