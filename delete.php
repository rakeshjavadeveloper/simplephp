<?php
include 'common/dbcon.php'; 

    $id = $_GET['id'];
    $del = mysqli_query($conn,"delete from userdata where userid = $id");
    if($del)
    {
        echo "Record Deleted"; 
        header("location:dashboard.php"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; 
    }
?>