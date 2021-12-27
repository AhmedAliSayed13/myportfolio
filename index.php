<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="imgs/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=" Ahmed Ali Portfolio">
        <meta name="keywords" content="Ahmed Ali Portfolio">
        <meta name="author" content="Ahmed_Ali">
        <title>Ahmed Ali Protofolio</title>
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
        <a class="navbar-brand" href="#">
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
                <li class="nav-item " data-target="home">
                    
                    <a class="nav-link active" href="index.php" >
                        <i class="fas fa-home"></i>  Home</a>
                </li>
                <li class="nav-item" data-target="about">
                    
                    <a class="nav-link" href="about.php"> <i class="fas fa-user"></i>  About Me</a>
                </li>
                <li class="nav-item" data-target="skills">

                    <a class="nav-link" href="skills.php">  <i class="fas fa-list"></i>  Skills</a>
                </li>
                <li class="nav-item" data-target="resume">
                   
                    <a class="nav-link" href="experience.php">  <i class="fas fa-id-badge"></i>  Experience</a>
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
                    <a class="nav-link d-inline" data-class="fixed-left" href="https://www.facebook.com/profile.php?id=100004327276319"
                       style="color: #4267B2;">
                        <i class="fab fa-facebook d-inline " style="color: var(--pinkC);font-size: 20px"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="nav-link d-inline" data-class="fixed-top" href="https://twitter.com/AhmedA1o1"
                       style="color: #1DA1F2;">
                        <i class="fab fa-twitter d-inline fa-1x" style="color: var(--pinkC);font-size: 20px"></i>

                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="nav-link d-inline" data-class="fixed-top" href="https://www.linkedin.com/in/ahmed-ali-a267b2172/"
                       style="color: #1DA1F2;">
                        <i class="fab fa-linkedin d-inline fa-1x" style="color: var(--pinkC);font-size: 20px"></i>

                    </a>
                </li>

            </ul>
            <div class="cv-div d-none d-sm-none d-md-block">
                <span><a href="Ahmed-Ali-CV.pdf"><i class="fas fa-download"></i> CV</a></span>
            </div>
            <div class="copy-right d-none d-sm-none d-md-block">
                <span>2020 © <a href="#"><span class="name"> Ahmed Ali</span></a>
                    All Right Reserved.</span>

            </div>




        </div>
    </nav>
    
    

    <section id="home" class="home wow fadeIn ">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="overlay"></div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block " src="imgs/b3.jpg" alt="First slide" >
                    <div class="carousel-caption " style="margin: 200px auto;">
                        <h1>Ahmed Ali Sayed</h1>
                        <h4 id="typer" data-text="Full Stack Developer"></h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block " src="imgs/b2.jpg" alt="Second slide" >
                    <div class="carousel-caption" style="margin: 200px auto;">
                        <h1>Ahmed Ali Sayed</h1>
                        <h4 id="typer2" data-text=" Full Stack Developer"></h4>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </section>
    <footer class="footer">
    <div class="container">
        <div class="copy-right d-block d-md-none">
                <span>2020 © <a href="#"><span class="name"> Ahmed Ali</span></a>
                    All Right Reserved.</span>

        </div>
    </div>


</footer>

    
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
 





</body>

</html>
