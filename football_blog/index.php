<?php include("path.php");
include(ROOT_PATH . "/app/database/db.php");



?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/3e7f9e49ab.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Football</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

   



    <div class="page-wrapper">
        <!--Post slider-->
        <div class="post-slider">
            <h1 class="slider-title">Trending posts!</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/cardiff city.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"> Cardiff Players pay tribute to Emiliano Sala</a></h4>
                        <i class="far fa-user">CCFC</i>
                        &nbsp;
                        <i class="far fa-calendar"> 23rd february 2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/rambo.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"> Ramsey back to the prem?</a></h4>
                        <i class="far fa-user">ScottishRed</i>
                        &nbsp;
                        <i class="far fa-calendar">February 2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/gareth bale.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"> Ramsey back to the prem?</a></h4>
                        <i class="far fa-user">ScottishRed</i>
                        &nbsp;
                        <i class="far fa-calendar">February 2020</i>
                    </div>
                </div>
            </div>
            <!--// post slider-->

            <!--Content-->

            <!--// Content-->
            <div class="content clearfix">
                <!--Main content-->
                <div class="main-content">
                    <h1 class="recent-post-title">Recent Posts</h1>
                    <div class="post">
                        <img src="assets/images/bruno.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.html">Could Bruno save Uniteds Season?</a></h2>
                            <i class="far fa-user"> PortoDevil</i>
                            &nbsp;
                            <i class="far calender">January 2020</i>
                            <p class="preview-text">
                                Could this man be the saviour for Ole and his men? There team is much better with him now hes there, but is there space for Paul Pogba?
                            </p>
                            <a href="single.html" class="btn read-more">Read more</a>
                        </div>

                    </div>
                    <div class="post">
                        <img src="assets/images/bruno.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.html">Could Bruno save Uniteds Season?</a></h2>
                            <i class="far fa-user"> PortoDevil</i>
                            &nbsp;
                            <i class="far calender">January 2020</i>
                            <p class="preview-text">
                                Could this man be the saviour for Ole and his men? There team is much better with him now hes there, but is there space for Paul Pogba?
                            </p>
                            <a href="single.html" class="btn read-more">Read more</a>
                        </div>

                    </div>
                    <div class="post">
                        <img src="assets/images/bruno.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.html">Could Bruno save Uniteds Season?</a></h2>
                            <i class="far fa-user"> PortoDevil</i>
                            &nbsp;
                            <i class="far calender">January 2020</i>
                            <p class="preview-text">
                                Could this man be the saviour for Ole and his men? There team is much better with him now hes there, but is there space for Paul Pogba?
                            </p>
                            <a href="single.html" class="btn read-more">Read more</a>
                        </div>

                    </div>


                </div>
                <!--// main Content-->
                <div class="sidebar">

                    <div class="section search">
                        <h2 class="section-title">Search</h2>
                        <form action="index.html" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="Search....">
                        </form>
                    </div>


                    <div class="section topics">
                        <h2 class="section-title">Topics</h2>
                        <ul>
                            <li><a href="#">Poems</a></li>
                            <li><a href="#">Quotes</a></li>
                            <li><a href="#">Fiction</a></li>
                            <li><a href="#">Biography</a></li>
                            <li><a href="#">Motivation</a></li>
                            <li><a href="#">Inspiration</a></li>
                            <li><a href="#">Life lessons</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--page wrap end-->
            <!--footer-->
            <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

            <!--jquery-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <!--Slick Carousel-->
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <!--custom script-->
            <script src="assets/js/script.js"></script>
</body>


</html>