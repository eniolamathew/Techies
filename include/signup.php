<?php
if(isset($_POST["signup-submit"])){

    require 'db.php';

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $cemail = $_POST["c-email"];
    $pwd = $_POST["pwd"];
    $cpwd = $_POST["c-pwd"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];

    if(empty($firstname) || empty($lastname) || empty($email) || empty($cemail) || empty($pwd) ||
     empty($cpwd) || empty($phone) || empty($country)){
         header("Location: ../signup/signup.php?error=emptyfields&firstname=".$firstname."&lastname=".$lastname.
         "&email=".$email."&cemail=".$cemail."&phone".$phone."&country=".$country);
         exit;
     }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup/signup.php?error=invalidemail&firstname=".$firstname."&lastname=".$lastname.
         "&phone".$phone."&country=".$country);
         exit;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^(?=.*\d)[a-zA-Z0-9]{8,}$/")){
        header("Location: ../signup/signup.php?error=invalidemail&password&firstname=".$firstname."&lastname=".$lastname.
         "&phone".$phone."&country=".$country);
         exit;
    }
    elseif($email!==$cemail){
        header("Location: ../signup/signup.php?error=emailmismatch&firstname=".$firstname."&lastname=".$lastname.
         "&phone".$phone."&country=".$country);
         exit;
    }
    elseif(!preg_match("/^(?=.*\d)[a-zA-Z0-9]{8,}$/",$pwd)){
        header("Location: ../signup/signup.php?error=invalidpassword&firstname=".$firstname."&lastname=".$lastname.
         "&phone".$phone."&country=".$country);
         exit;
    }
    elseif($pwd!==$cpwd){
        header("Location: ../signup/signup.php?error=passwordmismatch&firstname=".$firstname."&lastname=".$lastname.
         "&email=".$email."&cemail=".$cemail."&phone".$phone."&country=".$country);
         exit;
    }
    else{
        $sql = "SELECT email FROM users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup/signup.php?error=sqlerror");
         exit;
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck > 0){
            header("Location: ../signup/signup.php?error=emailalreadyexist&firstname=".$firstname."&lastname=".$lastname.
            "&phone".$phone."&country=".$country);
            exit;
            }
            else{
            $sql = "INSERT INTO users (firstname,lastname,email,pwd,phone,country) VALUES (?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../signup/signup.php?error=sqllerror");
             exit;
            }
            else{
                $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt,"ssssis",$firstname,$lastname,$email,$hashedpwd,$phone,$country);
                mysqli_stmt_execute($stmt);
                header("Location: ../signup/signup.php?signup=success");
                exit;
            }
            }
        }
    }
        mysqli_stmt_close();
        mysqli_close($conn);
    }
    else{
        header("Location: ../signup/signup.php");
        exit;
    }
?>

