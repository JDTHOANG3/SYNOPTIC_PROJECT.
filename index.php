<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="banner">
        <div id="bg"></div>
    </div>
    <header>
        <a href="index.php" class="logo">easycomply</a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="resource_navigation.php">Resources</a></li>
            <?php
            if (isset($_SESSION["userid"])) {
            ?>
                <li><a href="includes/profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
            <?php
            } else {
            ?>
                <li><button class='btnLogin-popup'>Login</button></li>
            <?php
            }
            ?>
        </ul>
    </header>
    <div class="wrapperwrapper" style="margin-top: -700px;">
        <div class="wrapper" style="position: absolute;">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="includes/login.inc.php" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" required name="uid">
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="pwd">
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" name="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <h2>Registration</h2>
                <form action="includes/signup.inc.php" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" required name="uid">
                        <label>Username</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="pwd">
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="pwdrepeat">
                        <label>Password repeat</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & conditions</label>
                    </div>
                    <button type="submit" name="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section>

        <div class="row" style="margin-top: 700px;">
            <div class="column">
                <h2>The Goal</h2>
                <p>The goal of this project is to create a portal through which the user can access information and materials that can aid them in complying with the ever changing GDPR laws.</p>
            </div>
            <div class="column">
                <h2>The Means</h2>
                <p>This will be completed by providing the user with meaningful features such as easily accessible forms for data collection, live feed of news from outlets and social media accounts focused on delivering information about the GDPR or training material that can be delivered to their employees.</p>
            </div>
            <div class="column">
                <h2>The Benefit</h2>
                <p>Small and medium sized enterprises being the target end user can hopefully benefit from using this website by getting all the resources they need to adhere to at least the minimum level of GDPR compliance and avoid the risk of facing legal or financial reprecussions that are linked with breaching the European law.</p>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="script.js"></script>

    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>

    <script type="text/javascript">
        var bannerBG = document.getElementById('bg')
        window.addEventListener('scroll', function() {
            bannerBG.style.opacity = 1 - +window.pageYOffset / 350 + ''
            bannerBG.style.top = +window.pageYOffset + 'px'
            bannerBG.style.backgroundPositionY = - +window.pageYOffset / 2 + 'px'
        })
    </script>
</body>

</html>