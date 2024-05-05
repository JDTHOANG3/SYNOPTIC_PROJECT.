<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="banner">
        <div id="bg"></div>
    </div>
    <header>
        <a href="../index.php" class="logo">easycomply</a>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../resource_navigation.php">Resources</a></li>
            <?php
            if (isset($_SESSION["userid"])) {
            ?>
                <li><a href="../includes/profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href="../includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
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
                <form action="../includes/login.inc.php" method="post">
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
                <form action="../includes/signup.inc.php" method="post">
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
    <div class="div card-container-consent">
        <div class="div card">
            <div class="div card-content">
                <h1>CONSENT FORM 1</h1>
                <p>In this tab you can access the latest news surrounding the GDPR such as news articles and social media feeds.</p>
                <a href="materials/ConsentForm1.docx" download="Consent_Form_1" class="card-button">Download</a>
            </div>
        </div>

        <div class="div card">
            <div class="div card-content">
                <h1>CONSENT FORM 2</h1>
                <p>This tab contains several data collection and consent forms forms ready to be downloaded and free of use.</p>
                <a href="resources/forms.php" download="#" class="card-button">Download</a>
            </div>
        </div>

        <div class="div card">
            <div class="div card-content">
                <h1>CONSENT FORM 3</h1>
                <p>Following this tab leads you to access to several traning materials in the form of power points that can be delivered to staff and management in order to ensure gdpr compliance across the board</p>
                <a href="resources/training.html" download="#" class="card-button">Download</a>
            </div>
        </div>







        <div class="div card-container-collection">
            <div class="div card">
                <div class="div card-content">
                    <h1>DATA COLLECTION FORM 1</h1>
                    <p>In this tab you can access the latest news surrounding the GDPR such as news articles and social media feeds.</p>
                    <a href="materials/DataCollectionForm1.docx" download="Data_Collection_Form_1" class="card-button">Download</a>
                </div>
            </div>

            <div class="div card">
                <div class="div card-content">
                    <h1>DATA COLLECTION FORM 2</h1>
                    <p>This tab contains several data collection and consent forms forms ready to be downloaded and free of use.</p>
                    <a href="resources/forms.php" download="#" class="card-button">Download</a>
                </div>
            </div>

            <div class="div card">
                <div class="div card-content">
                    <h1>DATA COLLECTION FORM 3</h1>
                    <p>Following this tab leads you to access to several traning materials in the form of power points that can be delivered to staff and management in order to ensure gdpr compliance across the board</p>
                    <a href="resources/training.html" download="#" class="card-button">Download</a>
                </div>
            </div>






        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src="../script.js"></script>

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