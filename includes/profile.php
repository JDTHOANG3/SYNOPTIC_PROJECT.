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
    <link rel="stylesheet" href="../style.css">
    <style>
        body {
            background-color: #393e46;
        }

        header .logo {
            position: relative;
            font-weight: 700;
            color: white;
            text-decoration: none;
            font-size: 2em;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: 0.3s;
        }

        header a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background-color: white;
            border-radius: 5px;
            transform-origin: right;
            transform: scaleX(0);
            transition: transform 0.5s;
        }

        header ul li a {
            position: relative;
            margin: 0 15px;
            text-decoration: none;
            color: white;
            letter-spacing: 2px;
            font-weight: 500px;
            transition: 0.6s;
        }
    </style>
</head>

<body>
    <header>
        <a href="../index.php" class="logo">easycomply</a>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../resource_navigation.php">Resources</a></li>
            <?php
            if (isset($_SESSION["userid"])) {
            ?>
                <li><a href="profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
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