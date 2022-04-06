<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="common/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>action</title>
</head>
<body>

<?php require 'common/nav_bar.php' ?>
<?php include 'common/dbcon.php'; ?>
<div class="container my-4">
    <div class="banner" style="text-align:center">
        <h1 class="bnr-hdng1">Hello </h1>
            <?php 
                $id = $_GET['id'];
                $sql = "SELECT userid,firstname,lastname,email,pasword,phone FROM userdata where userid = $id";
                $result = $conn->query($sql);                        
                if ($result->num_rows > 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {                               
                        echo "<h3><br />Your <b><i>Profile</i></b> is as follows:<br /></h3>";
                        echo "<b>YOUR ID :</b> ".$row['userid'];
                        echo "<br /><b>YOUR NAME:</b>".$row["firstname"]. " " . $row["lastname"];
                        echo "<br /><b>YOUR Email:</b> ".$row['email'];
                        echo "<br /><b>YOUR PASSWORD :</b> ".$row['pasword'];
                        echo "<br /><b>YOUR PHONE:</b> ".$row['phone'];  
                    }
                }                         
                else
                {
                    echo "YOUR DATA IS MISSING";
                }                        
                $conn->close();
            ?>                 
    </div>
</div>
</body>
</html>
