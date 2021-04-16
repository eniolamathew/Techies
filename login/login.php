<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="login.css" />
</head>

<body class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="login-logo mb-4 ">
            <img src="../img/logo1.png" alt="login" class="login-logo">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h3 class="text-center text-capitalize custom-form-header">
                    Login
                </h3>
                <div class="card p-4">
                    <form action="../include/login.php" method="POST" id="login-form">
                        <input type="hidden" name="_token">
                        <div class="card-body py-5">
                            <div class="form-group">
                                <label class="form-control-label">Email Address</label>
                                <input type="text" placeholder="Email Address" name="email"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" name="remember" value="1" id="login"
                                    checked="checked">
                                <label class="custom-control-label" for="login">Remember my login</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" name="login-submit" class="btn btn-primary px-5">Login</button>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-link">Forgot password?</a>
                                </div>
                            </div>
                            <div class="row down">
                                <div class="col-10 mx-auto">
                                    <a href="../signup/signup.php" class="btn btn-link">Create Account</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../jquery-3.5.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>