<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){

    }else{
        header("location: login/login.php");
    }
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writers Arena | ACE IT CONSULTANCY</title>
    <link rel="icon" type="image/x-icon" href="images/logo/favi.png">

    <script src="https://kit.fontawesome.com/314e866590.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/writers.css">

</head>
<body>
    

    <header>
        <div class="menu-btn">
            <span class="menu-btn_hamburger"></span>
        </div>

        <nav class="nav">
            <div class="logo-div" ><a href="index.html"><img src="images/logo/turq.png" alt=""></a></div>
            
            <ui class="menu-nav">
                <li class="menu-nav_item">
                    <a href="index.html" class="menu-nav_link">Home</a>
                </li>
                <li class="menu-nav_item" active>
                    <a href="about2.html" class="menu-nav_link">About Us</a>
                </li>
                <li class="menu-nav_item dropdown">
                    <a href="#" class="menu-nav_link">Category <i class="fas fa-sort-down"></i></a>
                    <div class="dropdown-content">
                        <a href="clients.php">Client</a>
                        <a href="writers.php">Writer</a>
                    </div>
                </li>
                <li class="menu-nav_item">
                    <a href="faq2.html" class="menu-nav_link">FAQs</a>
                </li>
                <li class="menu-nav_item">
                    <a href="login/login.php" class="menu-nav_link">Log in</a>
                </li>
            </ui>
        </nav>
    </header>

    <section class="banner">
        <h2>Welcome to ACE IT <span>Writers Arena</span></h2>
        <a id="openChat" href="javascript:void(Tawk_API.toggle())"> Chat With Admin </a>
    </section>

    <section class="mySearch" id="mySearch">

        <div class="wrapper">
            <div class="container">
            <form role="search" method="get" class="search-form form" action="">
                <label>
                    <span class="screen-reader-text">Search for...</span>
                    <input type="search" class="search-field" id="search-bar" placeholder="Search..." value="" name="s" title="" />
                </label>
                <input type="submit" class="search-submit button" value="&#xf002" />
            </form>
            </div>
        </div>

    </section>

    <section class="job-list" id="jobslist">

    </section>

    <section class="newsletter">

        <div class="container" id="mc_embed_signup">

            <h1><strong>Subscribe</strong> to our newsletter</h1>

            <form action="https://gmail.us20.list-manage.com/subscribe/post?u=7cc8494a5659836f2fd012ad9&amp;id=5735f9cb18" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>


                <div id="mc_embed_signup_scroll">

                    <input type="email"  placeholder="example@example.com" value="" name="EMAIL" class="required email" id="mce-EMAIL"/>
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

                    <div id="mce-responses" class="clear foot">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_7cc8494a5659836f2fd012ad9_5735f9cb18" tabindex="-1" value="">
                    </div>


                </div>

              

            </form>

        </div>

        <div class="img">
            <img src="images/guy.jpg" alt="">
        </div>

    </section>





    <footer>
        <div class="footer-info">
            <div class="div-one">
                <h6>USEFUL LINKS</h6>
                <a href="index.html">Home</a>
                <a href="about2.html">About us</a>
                <a href="faq2.html">FAQs</a>
                <a href="login/login.php">Log in</a>
            </div>
            <div class="div-one">
                <h6>LEGAL</h6>
                <a href="#">Privacy Policy</a>
                <a href="#">Copyright Information</a>
                <a href="#">License Agreement</a>
            </div>
            <div class="div-one">
                <h6>SOCIAL MEDIA</h6>
                    <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                    <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                    <a href="#"><i class="fab fa-whatsapp"></i> whatsapp</a>
            </div>
            <div class="div-one">
                    <h6>CATEGORIES</h6>
                    <a href="clients.php">Clients Area</a>
                    <a href="writers.php">Writers Arena</a>
            </div>
            <div class="div-one">
                    <h6>GET IN TOUCH</h6>
                    <a href="#">ouraceit@gmail.com</a>
            </div>
        </div>
        <p>&copy; Copyright 2022 ACE IT All Rights Reserved</p>
    </footer>


   

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61d41c74969d3d2539a08014/1foi8ual5';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>
    (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);
    </script>
    
     <script src="search2.js"></script>
    <!-- <script src="main.js"></script> -->
</body>
</html>