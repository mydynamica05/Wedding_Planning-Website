<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--font awsome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- custom css file-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container">
        <?php @include 'header.php'; ?>

        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background:url(images/c.jpg) no-repeat">
                        <div class="content">
                            <h3>plan your wedding</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloremque
                                maiores dicta tenetur tempora
                                iste veritatis perferendis mollitia, iure, impedit soluta. Dicta placeat
                                hic est molestiae! Dolor, id reprehenderit? Illum.</p>
                            <a href="about.php" class="btn">Discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(images/a.jpg) no-repeat">
                        <div class="content">
                            <h3>plan your wedding</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloremque
                                maiores dicta tenetur tempora
                                iste veritatis perfereckvnfbnfbnfsbnfskvnfssfngfskjgnsfknskfgnsrgggggggn
                                fgfsggagrgrsgsrgrgsrg
                                gsgsgrsgsgsgsgs
                                gsgsdgsgsdgsdgsdgsggsd
                                sgsfgsgsgsgndis mollitia, iure, impedit soluta. Dicta placeat
                                hic est molestiae! Dolor, id reprehenderit? Illum.</p>
                            <a href="about.php" class="btn">Discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(images/b.jpg) no-repeat">
                        <div class="content">
                            <h3>plan your wedding</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloremque
                                maiores dicta tenetur tempora
                                iste veritatis perferendis mollitia, iure, impedit soluta. Dicta placeat
                                hic est molestiae! Dolor, id reprehenderit? Illum.</p>
                            <a href="about.php" class="btn">Discover more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="services">
            <h1 class="heading">
                Our Services
            </h1>
            <div class="swiper service-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <img src="images/a.jpg" alt="">
                        <div class="content">
                            <h3>Photography</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. </p>
                            <a href="about.php" class="btn">About us</a>

                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/2.jpg" alt="">
                        <div class="content">
                            <h3>Wedding Regitery</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. </p>
                            <a href="about.php" class="btn">About us</a>

                        </div>
                    </div>

                    <div class="slide">
                        <img src="images/a.jpg" alt="">
                        <div class="content">
                            <h3>guest list</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. </p>
                            <a href="about.php" class="btn">About us</a>

                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <img src="images/3.jpg" alt="">
                        <div class="content">
                            <h3>outdoors</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. </p>
                            <a href="about.php" class="btn">About us</a>

                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/4.jpg" alt="">
                        <div class="content">
                            <h3>Wedding cake</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. </p>
                            <a href="about.php" class="btn">About us</a>

                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/5.jpg" alt="">
                        <div class="content">
                            <h3>Wedding ceremony</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. </p>
                            <a href="about.php" class="btn">About us</a>

                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/6.jpg" alt="">
                        <div class="content">
                            <h3>Fine Dinning</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. </p>
                            <a href="about.php" class="btn">About us</a>

                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>


        <?php @include 'footer.php'; ?>
    </div>


    <!-- swiper j.s link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--custom js file link-->
    <script src="js/script.js"></script>

</body>

</html>