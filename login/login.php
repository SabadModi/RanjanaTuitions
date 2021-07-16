<?php
include("../path.php");
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/controllers/login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>

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

    <?php
    // include(ROOT_PATH . '/app/helpers/formErrors.php'); 
    ?>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.png" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        
                        <!-- Form -->
                        <form method="POST" class="register-form" id="login-form" name="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name icons"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Name" class="input-fields" value="<?php echo $username; ?>" required="Please fill in your Username" data-required-message="Please insert your name">
                            </div>

                            <p class="error-msg"></p>

                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock icons"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" class="input-fields" value="<?php echo $password; ?>" required="Please fill in your Password"
                                data-parsley-minlength="5" >
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term input-fields"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signin-submit" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>

                        <!-- // Form -->

                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    
    <!-- JQuery Validation -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> -->

    <!-- Parsley -->
    <script src="<?php echo BASE_URL . "/parsley/dist/parsley.min.js" ?>"></script>

    <script src="<?php echo BASE_URL . '/assets/js/login.js'; ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>