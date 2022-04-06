<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="common/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          
    <title>Sign UP</title>
</head>
<body>

<?php require 'common/nav_bar.php' ?>
<?php

if (!isset($_SESSION['email']))
{

?> 
    <div class="container">  
        <form action="/CRUDOPERATIONS/insert.php" method="post"
              style="display: flex; flex-direction: column;align-items: center;background-color: #f2f2f2;">
              <h1 class="text-center">Sign Up</h1>
            <div class="form-group col-md-6">
                <label for="First Name">First Name</label>
                <input type="text" class="form-control" id="userfname" name="fname" placeholder="Enter FIrst name" required>
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Last Name</label>
                <input type="text" class="form-control" id="userlname" name="lname" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="Useremail">User Email</label>
                <input type="email" class="form-control" id="useremail" name="uemail"  placeholder="Enter user Email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="UserPassword">Password</label>
                <input type="password" class="form-control" id="userpwd" name="upwd" placeholder="Enter Password">
            </div>
            <div class="form-group col-md-6">
                <label for="Userphone">Phone</label>
                <input type="tel" class="form-control" id="userphone" name="uphone"  maxlength="10" pattern="[1-9]{1}[0-9]{9}" placeholder="Phone" required>
            </div>
            <input type="submit" class="btn btn-primary col-md-2" name="submit" value="Submit"/>
        </form>
    </div>
<?php
    
}
else 
    {
        header("Location: action.php");
    }
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>