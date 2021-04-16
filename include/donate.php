<?php

session_start();
include_once 'db.php';

if(isset($_POST['donate'])){

    $userid = $_SESSION['userid'];
    $email = $_SESSION['email'];
    $child = $_POST['name'];
    $amount = $_POST['amount'];

    $sql = "SELECT * FROM users WHERE userid = '$userid' AND email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $emailcheck = $row['email'];
            $firstname = $row['firstname'];
            if($email===$emailcheck){
                $sql = "INSERT INTO userdonation (userid,email,child,amount,firstname) 
                VALUES ('$userid','$email','$child','$amount','$firstname')";
                mysqli_query($conn, $sql);
                header("Location: ../donate/donate.php?donation=successful");
                exit;
            }
            else{
                header("Location: ../donate/donate.php?error=donationfailed");
                exit;
            }
        }
    }else{
        header("Location: ../donate/donate.php?error=donationfailed");
        exit;
    }

    mysqli_close($conn);
}
else{
    header("Location: ../donate/donate.php?error=clicktodoante");
    exit;
}
?>