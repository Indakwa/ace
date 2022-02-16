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
    <title>Clients Area | ACE IT CONSULTANCY</title>
    <link rel="icon" type="image/x-icon" href="images/logo/favi.png">

    <link rel="stylesheet" href="css/clients.css">

    <script src="https://kit.fontawesome.com/314e866590.js" crossorigin="anonymous"></script>

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
        <h2>Welcome to ACE IT <span>Client Area</span></h2>
        <a id="openChat" href="javascript:void(Tawk_API.toggle())"> Chat With Admin </a>
    </section>

    <section class="cards">
        <div class="card">
            <i class="fas fa-tools"></i>
            <h3>Get your job done</h3>
            <p>
                Creiciendis voluptas Lorem ipsum dolor sit amet contetur asicing elit. Hic quas facilis a ipsam ducimus aspernatur obcae dolor sit amet contetur asicing elit
                minima aper dolor sit am reiendis voluptas et contetur 
            </p>
        </div>

        <div class="card">
            <h4><i class="fas fa-link"></i></h4>
            <h3>Link to your destiny</h3>
            <p>
                Creiciendis voluptas Lorem ipsum dolor sit amet contetur asicing elit. Hic quas facilis a ipsam ducimus aspernatur obcae dolor sit amet contetur asicing elit
                minima aper dolor sit am reie ipsum dolor.
            </p>
        </div>

        <div class="card">
            <h4><i class="fas fa-dollar-sign"></i></h4>
            <h3>Talk of Affordability</h3>
            <p>
                Creiciendis voluptas Lorem ipsum dolor sit amet contetur asicing elit. Hic quas facilis a dolor sit amet  ipsam ducimus aspernatur obcae dolor sit amet contetur asicing elit
                minima aper dolor sit am reie dolor sit amet. 
            </p>
        </div>

    </section>

    <section class="text">
        <h2>Task Us</h2>
        <h4>We are here for you. <span>Yes, You.</span></h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus reiciendis id quam veniam maxime blanditiis aut neque, sequi
             veritatis ab, sed fugit enim fugiat quo adipisci? Earum molestiae adipisci eos vel soluta delectus possimus totam ipsam ipsa 
             voluptatibus quae quia molestias fugit alias inventore dicta illo, expedita id? Modi ad enim tempore repellendus perferendis
              fugit aliquam provident repudiandae, odio animi.
        </p>
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


    <script src="main.js"></script>
    
</body>
</html>