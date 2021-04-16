<?php
if(isset($_POST["login-submit"])){

require 'db.php';

$email = $_POST["email"];
$pwd = $_POST["password"];

if( empty($email) ||  empty($pwd)){
         header("Location: ../login/login.php?error=emptyfields&email=".$email);
         exit;
}
else{
    $sql = "SELECT * FROM users WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login/login.php?error=sqlerror");
         exit;
    }
        else{
        mysqli_stmt_bind_param($stmt,'s',$email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdcheck = password_verify($pwd, $row['pwd']);
            $emailvalid = $row['email'];
            if($pwdcheck == false){
                header("Location: ../login/login.php?error=invalidpassword");
                exit;
            }
            elseif($pwdcheck == true){
                session_start();
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['email'] = $row['email'];
                
                header("Location: ../index.php?login=success");
                exit;
            }
            else{
                header("Location: ../login/login.php?error=sqlerror");
                exit;
            }
        }
        else{
            header("Location: ../login/login.php?error=invalidemail");
            exit;
        }
        }
}

}
else{
    header("Location: ../login/login.php");
    exit;
}


?>