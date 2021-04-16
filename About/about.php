<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../sharred.css">
    <link rel="stylesheet" href="about.css">
    <title>About</title>
</head>
<body>
    <nav class="navmenu">
        <div class="max-width">
            <div class="logo"><a href=indexx.html>Tech<span>ies</span> Foun<span>dation.</span></a></div>
            <ul class="menu">
                <li class="item"><a href="../index.php">Home</a></li>
                <li class="item"><a href="../About/about.php">About</a></li>
                <?php
                    if(isset($_SESSION['userid'])){
                        echo '<li class="nav-item"><a href="../donate/donate.php">Donate</a></li>
                        <form action="../include/logout.php" method="POST">
                        <button class="logout" type="submit" name="logout-submit">Logout</button></form>';
                    }
                    else{
                        echo '<li class="nav-item"><a href="../login/login.php">Donate</a></li>
                        <li class="nav-item"><a href="../login/login.php">Login</a></li>
                        <li class="nav-item"><a href="../signup/signup.php">Sign Up</a></li>';
                    }
                ?>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        </div>
    </nav>
    <main class="container-fluid main-section p-0">
        <section class="text-overview">
            <h1 class="text">Our Mission, Vision & Principles</h1>
        </section>
        <div class="col-8 col-sm-8 col-md-10 col-lg-10 m-auto">
            <div class="container p-0">
                <section class="row section m-0 py-5">
                    <div class="d-flex flex-column align-items-center col-md-6 m-0 p-0 ">
                        <h1 class="goal col-12 p-0">
                            Join our global movement to reduce illiteracy in the World.
                        </h1>
                        <?php
                        if(isset($_SESSION['userid'])){
                        echo '<a href="../donate/donate.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                        else{
                            echo '<a href="../login/login.php" class="col-6 btn btn-primary mb-3">Donate</a>';
                        }
                     ?>
                    </div>

                    <p class="col-md-4 m-auto p-0">Our Foundation promotes educational development in the world by
                        distributing educational
                        resources to those in need, while providing access to educational facilities and
                        other necessary infrastructure.</p>
                </section>
            </div>
            <section class="section py-5">
                <h1>
                    Our Mission
                </h1>
                <P>
                    Our Foundation promotes education and empowers youths through the
                    provision of educational materials, resources and Donation.
                </P>
            </section>
            <section class="section py-5">
                <h1>
                    Our Vision
                </h1>
                <P>
                    Access to quality educational resources and facilities.
                </P>
            </section>
            <section class="section py-5">
                <h1>
                    Our Values
                </h1>
                <ul>
                    <li>We believe in the dignity of all human beings.</li>
                    <li>To whom much is given, much is also expected.</li>
                    <li>We will strive to leave the world a better place than we found it.</li>
                    <li>We shall not engage in any activity that will bring dishonor to the Foundation or its mission.
                    </li>
                    <li>No matter how small our individual contributions may be, we will make a difference.</li>
                    <li>No matter how small your individual contributions may be, you can also make a difference.</li>
                </ul>
            </section>
            <section class="goal py-5 col-10 m-auto">
                <h1>“Our goal is to contribute to the improvement of education and, thereby,
                    the reduction of poverty in the World”</h1>
            </section>
        </div>
    </main>
    <footer class="main-footer">
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
    <script src="../jquery-3.5.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>