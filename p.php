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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500;600;700&display=swap" rel="stylesheet">
        <style>
            * {
                box-sizing: border-box;
            }

            html,
            body {
                position: relative;
                height: 100%;
            }

            .filter-links {
                margin: 0;
                padding: 0;
                list-style: none;
                display: block;
                width: 100%;
                height:auto;
                overflow: hidden;
                background: var(--pinkC);
                border-bottom:1px solid var(--pinkC);
            }

            .filter-links li {
                display: inline;
                float: left;
            }

            .filter-links li a {
                display: block;
                color: white;
                padding: 1em 2em;
                text-decoration: none;
            }

            .filter-links li a:hover {
                color: #202226;
            }

            .filter-sections {
                width: 100%;
                display: block;
                overflow: hidden;
            }

            .filter-sections div {
                opacity: 0;
                display: none;
                float: left;
                transition: all 500s ease;
            }

            .view {
                display: block !important;
                opacity: 1 !important;
                transform: scale(1) rotate(0deg);
                border-radius:4px;
                animation: selected 300ms 1 ease-in-out;
            }

            @keyframes selected {
                0% {
                    border-radius:100%;
                    transform: scale(0) rotate(-180deg);
                }
            }


            /*scroll style*/
            .style-2::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3);
                border-radius: 10px;
                background-color: #F5F5F5;
            }

            .style-2::-webkit-scrollbar
            {
                width: 8px;
                background-color: #F5F5F5;
            }

            .style-2::-webkit-scrollbar-thumb
            {
                border-radius: 5px;
                -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,.3);
                background-color: var(--pinkC);
            }

            /*hover style*/
            .playful figure {
                cursor: pointer;
                float: left;
                margin: 10px 1%;
                max-height: 225px;
                max-width: 480px;
                overflow: hidden;
                position: relative;
                text-align: center;
                width: 100%;
            }

            .playful figure figcaption,
            .playful figure figcaption > a {
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
            }

            .playful figure figcaption {
                backface-visibility: hidden;
                color: #fff;
                font-size: 1.25em;
                text-transform: uppercase;
            }

            .playful figure h4,
            .playful figure p {
                margin: 0;
            }

            .playful figure h4 {
                color: #fff;
                font-size: 20px;
                font-weight: 800;
                word-spacing: -0.15em;
            }

            .playful figure p {
                font-size: 18px;
                font-weight: 100;
                color: #fff;
                letter-spacing: 1px;
            }

            .playful figure h2,
            .playful figure p {
                margin: 0;
            }

            .playful figure.softeffect {
                background: none repeat scroll 0 0 #000000;
            }

            .playful figure.softeffect img {
                transition: opacity .35s ease 0s, transform .35s ease 0s;
            }

            figure.softeffect:hover img {
                opacity: 0.35;
                transform: scale(1);
            }

            .playful figure.softeffect figcaption:before,
            .playful figure.softeffect p {
                opacity: 0;
                transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
            }

            .playful figure.softeffect h4 {
                opacity: 0;
                padding: 20% 0 20px;
                transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
            }

            .playful figure.softeffect p {
                margin: 0 auto;
                max-width: 200px;
                transform: scale(1.5);
            }

            .playful figure.softeffect:hover figcaption:before,
            .playful figure.softeffect:hover p {
                opacity: 1;
                transform: scale(1);
            }

            .playful figure.softeffect:hover h4 {
                opacity: 1;
                transform: scale(1);
            }

            .playful figure img {
                display: block;
                max-width: 100%;
                min-height: 100%;
                opacity: 1;
                position: relative;
            }

            figure.softeffect {
                background: none repeat scroll 0 0 transparent;
            }

            figure.softeffect:hover {
                background: none repeat scroll 0 0 #000000;
                /* Cyan: #00aeef */
            }

            figure.softeffect img {
                transform: scale(1);
                transition: opacity .35s ease 0s, transform .35s ease 0s;
            }

            figure.softeffect:hover img {
                opacity: 0.40;
                transform: scale(1.15);
                filter: blur(2px);
            }
            /*model style*/
            .modal-dialog{
                max-width: 100%!important;
                margin: 0px!important;
            }
            .modal-header .close{
                margin: 0px!important;
            }
            .modal-title{
                margin: auto!important;
            }

        </style>
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
                <li class="nav-item " data-target="home">
                    
                    <a class="nav-link" href="index.php" >
                        <i class="fas fa-home"></i>  Home</a>
                </li>
                <li class="nav-item" data-target="about">
                    
                    <a class="nav-link" href="about.php"> <i class="fas fa-user"></i>  About Me</a>
                </li>
                <li class="nav-item" data-target="resume">
                   
                    <a class="nav-link" href="resume.php">  <i class="fas fa-id-badge"></i>  Resume</a>
                </li>

                <li class="nav-item " data-target="Portfolio">
                   
                    <a class="nav-link active" href="portfolio.php">  <i class="fas fa-briefcase"></i>  Portfolio</a>
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
    <section class="portfolio wow swing" id="portfolio">

        <div class="container">
            <h2>My Projects</h2>
            <hr class="break">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter-links">
                        <li><a href="#">All</a></li>
                        <li><a href="#">Javascript</a></li>
                        <li><a href="#">Html</a></li>
                        <li><a href="#">Css</a></li>
                        <li><a href="#">Php</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-2 filter-sections">
                <div class="col-lg-4 mt-4 float-left col-md-12 col-xs-12 item-filter playful scrollbar style-2 css">
                    <figure class="softeffect">
                        <img src="imgs/1.png" class="img-responsive img-item-filter" alt="Canal Park - Duluth"  />
                        <figcaption>
                            <h4><a class="fancybox"  href="imgs/1.png"><i class="fas fa-eye"></i></a></h4>
                            <p  data-toggle="modal" data-target="#exampleModal">More Details</p>
                        </figcaption>
                    </figure>

                </div>


                <div class="col-lg-4 mt-4 float-left col-md-12 col-xs-12 item-filter scrollbar style-2 css">
                    <img src="imgs/1.png" class="img-item-filter" >
                </div>
                <div class="col-lg-4 mt-4 float-left col-md-12 col-xs-12 item-filter scrollbar style-2 html">
                    <img src="imgs/1.png" class="img-item-filter" >
                </div>
                <div class="col-lg-4 mt-4 float-left col-md-12 col-xs-12 item-filter scrollbar style-2  css">
                    <img src="imgs/1.png" class="img-item-filter" >
                </div>
                <div class="col-lg-4 mt-4 float-left col-md-12 col-xs-12 item-filter scrollbar style-2 html">
                    <img src="imgs/1.png" class="img-item-filter" >
                </div>
                <div class="col-lg-4 mt-4 float-left col-md-12 col-xs-12 item-filter scrollbar style-2 css">
                    <img src="imgs/1.png" class="img-item-filter" >
                </div>
            </div>

        </div>




    </section>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


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
        el: "#portfolio",
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


    /*  Javascript filter
    ---------------------------------*/
    // animate divs on start
    var items = document.querySelectorAll('.filter-sections div');
    animate(items);

    // filter on click
    each('.filter-links li a', function(el) {
        el.addEventListener('click', function(e) {
            e.preventDefault();
            filterLinks(el);
        });
    });

    // filter links functions
    function filterLinks(element) {
        // get text
        var el = element.textContent,
            // convert to lowercase
            linksTolowerCase = el.toLowerCase();
        // if all remove all elements
        if (el === 'All') {
            // first show all view class
            each('.view', function(e) {
                e.classList.remove('view');
            });
            // no show init animation
            animate(items);
        } else {
            // if not click all remove all elements
            each('.view', function(e) {
                e.classList.remove('view');
            });
        }
        // show animation for current elements
        animate(document.querySelectorAll('.' + linksTolowerCase));
    };
    // forech arrays
    function each(el, callback) {
        var allDivs = document.querySelectorAll(el),
            alltoArr = Array.prototype.slice.call(allDivs);
        Array.prototype.forEach.call(alltoArr, function(selector, index) {
            if (callback) return callback(selector);
        });
    };
    // animate function
    function animate(item) {
        (function show(counter) {
            setTimeout(function() {
                item[counter].classList.add('view');
                counter++;
                if (counter < item.length) show(counter);
            },50);
        })(0);
    };



    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
    });
</script>


    </body>

    </html>
