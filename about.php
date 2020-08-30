<!DOCTYPE html>
<html>

    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=" portfolio web developer front end">
        <meta name="keywords" content="portfolio web developer front end">
        <meta name="author" content="Amal_Elsa3ed">
        <title>My Portfolio</title>
        <link rel='stylesheet' href='css/bootstrap.css' />
        <link rel='stylesheet' href='css/animate.css'>
        <link rel='stylesheet' href='css/all.css' />
        <link rel='stylesheet' href='css/nor.css' />
        <link rel='stylesheet' href='css/fixed.css' />
        <link rel='stylesheet' href="fontawesome/css/all.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500;600;700&display=swap" rel="stylesheet">

    </head>
<body>
<nav class="navbar navbar-expand-md  fixed-left">
        <a class="navbar-brand" href="index.html">
            <img src="imgs/myphoto.jpg" width="100%" height="auto" class="image1">
            <img src="imgs/myphoto2.jpg" width="100%" height="auto" class="image2">
            <h4 class="myname text-center">Ahmed Ali</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>

        </button>

        <div class=" navbar-collapse collapse hide" id="navbarsExampleDefault">
            <ul class="navbar-nav lists" id="lists">
                <li class="nav-item" data-target="home">
                    
                    <a class="nav-link" href="index.php" >
                        <i class="fas fa-home"></i>  Home</a>
                </li>
                <li class="nav-item active"  data-target="about">
                    <a class="nav-link active"  href="about.php"> <i class="fas fa-user"></i>  About Me</a>
                </li>
                <li class="nav-item" data-target="resume">
                   
                    <a class="nav-link" href="resume.php">  <i class="fas fa-id-badge"></i>  Resume</a>
                </li>
                <li class="nav-item" data-target="Portfolio">
                   
                    <a class="nav-link" href="portfolio.php">  <i class="fas fa-briefcase"></i>  Portfolio</a>
                </li>
                <li class="nav-item" data-target="Contact">
                   
                    <a class="nav-link" href="contact.php">  <i class="far fa-envelope"></i>  Contact Me</a>
                </li>

            </ul>
            <ul class="navbar-nav list-inline">
                <li class="list-inline-item">
                    <a class="nav-link d-inline" data-class="fixed-left" href="https://www.facebook.com/Amal.elsa3ed"
                        style="color: #4267B2;">
                        <i class="fab fa-facebook d-inline " style="color: var(--pinkC);font-size: 20px"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="nav-link d-inline" data-class="fixed-top" href="https://twitter.com/Amal_Elsa3ed_"
                        style="color: #1DA1F2;">
                        <i class="fab fa-twitter d-inline fa-1x" style="color: var(--pinkC);font-size: 20px"></i>

                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="nav-link d-inline" data-class="fixed-top" href="https://twitter.com/Amal_Elsa3ed_"
                       style="color: #1DA1F2;">
                        <i class="fab fa-linkedin d-inline fa-1x" style="color: var(--pinkC);font-size: 20px"></i>

                    </a>
                </li>

            </ul>
            <div class="copy-right d-none d-sm-none d-md-block">
                <span>2020 © <a href="#"><span class="name"> Ahmed Ali</span></a>
                    All Right Reserved.</span>

            </div>




        </div>
    </nav>
    
   
 
    <section id="about" class="about wow swing" >
        <div class="container">
            <h2>About Me</h2>
            <hr class="break">
            <div class="row">

                <div class="col-md-6 col-sm-12 py-4">
                    <h3>Full Stack Developer</h3>

                    <p>I'm Ahmed Ali, I'm Web developer, I work with "laravel" framework and Wordpress I have previous work and I can easily work in a team..</p>


                </div>
                <div class="col-md-6 col-sm-12 py-4">
                    <h3>Personal Information</h3>
                    <ul>
                        <li><span class="title">Name:</span><span class="value"> Ahmed Ali</span></li>
                        <li><span class="title">Age:</span><span class="value"> 25 Years</span></li>
                        <li><span class="title">Address:</span><span class="value">  17 Mohamed Mostafa Street, Imbaba, Giza</span></li>
                        <li><span class="title">Email:</span><span class="value">AhmedAliSayed13@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <h2>Services</h2>
            <hr class="break">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                    <i class="fas fa-laptop-code fa-2x"></i>
                    <h4 class="py-2">Web Development</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                    <i class="fas fa-mobile-alt fa-2x"></i>
                    <h4 class="py-2">Responsive Design</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                    <i class="fas fa-cash-register fa-2x"></i>
                    <h4 class="py-2">Backend Developer</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-2">

                    <i class="fas fa-eye fa-2x"></i>
                    <h4 class="py-2">Frontend Developer</h4>
                </div>
            </div>
        </div>
    </section>

    
<script src="js/jquery-3.4.1.min.js"></script>
<script src='js/bootstrap.min.js'></script>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/main.js"></script>
<script src="js/three.r95.min.js"></script>
<script src="js/vanta.net.min.js"></script>

<script src="js/wow.js"></script>
<script>new WOW().init();





</script>


    <script>

        VANTA.NET({
            el: "#about",
            mouseControls: true,
            touchControls: true,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xf00052,
            backgroundColor: 0xd0220,
            points: 12.00,
            maxDistance: 22.00,
            spacing: 19.00
        })




    </script>


</body>

</html>
