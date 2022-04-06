<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
  
  <div class="header-right">
    <!-- <a class="active" href="home.php">Home</a>
    <a href="contact.php">Contact</a> -->
    <?php if(isset($_SESSION['email'])) :?>
      <p><?php echo("{$_SESSION['email']}"."<br />");?></p>
      <a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php"><span class="fa fa-user-circle"></span>Log out</a>
    <?php else : ?>
        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php"><span class="fa fa-user-circle fa-spin"></span>  Log In</a>
    <?php endif; ?> 
    <!-- <a class="active" href="login.php">Login</a> -->
    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="Dashboard.php">Dashboard</a>    
  </div>
</div>

</body>
</html>