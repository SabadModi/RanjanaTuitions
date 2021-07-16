<?php
include("../path.php");
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/controllers/register.php");
// dd($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . '/assets/css/main.css' ?>">
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" name="register-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name icons"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Name" class="input-fields" required="Please enter your name" value="<?php echo $username; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email icons"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" class="input-fields" required="Please enter your email" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock icons"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" class="input-fields" required="Please enter your Password" value="<?php echo $password; ?>"
                                data-parsley-minlength="5">
                            </div>
                            <div class="form-group">
                                <label for="passwordConf"><i class="zmdi zmdi-lock-outline icons"></i></label>
                                <input type="password" name="passwordConf" id="passwordConf" placeholder="Repeat your password" class="input-fields" required="Please enter your Password" value="<?php echo $passwordConf; ?>"
                                data-parsley-minlength="5">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" class="input-fields" />
                                <!-- <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label> -->
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.png" alt="sing up image"></figure>
                        <a href="<?php echo BASE_URL . "/login/login.php" ?>" class="signup-image-link image-link">I am already a student</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Parsley -->
    <script src="<?php echo BASE_URL . "/parsley/dist/parsley.min.js" ?>"></script>

    <script src="<?php echo BASE_URL . '/assets/js/register.js'; ?>"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>