<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . '/assets/css/header.css' ?>">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<div id="header">
    <div class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container">
                <a class="navbar-brand" href="<?php echo BASE_URL . '/index.php'; ?>">
                    <img src="<?php echo BASE_URL . "/assets/svg/logo.png"; ?>" height="100px" width="200px">
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navcol-1">

                    <a class="btn btn-light action-button" role="button" href="<?php echo BASE_URL . '/about-me.php' ?>">About Me</a>

                    <form class="form-inline mr-auto" target="_self">

                    </form>

                    <?php if (isset($_SESSION['id'])) : ?>

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle dropdown-btn" type="button" data-toggle="dropdown">
                                <?php echo $_SESSION['username']; ?>
                            </button>
                            <div class="dropdown-content-wrapper">

                                <div class="dropdown-content">
                                    <?php if ($_SESSION['admin'] == 0) : ?>
                                        <a href="<?php echo BASE_URL . "/examination/home.php"; ?>">Student Dashboard</a>
                                    <?php else : ?>
                                        <a href="<?php echo BASE_URL . "/examination/adminpanel/admin/home.php"; ?>">Admin Dashboard</a>
                                    <?php endif; ?>
                                </div>

                                <div class="dropdown-content">
                                    <a href="<?php echo BASE_URL . "/logout.php" ?>">Logout</a>
                                </div>

                            </div>
                        </div>

                    <?php else : ?>
                        <span class="navbar-text">
                            <a href="<?php echo BASE_URL . '/login/login.php' ?>" class="login">Log In</a>
                        </span>
                        <a class="btn btn-light action-button" role="button" href="<?php echo BASE_URL . '/login/register.php' ?>">Sign Up</a>
                    <?php endif; ?>
                </div>
            </div>
    </div>
    </nav>
</div>
</div>

<script src="<?php echo BASE_URL . '/assets/js/header.js' ?>"></script>