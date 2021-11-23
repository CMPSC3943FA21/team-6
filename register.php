
<?php 
mysql_connect("localhost","root","")or die (mysql_error());
mysql_select_db("reg") or die(mysql_error());

if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $emailid = $_POST['email'];

    if($name=='')
    {
        echo "<script>alert('Please enter the name')</script>";
        exit();
    }
    if($pass=='')
    {
        echo "<script>alert('Please enter the password')</script>";
        exit();
    }
    if($emailid=='')
    {
        echo "<script>alert('Please enter the email id')</script>";
    }

    $query="insert into user (name,password,email) values ('$name','$pass','$emailid') ";

    if(mysql_query($query)){
        echo "<h3>You have registered sucessfully!!!</h3>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- css -->
    <link rel="stylesheet" href="./register.css">
</head>

<body>

    <div class="container flex">
        <form method="post">
            <div class="form-group flex form-title">
                <h3>User Registration</h3>
            </div>
            <div class="form-group">
                <label for="email">Name</label> <br>
                 <input class="form-control" required type="text" id="name" name="name" value="">
            </div>
            <div class="form-group">
                <label for="email">Email</label> <br>
                 <input class="form-control" required type="email" name="email">
            </div>

            <div class="form-group">
                <label for="email">Password</label> <br>
                <input class="form-control" required type="password" name="password">
            </div>
            

            <div class="form-group">
                <button type="submit" class="login-button" id="register-btn" name="signup">Register</button>
            </div>
            <hr style="margin-top: 10px; margin-bottom: 10px;">
            <div class="form-group">
                <p style="text-align: right;">Already have an account? <a href="login.php">Login</a></p>
            </div>

        </form>
    </div>

</body>

</html>
