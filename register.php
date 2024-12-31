<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
    <link rel="stylesheet" href="register-style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
            <h1>Register</h1>
            <form method="post" action="server.php" >
            <div class="input-box">
                <label >Username</label>
                <input type="text"  name="username" value="">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box"> 
                <label>Email-ID</label>
                <input type="text" name="email" value="">
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <label >password</label>
                <input type="password" name="password_1" >
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <label>Confirm password</label>
                <input type="password" name="password_2">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember">
                <label > <input type="checkbox">I agree to the Terms & Conditions</label>
            </div>
            <input type="submit" class="button" name="reg_user" value="Submit">
            <div class="register">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>