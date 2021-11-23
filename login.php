<?php 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css -->
    <link rel="stylesheet" href="./login.css">
</head>

<body>

    <div class="container flex">
        <form action="#" method="" class="login-form">
            <div class="form-group flex form-title">
                <h3>Login</h3>
            </div>
            <div class="form-group">
                <label for="email">Email</label> <br>
                <input class="form-control" type="email" name="email">
            </div>

            <div class="form-group">
                <label for="email">Password</label> <br>
                <input class="form-control" type="password" name="password">
            </div>
           
            <div class="form-group">
                <button class="login-button">Login</button>
            </div>
            <hr style="margin-top: 10px; margin-bottom: 10px;">
            <div class="form-group">
                <p style="text-align: right;">Don't have an account? <a href="register.php">Register</a></p>
            </div>

        </form>
    </div>

</body>

</html>