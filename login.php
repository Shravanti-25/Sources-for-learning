<? php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="login-style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        
            <h1>Login</h1>

            <form method="post" action="server.php">
            
  	        
            <div class="input-box">
                <input type="text" name="username"placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember">
                <label > <input type="checkbox">Remember me</label>
                
            </div>
            <input type="submit" class="button" name="login_user" value="Login">
            <div class="register">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
</form>
    </div>
</body>
</html>