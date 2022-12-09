<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login-register.css">
</head>

<body>
    <div class="container">
    <a href="index.php"><h1>View Web</h1> </a>    
    <h1>Login</h1>
        <form action="authenticate-login.php" method="post">
            <label for="username">
					<i class="fas fa-user"></i>
				</label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
					<i class="fas fa-lock"></i>
				</label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value="Login">
            <p>Don't have an account? <a href="register.php">Register Here</a></p>
        </form>
    </div>
</body>

</html>