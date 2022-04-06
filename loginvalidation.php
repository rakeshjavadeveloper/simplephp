<?php
include 'common/dbcon.php';
session_start();

 if (isset($_POST['username']) && isset($_POST['userpwd'])) {
    
    $username = $_POST['username'];
    $password = $_POST['userpwd']; 
    //die("$password");
    $password = base64_encode("$password"); 
    //die($password);
    $sql = "select * from userdata where email = '$username' and pasword = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) 
    {    
        //die("hiiii");
        $_SESSION['email'] = $row['email'];
        header("Location: dashboard.php");
    } 
    else 
    {
       echo "Invalid Id or password ";
       header("Location: index.php");
    }
    
}
?>   