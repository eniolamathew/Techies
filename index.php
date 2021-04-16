<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techies</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="sharred.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href=idexx.php>Tech<span>ies</span> Foun<span>dation.</span></a></div>
            <ul class="menu">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="About/about.php">About</a></li>
                <?php
                    if(isset($_SESSION['userid'])){
                        echo '<li class="nav-item"><a href="donate/donate.php">Donate</a></li>
                        <form class = "form" action="include/logout.php" method="POST">
                        <button class="logout" type="submit" name="logout-submit">Logout</button></form>';
                    }
                    else{
                        echo '<li class="nav-item"><a href="login/login.php">Donate</a></li>
                        <li class="nav-item"><a href="login/login.php">Login</a></li>
                        <li class="nav-item"><a href="signup/signup.php">Sign Up</a></li>';
                    }
                ?>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Welcome</div>
                <div class="text-2">We <span>Care</span></div>
            </div>
        </div>
    </section>
        <!--Children section-->
        <section class="children" id="children">
            <div class="max-width">
                <h2 class="title">Our Kids</h2>
                <div class="carousel owl-carousel">
                    <div class="card">
                        <div class="box">
                            <img src="img/images/1.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Marlon</span></p>
                            <p class="text"><b>Age: </b><span>10</span></p>
                            <p class="text"><b>Location: </b><span>Ecuador</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/2.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Hiwot</span></p>
                            <p class="text"><b>Age: </b><span>15</span></p>
                            <p class="text"><b>Location: </b><span>Ethiopia</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>

                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/3.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Gerson</span></p>
                            <p class="text"><b>Age: </b><span>8</span></p>
                            <p class="text"><b>Location: </b><span>Bolivia</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/4.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Nataly</span></p>
                            <p class="text"><b>Age: </b><span>13</span></p>
                            <p class="text"><b>Location: </b><span>Togo</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="/donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="/login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/5.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Evenson</span></p>
                            <p class="text"><b>Age: </b><span>6</span></p>
                            <p class="text"><b>Location: </b><span>Dom. Rep.</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/6.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Daudi</span></p>
                            <p class="text"><b>Age: </b><span>13</span></p>
                            <p class="text"><b>Location: </b><span>Tanzania</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/7.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Oishi</span></p>
                            <p class="text"><b>Age: </b><span>6</span></p>
                            <p class="text"><b>Location: </b><span>India</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/8.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Petrus</span></p>
                            <p class="text"><b>Age: </b><span>3</span></p>
                            <p class="text"><b>Location: </b><span>Indonesia</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/9.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Kate</span></p>
                            <p class="text"><b>Age: </b><span>10</span></p>
                            <p class="text"><b>Location: </b><span>Argentina</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/10.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Dayana</span></p>
                            <p class="text"><b>Age: </b><span>2</span></p>
                            <p class="text"><b>Location: </b><span>Bolivia</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/11.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Junior</span></p>
                            <p class="text"><b>Age: </b><span>10</span></p>
                            <p class="text"><b>Location: </b><span>Haiti</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="img/images/12.jpg" alt="child">
                            <p class="text"><b>Name: </b><span>Joachim</span></p>
                            <p class="text"><b>Age: </b><span>5</span></p>
                            <p class="text"><b>Location: </b><span>Tanzania</span></p>
                            <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
<footer>
    <nav>
        <ul class="main-footer__links">
            <li class="main-footer__link">
                <a href="#">Support</a>
            </li>
            <li class="main-footer__link">
                <a href="#">Terms of Use</a>
            </li>
        </ul>
    </nav>
</footer>
<script src="index.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>