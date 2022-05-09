    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <link rel="shortcut icon" href="../imgs/favicon.png">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=" Ahmed Ali Portfolio">
        <meta name="keywords" content="Ahmed Ali Portfolio">
        <meta name="author" content="Ahmed_Ali">
        <title>Ahmed Ali Protofolio</title>
        <link rel='stylesheet' href='../css/bootstrap.css' />
        <link rel='stylesheet' href='../css/animate.css'>
        <link rel='stylesheet' href='../css/all.css' />
        <link rel='stylesheet' href='../css/nor.css' />
        <link rel='stylesheet' href='../css/fixed.css' />
        <link rel='stylesheet' href="../fontawesome/css/all.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500;600;700&display=swap" rel="stylesheet">

    </head>
<body>



    <nav class="navbar navbar-expand-md  fixed-left">
        <a class="navbar-brand" href="#">
            <img src="../../imgs/myphoto.jpg" width="100%" height="auto" class="image1">
            <img src="../../imgs/myphoto2.jpg" width="100%" height="auto" class="image2">
            <h4 class="myname text-center">Ahmed Ali</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>

        </button>

        <div class=" navbar-collapse collapse hide" id="navbarsExampleDefault">
            <ul class="navbar-nav lists" id="lists">
                <li class="nav-item " data-target="home">

                    <a class="nav-link" href="../index.php" >
                        <i class="fas fa-home"></i>  Home</a>
                </li>
                <li class="nav-item" data-target="about">

                    <a class="nav-link" href="<?php echo $path; ?>../about.php"> <i class="fas fa-user"></i>  About Me</a>
                </li>
                <li class="nav-item" data-target="skills">

                    <a class="nav-link" href="../skills.php">  <i class="fas fa-list"></i>  Skills</a>
                </li>
                <li class="nav-item" data-target="resume">

                    <a class="nav-link" href="../experience.php">  <i class="fas fa-id-badge"></i>  Experience</a>
                </li>

                <?php include 'nav.php';?>
                <li class="nav-item" data-target="Contact">

                    <a class="nav-link" href="../contact.php">  <i class="far fa-envelope"></i>  Contact Me</a>
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
                <span><a href="Ahmed-Ali-CV.pdf" target="_blank"><i class="fas fa-download"></i> CV</a></span>
            </div>
            <div class="copy-right d-none d-sm-none d-md-block">
                <span>2020 © <a href="#"><span class="name"> Ahmed Ali</span></a>
                    All Right Reserved.</span>
            </div>
        </div>
    </nav>
    <section class="portfolio wow swing" id="portfolio">
        <div class="container">
            <h2>Almaali</h2>
            <hr class="break">

            <div class="row mt-2 filter-sections">

            <?php for ($i = 1; $i <= 17; $i++) {?>
                    <div class="col-lg-4 mt-4 float-left col-md-12 col-xs-12 item-filter playful scrollbar style-2 almaali">
                        <figure class="softeffect">
                            <img src="../../imgs/portfolio/almaali/<?php echo $i; ?>.png" class="img-responsive lazy img-item-filter"   />
                            <figcaption>
                                <h4><a data-fancybox="gallery-almaali"  href="../../imgs/portfolio/almaali/<?php echo $i; ?>.png"><i class="fas fa-eye"></i></a></h4>
                                <p  data-toggle="modal" data-target="#Modal_almaali_<?php echo $i; ?>">More Details</p>
                            </figcaption>
                        </figure>
                    </div>
                <?php }?>


            </div>
        </div>
    </section>

    <!-- Button trigger modal -->

    <!-- Modal -->


    <?php for ($i = 1; $i <= 17; $i++) {?>
        <div class="modal fade" id="Modal_almaali_<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="Modal_almaali_<?php echo $i; ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Almaali Website</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="item-filter-pop-up playful scrollbar style-2">
                                        <img src="../../imgs/portfolio/almaali/<?php echo $i; ?>.png" class="img-responsive lazy img-item-filter"  />
                                    </div>
                                </div>
                                <div class="col-lg-6 project-details">
                                    <header> Technical Skills</header>
                                    <ul class="ul-project-describe">
                                        <li>Responsive WebSite with flex box and media Query..</li>
                                        <li>Using Laravel Framework.</li>
                                        <li>Using Vue JS.</li>
                                        <li>Using Laravel Api.</li>
                                        <li>Using Mysql.</li>
                                        <li>Using HTML,CSS,Boostrap.</li>
                                        <li>Using Jquery,Javascript.</li>
                                        <li>Using Git.</li>
                                    </ul>
                                    <header>Project Informations</header>
                                    <ul class="ul-project-describe">
                                        <li><span class="project-info-head">Client : </span>Almaali Medical Clinic</li>
                                        <li><span class="project-info-head">Service : </span>Web Development</li>
                                    </ul>
                                    <a href="http://167.172.191.180/" class="btn btn-info"><i class="fa fa-globe"></i> WebSite</a>
                                    <a class="btn btn-info" href="Ahmed-Ali-CV.pdf" target="_blank"><i class="fas fa-eye"></i> Ahmed Ali CV</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span> Close
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

<script src='../js/bootstrap.min.js'></script>
<script src="../js/html5shiv.min.js"></script>
<script src="../js/respond.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/three.r95.min.js"></script>
<script src="../js/vanta.net.min.js"></script>
<script src="../js/jquery.lazy.min.js"></script>

<script src="../js/wow.js"></script>
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
        });


        $('filter-links li a').click(function () {
            alert('run');
        });





        filterSelection("item-filter");
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("item-filter");
            if (c == "all") c = "";
            // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "view");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "view");
            }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current control button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("filter-link");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }


        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect	: 'none',
                closeEffect	: 'none'
            });
        });

        $(function() {
            $('.lazy').lazy();
        });
    </script>
</body>
</html>
