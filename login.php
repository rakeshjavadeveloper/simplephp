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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>LOGIN</title>
</head>
<body>

<?php require 'common/nav_bar.php' ?>
<?php
if (!isset($_SESSION['email']))
{
?>
    <!-- <main class="d-flex align-items-center"> 
        <div class="container my-4">
            
            <form action="loginvalidation.php" method="post"
            style="display: flex; flex-direction: column;align-items: center;">
            <div class="login-hdng">
                <h1 class="text-center"><span><i class="fas fa-user-plus"><span></i>Log In </h1>
            </div>
                <div class="form-group col-md-4">
                    <label for="Username"> Username</label>
                    <input type="text" class="form-control" id="username" name="username"  placeholder="Enter user id mail" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="Password"> Password</label>
                    <input type="password" class="form-control" id="userpwd" name="userpwd" placeholder="Enter Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                </div>
                <input type="submit" class="btn btn-primary col-md-2" name="login" value=LOGIN> 
                <a href="register.php">Sign Up</a>
            </form>   
        </div>
    </main> -->

<main class="d-flex align-items-center" style="background:red;padding-bottom:100px">
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                    <h1 class="text-center"><span><i class="fas fa-user-plus"><span></i>Log In </h1>
                    </div>
                    <div class="card-body">
                        <form action="loginvalidation.php" method="post"
                            style="display: flex; flex-direction: column;align-items: center;">
                            <div class="form-group">
                                <label for="Username"> Username</label>
                                <input type="text" class="form-control" id="username" name="username"  placeholder="Enter user id mail" required>
                            </div>
                            <div class="form-group">
                                <label for="Password"> Password</label>
                                <input type="password" class="form-control" id="userpwd" name="userpwd" placeholder="Enter Password" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                                <input type="submit" class="btn btn-primary" name="login" value=LOGIN> 
                                <a href="register.php">Sign Up</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>   
    </div>
</main>

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