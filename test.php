<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            overflow-y: scroll;
        }

        body {
            background: #f0f0f0;
            color: #000;
        }

        img {
            border: 0;
            max-width: 100%;
        }

        #wrapper {
            display: block;
            width: 750px;
            margin: 0 auto;
            padding-top: 30px;
            padding-bottom: 45px;
        }

        .rightAlign {
            float: right;
        }

        .leftAlign {
            float: left;
        }

        .animateBlock {
            margin-top: 20px;
            display: inline-block;
            opacity: 0;
            filter: alpha(opacity=0);
            position: relative;
            -webkit-transition: all .55s ease-in;
            -moz-transition: all .55s ease-in;
            -ms-transition: all .55s ease-in;
            -o-transition: all .55s ease-in;
            transition: all .55s ease-in;
        }

        .animateBlock.left {
            left: -20%;
        }

        .animateBlock.right {
            right: -20%;
        }

        .left.animated {
            left: 0%;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .right.animated {
            right: 0%;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        #Txt {
            width: 300px;
            padding-left: 15px;
            padding-top: 12px;
            text-align: center;
        }

        .clearfix:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        .clearfix {
            display: inline-block;
        }

        html[xmlns] .clearfix {
            display: block;
        }

        * html .clearfix {
            height: 1%;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <img src="http://placehold.it/750x300" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed faucibus, augue ac maximus auctor, dui elit ornare libero,
            at maximus sem mauris lacinia eros. Pellentesque turpis dolor,
            aliquet eu eros vitae, congue volutpat orci. Nullam vel vulputate
            odio. Sed vestibulum felis vel convallis consequat.
            Cras a lacinia ante.
        </p>
        <div class="notAnimated animateBlock leftAlign left">
            <img src="http://placehold.it/382x152" alt="apple devices">
        </div>
        <div id="Txt" class="notAnimated animateBlock rightAlign right">
            <h3>Lorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                faucibus, augue ac maximus auctor, dui elit ornare libero, at maximus
                sem mauris lacinia eros. Pellentesque turpis dolor, aliquet eu eros
                vitae, congue volutpat orci. Nullam vel vulputate
                odio. Sed vestibulum felis vel convallis consequat. Cras a lacinia
                ante.
            </p>
        </div>
        <div class="notAnimated animateBlock right">
            <img src="http://placehold.it/750x400" alt="white iphone flat ui">
        </div>
    </div>
    <!-- wrapper -->
    <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
    <script>
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