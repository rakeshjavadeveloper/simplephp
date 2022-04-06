<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="common/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">      
    <title>UPDATE</title>
</head>
<body>
<?php require 'common/nav_bar.php' ?>


<?php
    include 'common/dbcon.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn,"select * from userdata where userid = $id");
    $data = mysqli_fetch_array($query);
    if(isset($_POST['update']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uemail = $_POST['uemail'];
        $upwd = $_POST['upwd'];
        $uphone = $_POST['uphone'];
 
        $edit= mysqli_query($conn,"UPDATE userdata SET firstname='$fname',lastname='$lname',email='$uemail',pasword='$upwd',phone='$uphone',
         where userid = '$id' ");

        if($edit)
        {
           
            header("location:action.php"); 
            exit;
        }                  
        else
        {
            echo "Error updating record"; 
        }
    }
?>
<div class="container my-4">  
      <h1 class="text-center">Update Data</h1>
      <form  method="post" style="display: flex; flex-direction: column;align-items: center;">

            <div class="form-group col-md-6">
                <label for="First Name">First Name</label>
                <input type="text" class="form-control" id="userfname" name="fname" value=<?php echo $data['firstname'] ?> placeholder="Enter FIrst name">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Last Name</label>
                <input type="text" class="form-control" id="userlname" name="lname" value="<?php echo $data['lastname'] ?>" placeholder="Enter Last Name" >
            </div>
            <div class="form-group col-md-6">
                <label for="Useremail">User Email</label>
                <input type="email" class="form-control" id="useremail" name="uemail" value="<?php echo $data['email'] ?>" placeholder="Enter user Email" >
            </div>
            <div class="form-group col-md-6">
                <label for="UserPassword">Password</label>
                <input type="password" class="form-control" id="userpwd" name="upwd" value="<?php echo $data['pasword'] ?>"  placeholder="Enter Password">
            </div>
            <div class="form-group col-md-6">
                <label for="Userphone">Phone</label>
                <input type="tel" class="form-control" id="userphone" name="uphone"  maxlength="10" pattern="[1-9]{1}[0-9]{9}" value="<?php echo $data['phone'] ?>"  placeholder="Phone" >
            </div>
            <div class="form-group col-md-6">
                <label for="Userdob">Date Of Birth</label>
                <input type="date" class="form-control" id="Userdob" name="Udob" value="<?php echo $data['dob'] ?>" placeholder="Enter DOB" >
            </div>
            <div class="form-group col-md-6">    
                <label for="Gender" class="form-control">Select Gender</label><br>
                <!-- <input type="radio" name="gender" value="Male" > Male
                <input type="radio" name="gender" value="Female" > Female
                <input type="radio" name="gender" value="Other" > Other -->
            <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="female") echo "checked";?>value="female">Female
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            </div>
            <div class="form-group col-md-6">
                <label for="UserAddress">Address</label>
                <input type="text" class="form-control" id="useraddress" name="uaddr" value="<?php echo $data['useraddress'] ?>" placeholder="Enter Address">
            </div>
            <div class="form-group col-md-6">
                <label for="UserAddress">City</label>
                <input type="text" class="form-control" id="usercity" name="ucity" value="<?php echo $data['city'] ?>" placeholder="Enter City">
            </div>
            <div class="form-group col-md-6">
                <label for="Userpin">PIN</label>
                <input type="tel" class="form-control" id="userpin" name="upin" value="<?php echo $data['pin'] ?>" placeholder="PIN">
            </div>
            <div class="form-group col-md-6">
                <label for="Userstate">State</label>
                <input type="text" class="form-control" id="userstate" name="ustate" value="<?php echo $data['userstate'] ?>" placeholder="Enter State">
            </div>
            <div class="form-group col-md-6"> 
            <label for="Userstate">Country</label>
            <select name="country" class="form-control" >
               <option value=""  selected="selected" disabled="disabled" >Select your country</option>  
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">China</option>
                    <option value="Algeria">India</option>
                    <option value="American Samoa">Pakistan</option>
                    <option value="Andorra">Canada</option>
                    <option value="Angola">Paris</option>
                    <option value="Anguilla">Turkey</option>
                    <option value="Antartica">USA</option>
                    <option value="Antigua and Barbuda">Sri Lanka</option>
                    <option value="Argentina">Argentina</option>
                </select>
            </div>

            <input type="submit" class="btn btn-primary col-md-6" name="update" value="UPDATE"/>
        </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>