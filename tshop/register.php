<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="login-register.css">
</head>

<body>
    <div class="container">
    <a href="index.php"><h1>View Web</h1> </a>    
    <h1>Register</h1>
        <form action="registration.php" method="post">
            <label for="username">
					<i class="fas fa-user"></i>
				</label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
					<i class="fas fa-lock"></i>
				</label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <label for="email">
					<i class="fas fa-lock"></i>
				</label>
            <input type="email" name="email" placeholder="Email Address" id="email" required>
            <input type="submit" value="Register">
            <p>Already have an account? <a href="login.php">Login Here</a></p>
        </form>
    </div>
</body>

</html>