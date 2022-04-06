<?php

include 'common/dbcon.php';


if(isset($_POST['submit']))
{
     $body = "This is your passworld".$_POST['upwd'];    
  // mail($_POST['uemail'],"Password Received",$body);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uemail = $_POST['uemail'];
    $upwd = base64_encode($_POST['upwd']);

    $uphone = $_POST['uphone'];
    
   $sql = "INSERT INTO userdata (firstname,lastname,email,pasword,phone) 
    VALUES ('$fname','$lname','$uemail','$upwd','$uphone')";

    if (mysqli_query($conn, $sql)) {

        header("Location: login.php");

    } else {

        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>