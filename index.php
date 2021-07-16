<?php
include("path.php");
include(ROOT_PATH . "/app/database/db.php");

// session_destroy();
// dd($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ranjana Aunty Website</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <!-- Intro -->

    <div class="intro">
        <div class="intro-details">

            <h1 class="vertical intro-heading"><em>Welcome to<br>Ranjana's Tutions</em></h1>

            <img src="assets/svg/study.svg" class="intro-image">
        </div>
    </div>

    <!-- // Intro -->

    <!-- Main Content -->

    <div class="main-content">
        <div class="about-me notAnimated animateBlock leftAlign left tutions">
            <!-- notAnimated animateBlock leftAlign left -->
            <div class="content about">

                <h1>About Me</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum pellentesque pulvinar purus, vitae sollicitudin arcu consequat quis.
                    Nam a mauris non augue tempus tempus sed ut velit.
                    In viverra vel lectus eu aliquam.
                    Nulla scelerisque commodo egestas.
                    <br>
                    Integer interdum neque at libero porta, vel fermentum augue tincidunt.
                    Cras id gravida est, euismod consectetur orci.
                    Aenean ut eros nibh.
                    Sed eu tincidunt magna, in fringilla nisl.
                    Sed rhoncus fringilla leo in ultrices.
                    Maecenas ultricies ante fringilla posuere commodo.
                    Quisque sed ex posuere, viverra sapien vehicula, pharetra orci.
                    Vivamus purus lorem, aliquet nec felis quis, consectetur scelerisque diam.
                </p>
            </div>
        </div>

        <br><br><br>

        <div class="about-tutions">
            <div style="padding-top:350px;">
                <div class="content notAnimated animateBlock rightAlign right">

                    <h1>About Me</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum pellentesque pulvinar purus, vitae sollicitudin arcu consequat quis.
                        Nam a mauris non augue tempus tempus sed ut velit.
                        In viverra vel lectus eu aliquam.
                        Nulla scelerisque commodo egestas.
                        <br>
                        Integer interdum neque at libero porta, vel fermentum augue tincidunt.
                        Cras id gravida est, euismod consectetur orci.
                        Aenean ut eros nibh.
                        Sed eu tincidunt magna, in fringilla nisl.
                        Sed rhoncus fringilla leo in ultrices.
                        Maecenas ultricies ante fringilla posuere commodo.
                        Quisque sed ex posuere, viverra sapien vehicula, pharetra orci.
                        Vivamus purus lorem, aliquet nec felis quis, consectetur scelerisque diam.
                    </p>
                </div>
                <img src="assets/svg/svg1.svg" class="tution-img">
            </div>

        </div>

    </div>

    <!-- // Main Content -->

    <!-- Subjects Taught -->

    <div class="subjects">

        <div class="main-subject-header">
            <h1>Subjects I Teach</h1>
        </div>

        <div class="subject-wrapper">

            <div class="subject-div">
                <img src="assets/svg/math.svg" class="subject-img maths">
                <br>
                <h1 class="subject-header">Mathematics</h1>
            </div>

            <div class="subject-div">
                <img src="assets/svg/physics.svg" class="subject-img physics">
                <br>
                <h1 class="subject-header">Physics</h1>
            </div>

            <div class="subject-div">
                <img src="assets/svg/chemistry.svg" class="subject-img chemistry">
                <br>
                <h1 class="subject-header">Chemistry</h1>
            </div>

        </div>
    </div>

    <!-- //Subjects Taught -->

    <?php include(ROOT_PATH . "/app/includes/testimonials.php") ?>

    <br><br><br><br><br>

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <script>
        document.querySelector('.content').onmousemove = (e) => {

            const x = e.pageX - e.target.offsetLeft
            const y = e.pageY - e.target.offsetTop

            e.target.style.setProperty('--x', `${ x }px`)
            e.target.style.setProperty('--y', `${ y }px`)
        }

        $(function() {
            var $elements = $('.animateBlock.notAnimated'); //contains elements of nonAnimated class
            var $window = $(window);
            $window.on('scroll', function(e) {
                $elements.each(function(i, elem) { //loop through each element
                    if ($(this).hasClass('animated')) // check if already animated
                        return;
                    animateMe($(this));
                });
            });
        });

        function animateMe(elem) {
            var winTop = $(window).scrollTop(); // calculate distance from top of window
            var winBottom = winTop + $(window).height();
            var elemTop = $(elem).offset().top; // element distance from top of page
            var elemBottom = elemTop + $(elem).height();
            if ((elemBottom <= winBottom) && (elemTop >= winTop)) {
                // exchange classes if element visible
                $(elem).removeClass('notAnimated').addClass('animated');
            }
        }
    </script>
</body>

</html>