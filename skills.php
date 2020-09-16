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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@master/devicon.min.css">

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
                <li class="nav-item" data-target="skills">

                    <a class="nav-link active" href="skills.php">  <i class="fas fa-list"></i>  Skills</a>
                </li>
                <li class="nav-item " data-target="resume">
                   
                    <a class="nav-link " href="experience.php">  <i class="fas fa-id-badge"></i>  Experience</a>
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
            <div class="skills">
                <h2>My Skills</h2>
                <hr class="break">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-laravel-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 89 </span><span>%</span></h2>
                                <p class="item-title">Laravel</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-wordpress-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 92 </span><span>%</span></h2>
                                <p class="item-title">Wordpress</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-php-plain font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 90 </span><span>%</span></h2>
                                <p class="item-title">Php</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-vuejs-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 70 </span><span>%</span></h2>
                                <p class="item-title">Vue</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-html5-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 95 </span><span>%</span></h2>
                                <p class="item-title">HTML5</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-bootstrap-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 90 </span><span>%</span></h2>
                                <p class="item-title">Bootstrap</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-css3-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 92 </span><span>%</span></h2>
                                <p class="item-title">CSS3</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-sass-original colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 80 </span><span>%</span></h2>
                                <p class="item-title">Sass</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-git-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 95 </span><span>%</span></h2>
                                <p class="item-title">GIT</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-heroku-original-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 95 </span><span>%</span></h2>
                                <p class="item-title">heroku</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-javascript-plain colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 87 </span><span>%</span></h2>
                                <p class="item-title">Javascript</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-jquery-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 87 </span><span>%</span></h2>
                                <p class="item-title">Jquery</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-mysql-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 90 </span><span>%</span></h2>
                                <p class="item-title">Mysql</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-csharp-plain-wordmark colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 65 </span><span>%</span></h2>
                                <p class="item-title">C#</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-cplusplus-plain colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 70 </span><span>%</span></h2>
                                <p class="item-title">C++</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <i class="devicon-photoshop-plain colored font-icon"></i>
                                <h2 class="item-precentage" ><span class="counter"> 65 </span><span>%</span></h2>
                                <p class="item-title">Photoshop</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <img src="imgs/skills/json.png">
                                <h2 class="item-precentage" ><span class="counter"> 65 </span><span>%</span></h2>
                                <p class="item-title">Json</p>
                            </div>
                        </div>
                        <div class="col-lg-3 float-left text-center ">
                            <div class="skill-item">
                                <img src="imgs/skills/ajax.png">
                                <h2 class="item-precentage" ><span class="counter"> 65 </span><span>%</span></h2>
                                <p class="item-title">ajax</p>
                            </div>
                        </div>

                    </div>


<!--                    <div class="col-md-6 col-xs-12">-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Laravel </div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Wordpress</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">PHP</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Vue js</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">JQuery</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">Java Script</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">Git</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6 col-xs-12">-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Html</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Css</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">Bootstrap</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Json</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Database( Mysql / SQL)</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">SASS</div>-->
<!--                        </div>-->
<!--                        <div class="progress">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">PhotoShop CS6</div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>

    </section>

    
<script src="js/jquery-3.4.1.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
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


        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });

    </script>


    </body>

    </html>
