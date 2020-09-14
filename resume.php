    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=" portfolio web developer">
        <meta name="keywords" content="portfolio web developer">
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
                <li class="nav-item" data-target="about">
                    
                    <a class="nav-link" href="about.php"> <i class="fas fa-user"></i>  About Me</a>
                </li>
                <li class="nav-item " data-target="resume">
                   
                    <a class="nav-link active" href="resume.php">  <i class="fas fa-id-badge"></i>  Resume</a>
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
    <section class="resume wow slideInDown" id="resume">
        <div class="container">
            <h2>My Resume</h2>
            <hr class="break">
            <div class="row">
                <div class="col-md-6 col-sm-12 py-4">
                    <h3>Experience</h3>
                    <ul class="experience">
                        <li class="py-2">
                            <span><i class="fa fa-check"></i>  From November 2018 - Now </span>
                            <p>Worked  as  a web developer (Full Stack) at  PK company for Programming
                                (6 October- Giza).</p>
                            <span class="d-block">Technologies :</span>
                            <ul class="py-1 Technologies">
                                <li>Laravel</li> |
                                <li>WordPress</li> |
                                <li>PHP</li> |
                                <li>Html</li> |
                                <li>Css</li> |
                                <li>Sasa</li> |
                                <li>Vue js</li> |
                                <li>Javascript/Jquery</li> |
                                <li>Bootstrap</li>|
                                <li>GIT</li> |
                                <li>Database(Mysql/sql)</li> |
                            </ul>
                        </li>
                        <li class="py-3">
                            <span><i class="fa fa-check"></i> From  June 2018 - September 2018</span>
                            <p>Training as a Web Developer at EELU Company (Assuit- Egypt). </p>
                            <span class="d-block">Technologies :</span>
                            <ul class="py-1 Technologies">
                                <li>Laravel</li> |
                                <li>Html</li> |
                                <li>Css</li> |
                                <li>Jquery</li> |
                                <li>Bootstrap</li> |
                                <li>Java Script</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 py-4">
                    <h3>Education</h3>
                    <ul class="education">
                        <li class="py-2">
                            <span><i class="fa fa-check"></i> From 2014 - 2018 </span>
                            <p>
                                BSC of Computer Science  - Faculty of Computer and Information ,<br> Assuit University<br>
                                and  Information Technology (IT) Department.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="skills">
                <h2>My Skills</h2>
                <hr class="break">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Laravel </div>
                       </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Wordpress</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">PHP</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Vue js</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">JQuery</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">Java Script</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">Git</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Html</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Css</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">Bootstrap</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Json</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Database( Mysql / SQL)</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">SASS</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">PhotoShop CS6</div>
                        </div>
                    </div>
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
            el: "#resume",
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
        });




    </script>


    </body>

    </html>
