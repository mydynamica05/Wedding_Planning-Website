<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
<!--font awsome cdn link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

 <!-- swiper css link -->
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
 <!-- custom css file-->
 <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">
<?php  @include 'header.php';?>


<section><div class="portfolio">
    <div class="portfolio-container">
        <a href="images/po1.jpg" class="box">
            <div class="image">

            <img src="images/po1.jpg" alt="">
            </div>
            <h3>wedding ceremony</h3>
        </a>

        <a href="images/po2.jpg" class="box">
            <div class="image">

            <img src="images/po2.jpg" alt="">
            </div>
            <h3>wedding ceremony</h3>
        </a>

        <a href="images/po3.jpg" class="box">
            <div class="image">

            <img src="images/po3.jpg" alt="">
            </div>
            <h3>wedding ceremony</h3>
        </a>
        <a href="images/po4.jpg" class="box">
            <div class="image">

            <img src="images/po4.jpg" alt="">
            </div>
            <h3>wedding ceremony</h3>
        </a>

        <a href="images/po5.jpg" class="box">
           <div class="image">

           <img src="images/po5.jpg" alt="">
           </div>
            <h3>wedding ceremony</h3>
        </a>

        <a href="images/po6.jpg" class="box">
            <div class="image">

            <img src="images/po6.jpg" alt="">
            </div>
            <h3>wedding ceremony</h3>
        </a>
    </div>
</div></section>






<?php  @include 'footer.php';?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
<!-- swiper j.s link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--custom js file link-->
<script src="js/script.js"></script>
<script>
    lightGallery(document.querySelector('.portfolio .portfolio-container'));
</script>
</body>
</html>