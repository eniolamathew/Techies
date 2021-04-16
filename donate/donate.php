<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="donate.css">
    <title>Donate</title>
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
    <?php
    if(isset($_GET['donation'])){
       if($_GET['donation'] == "successful"){
         echo '<div class="backdrop open ">
         <div class="modal modaltransform open">
             <h1 class="modal_title">Thanks for your Donation</h1>
             <div class="modal_actions">
                 <button class="modal_action modal_action--negative" type="button">CLOSE</button>
             </div>
         </div>
     </div>';
    }
    }
    elseif (isset($_GET['error'])) {
        if($_GET['error'] == "donationfailed"){
                echo '<div class="backdrop open ">
                <div class="modal modaltransform">
                    <h1 class="modal_title">Donation Failed</h1>
                    <div class="modal_actions">
                        <button class="modal_action modal_action--negative" type="button">CLOSE</button>
                    </div>
                </div>
            </div>';
        }
    }
    ?>
    <section>
        <div class="max-width">
            <h2 class="text-title kids">Our Kids</h2>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/1.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Marlon</span></p>
                    <p class="text"><b>Age: </b><span>10</span></p>
                    <p class="text"><b>Gender: </b><span>Female</span></p>
                    <p class="text"><b>Location: </b><span>Ecuador</span></p>
                    <p class="text">Marlon is anxiously waiting for a sponsor. She needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="marlon">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Marlon</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/2.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Hiwot</span></p>
                    <p class="text"><b>Age: </b><span>15</span></p>
                    <p class="text"><b>Gender: </b><span>Female</span></p>
                    <p class="text"><b>Location: </b><span>Ethiopia</span></p>
                    <p class="text">Hiwot is anxiously waiting for a sponsor. She needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Hiwot">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Hiwot</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/3.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Gerson</span></p>
                    <p class="text"><b>Age: </b><span>8</span></p>
                    <p class="text"><b>Gender: </b><span>Male</span></p>
                    <p class="text"><b>Location: </b><span>Bolivia</span></p>
                    <p class="text">Gerson is anxiously waiting for a sponsor. He needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Gerson">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Gerson</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/4.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Nataly</span></p>
                    <p class="text"><b>Age: </b><span>13</span></p>
                    <p class="text"><b>Gender: </b><span>Female</span></p>
                    <p class="text"><b>Location: </b><span>Togo</span></p>
                    <p class="text">Nataly is anxiously waiting for a sponsor. She needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Nataly">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Nataly</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/5.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Evenson</span></p>
                    <p class="text"><b>Age: </b><span>6</span></p>
                    <p class="text"><b>Gender: </b><span>Male</span></p>
                    <p class="text"><b>Location: </b><span>Dominican Republic</span></p>
                    <p class="text">Evenson is anxiously waiting for a sponsor. He needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Evenson">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Evenson</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/6.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Daudi</span></p>
                    <p class="text"><b>Age: </b><span>13</span></p>
                    <p class="text"><b>Gender: </b><span>Male</span></p>
                    <p class="text"><b>Location: </b><span>Tanzania</span></p>
                    <p class="text">Daudi is anxiously waiting for a sponsor. He needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Daudi">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Daudi</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/7.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Oishi</span></p>
                    <p class="text"><b>Age: </b><span>6</span></p>
                    <p class="text"><b>Gender: </b><span>Male</span></p>
                    <p class="text"><b>Location: </b><span>India</span></p>
                    <p class="text">Oishi is anxiously waiting for a sponsor. He needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Oishi">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Oishi</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/8.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Petrus</span></p>
                    <p class="text"><b>Age: </b><span>3</span></p>
                    <p class="text"><b>Gender: </b><span>Male</span></p>
                    <p class="text"><b>Location: </b><span>Indonesia</span></p>
                    <p class="text">Petrus is anxiously waiting for a sponsor. He needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Petrus">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Petrus</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/9.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Kate</span></p>
                    <p class="text"><b>Age: </b><span>10</span></p>
                    <p class="text"><b>Gender: </b><span>Female</span></p>
                    <p class="text"><b>Location: </b><span>Argentina</span></p>
                    <p class="text">Kate is anxiously waiting for a sponsor. She needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Kate">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Kate</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/10.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Dayana</span></p>
                    <p class="text"><b>Age: </b><span>2</span></p>
                    <p class="text"><b>Gender: </b><span>Female</span></p>
                    <p class="text"><b>Location: </b><span>Bolivia</span></p>
                    <p class="text">Dayana is anxiously waiting for a sponsor. she needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Dayana">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Dayana</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row rw">
                <div class="col-md-4 cell image">
                    <img src="../img/images/11.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Junior</span></p>
                    <p class="text"><b>Age: </b><span>10</span></p>
                    <p class="text"><b>Gender: </b><span>Male</span></p>
                    <p class="text"><b>Location: </b><span>Haiti</span></p>
                    <p class="text">Junior is anxiously waiting for a sponsor. He needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Junior">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Junior</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 cell image">
                    <img src="../img/images/12.jpg" alt="Kids">
                </div>
                <div class="col-md-4 words">
                    <p class="text"><b>Name: </b><span>Joachim</span></p>
                    <p class="text"><b>Age: </b><span>5</span></p>
                    <p class="text"><b>Gender: </b><span>Male</span></p>
                    <p class="text"><b>Location: </b><span>Tanzania</span></p>
                    <p class="text">Joachim is anxiously waiting for a sponsor. He needs your
                        support to have new oppurtunites to learn and grow physically, mentally and spiritually</p>
                </div>
                <div class="col-md-4 donate">
                    <p class="select">Select an Amount to Donate</p>
                    <form action="../include/donate.php" method="POST">
                        <input type="hidden" name="name" value="Joachim">
                        <select placeholder="Amount" name="amount" class="col-md-10 form-control amount mx-auto"
                            required>
                            <option value="">Amount</option>
                            <option value="£5">£5</option>
                            <option value="£10">£10</option>
                            <option value="£20">£20</option>
                            <option value="£50">£50</option>
                            <option value="£200">£200</option>
                            <option value="£100">£100</option>
                            <option value="£500">£500</option>
                            <option value="£1000">£1000</option>
                        </select>
                        <P class="text m-0">Donate for Joach</P>
                        <button type="submit" name="donate" class="button btn btn-primary col-md-12">Donate</button>
                    </form>
                </div>
            </div>
    </section>
</body>
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
<script src="../shared.js"></script>
<script src="donate.js"></script>
<script src="../jquery-3.5.1.js"></script>
<script src="../bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
</html>