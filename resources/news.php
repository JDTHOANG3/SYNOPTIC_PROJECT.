<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
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
    <div id="box">
        <div class="twitter">
            <a class="twitter-timeline" data-width="500" data-height="500" data-theme="dark" href="https://twitter.com/GdprSummary?ref_src=twsrc%5Etfw">Tweets by GdprSummary</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <div class="testtext">
            <a href="https://www.infosecurity-magazine.com/news/openai-chatgpt-breaking-gdpr-noyb/">OpenAI's ChatGPT is Breaking GDPR, Says Noyb</a>
            <p class="author">Kevin Poireault, April 29th-2024</p>
            <p class="description"> 
                Discover the latest showdown between technology and data privacy in a gripping article revealing a complaint filed by a prominent European rights group against a leading AI company. Dive into the intrigue as accusations of false personal data provision spark a legal battle under the EU's strict data protection laws. Uncover the complexities of technology's compliance with regulations in this compelling narrative of digital rights advocacy and corporate accountability.</p>
        </div>

        <div class="testtext">
            <a href="https://blogs.lse.ac.uk/impactofsocialsciences/2024/04/15/new-data-protection-and-privacy-laws-have-changed-the-regulatory-landscape-for-researchers-in-the-global-north/">New data protection and privacy laws have changed the regulatory landscape for researchers in the Global North</a>
            <p class="author">Daniel Spichtinger, April 15th-2024</p>
            <p class="description">Embark on a journey through the ever-evolving landscape of data protection laws, where 2023 marked a pivotal year of change across Europe, the UK, and the USA. Delve into the complexities of GDPR-aligned regulations as outlined by Daniel Spichtinger, offering insight into the intricate world of research data management. Discover the challenges faced by researchers and support staff amidst international collaborations spanning diverse legal jurisdictions. Uncover how legislative updates in key regions, influenced by the EU's GDPR, reflect a global shift towards stringent data protection standards. Experience the transformation firsthand as you navigate through the nuances of regulatory frameworks shaping the future of data ethics and legal compliance in research endeavors.</p>
        </div>

        <div class="twitter">
            <a class="twitter-timeline" data-width="500" data-height="500" data-theme="dark" href="https://twitter.com/StaySafeOnline?ref_src=twsrc%5Etfw">Tweets by StaySafeOnline</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <div class="testtext">
            <a href="https://lawdit.co.uk/readingroom/brexit-on-uk-gdpr-regulations">Impact of Brexit on Data Protection and Privacy Regulations</a>
            <p class="author">Ellis Sweetenham, October 13th-2023</p>
            <p class="description">Discover the post-Brexit evolution of data protection with the UK GDPR, a regulatory framework closely aligned with its EU predecessor. Delve into the nuances shaping data transfers and processing for UK businesses, navigating a landscape where compliance is paramount. Uncover key strategies for maintaining robust data protection post-Brexit, enticing readers with insights into the evolving realm of privacy and security.</p>
        </div>
       
        <div class="testtext">
            <a href="https://www.theregister.com/2024/02/21/gdpr_data_processing_costs/">Europe's data protection laws cut data storage by making information-wrangling pricier</a>
            <p class="author">Thomas Claburn, Feburary 21st-2024</p>
            <p class="description">Dive into the economic impacts of Europe's GDPR through recent research suggesting a significant shift in data storage and processing practices among European firms. Explore the findings of "Data, Privacy Laws and Firm Production: Evidence from the GDPR," shedding light on the cost implications of privacy regulations. Uncover insights into how GDPR compliance has influenced data-intensive industries and sparked changes in corporate strategies, enticing readers with a glimpse into the evolving landscape of data management and privacy regulation.</p>
        </div>
       
        <div></div>
       
        <div></div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <script src="../script.js"></script>
    
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    
    <script type="text/javascript">
            var bannerBG = document.getElementById('bg')
            window.addEventListener('scroll',function(){
                bannerBG.style.opacity = 1 - +window.pageYOffset/350+''
                bannerBG.style.top = +window.pageYOffset+'px'
                bannerBG.style.backgroundPositionY = - +window.pageYOffset/2+'px'
            })
    </script>
</body>
</html>