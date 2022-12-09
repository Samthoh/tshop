<html>

<head>
    <title>TSHOP</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="header">
        <a href="index.php" class="logo">T<span>SHOP</span></a>

        <img src="icons/menu-bars.svg" alt="menu" class="menu" width="20px"></img>

        <nav>
            <img src="icons/close-menu.svg" alt="close menu" class="close"></img>
            <ul class="top-nav" style="font-size: 16px;">
                <li>
                    <a href="cart.php" class="cart-icon"><img src="icons/shopping-cart.png" alt="cart icon" height="20px">Cart</a>
                </li>
                <li>
                    <a href="profile.php" class="profile-icon"><img src="icons/profile.png" alt="profile icon" height="20px">Profile</a>
                </li>
                <?php
                if (isset($_SESSION['loggedin'])) {
                    ?>
                    <li><a href="logout.php"><img src="icons/logout-icon.png" alt="login icon" height="20px">Log Out</a></li>
                <?php
                }
                else{
                    ?>
                    <li><a href="login.php"><img src="icons/login-icon.png" alt="login icon" height="20px">Log in</a></li>
                    <?php
                }
                ?>
                <?php
                if (!isset($_SESSION['loggedin'])) {
                    ?>
                    <li><a href="register.php"><img src="icons/register-icon.png" alt="register icon" height="20px">Register</a></li>
                <?php
                } 
                ?>
            </ul>
        </nav>

        <script>
            const menu = document.querySelector('.menu')
            const close = document.querySelector('.close')
            const nav = document.querySelector('nav')

            menu.addEventListener('click', () => {
                nav.classList.add('open-nav')
            })
            close.addEventListener('click', () => {
                nav.classList.remove('open-nav')
            })
        </script>

    </div>