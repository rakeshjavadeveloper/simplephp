<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="common/style.css">
    <title>action</title>
    <style>
.bnr-hdng1{
    margin-top:20px;
}
#custom {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:20px;
}

#custom td, #custom th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}
#custom td a{
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:50px;
}
#custom tr:nth-child(even){background-color: #f2f2f2;}

#custom tr:hover {background-color: #ddd;}

#custom th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
</style>   
</head>
<body>

<?php require 'common/nav_bar.php' ?>
<?php include 'common/dbcon.php'; ?>
<?php
if (isset($_SESSION['email']))
{

?>
<div class="container my-4">
    <div class="banner" style="text-align:center">
        <!-- <div class="container"> -->
            <?php //var_dump($_SESSION); ?>
            
            <h1 class="bnr-hdng1">Hello </h1><p><?php echo("{$_SESSION['email']}"."<br />");?></p>
            <p class="bnr-para">All Data Are Listed Below</p>
            <table border="2" id="custom" style="margin-left: auto;margin-right: auto">
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th colspan="3">Operations</th>
                </tr>
                <?php 
                    $sql = "SELECT userid,firstname,lastname, email , phone FROM userdata";
                    $result = $conn->query($sql);                        
                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {                               
                            echo"
                            <tr>
                                <td>".$row['userid']."</td>
                                <td>".$row["firstname"]. " " . $row["lastname"]."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['phone']."</td>
                                <td>   
                                    <a href=delete.php?id=".$row['userid'].">Delete</a>                               
                                </td>
                                <td>   
                                    <a href=update.php?id=".$row['userid'].">Update</a>                                
                                </td>
                                <td>   
                                    <a href=view.php?id=".$row['userid'].">View</a>                                
                                </td>
                            </tr>";
                        }
                    }                         
                    else
                    {
                        echo "0 results";
                    }                        
                    $conn->close();
                ?>             
            </table>
            <!-- <div class="lgbtn">
                <a class="link" href="logout.php">Log Out</a>
            </div> -->
        <!-- </div> -->
    </div>
</div>
<?php
    
}
else 
    {
        header("Location: login.php");
    }
?>
</body>
</html>
