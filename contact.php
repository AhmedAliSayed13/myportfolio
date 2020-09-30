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
                <li class="nav-item" data-target="home">
                    
                    <a class="nav-link" href="index.php" >
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
                <li class="nav-item " data-target="Contact">
                   
                    <a class="nav-link active" href="contact.php">  <i class="far fa-envelope"></i>  Contact Me</a>
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
    


    <section class="contact wow slideInLeft" id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <hr class="break">
            <div class="row">
                <div class="col-md-6 offset-md-3 col-xs-12">
                    <form name="myform" action="/" method="GET" id="form">
                        <div id="errorname"></div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div id="errormail"></div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your email">
                        </div>
                        <div id="errormessage"></div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="4" placeholder="your message" maxlength="200"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block text-center">Send</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="contact-info">
                <h2>Be In Touch</h2>
                <hr class="break">
                <div class="row">
                    <div class="col-md-4 col-xs-12 text-center">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <h5 class="py-1">Imbaba - Giza - Egypt</h5>



                    </div>
                    <div class="col-md-4 col-xs-12 text-center">
                        <i class="fa fa-phone fa-2x"></i>
                        <h5 class="py-1">0111 291 2233</h5>



                    </div>
                    <div class="col-md-4 col-xs-12 text-center">
                        <i class="fa fa-envelope fa-2x"></i>
                        <h5 class="py-1"> ahmedalisayed13@gmail.com</h5>



                    </div>
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
            el: "#contact",
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
