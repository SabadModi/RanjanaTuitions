<?php

include(ROOT_PATH . "/app/helpers/validateLogin.php");

$errors = array();

$id = '';
$username = '';
// $email = '';
$password = '';
// $passwordConf = '';
$table = 'users';
$admin = '';

// $gender = '';
// $birthday = '';
// $bio = '';
// $interests = '';
// $image_name = '';


function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];

    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    // dd($_SESSION);

    if ($_SESSION['admin'] == 1) {
        header('location: ' . BASE_URL . '/index.php');
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

if (isset($_POST['signin'])) {
    // dd($_POST);
    $user = selectOne($table, ['username' => $_POST['username']]);
    // dd($user);

    if ($user && password_verify($_POST['password'], $user['password'])) {

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];

        if ($user['admin'] == 1) {
            exit("true " . BASE_URL . "/examination/adminpanel/admin/home.php");
        } else {
            exit("true " . BASE_URL . "/examination/home.php");
        }

    } else {
        exit(false);
    }
}

if (isset($_POST['signin-submit'])) {
    unset($_POST['signin-submit']);

    // dd($_POST);

    $errors = validateLogin($_POST);

    if (count($errors) == 0) {
        // dd("No Errors");
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {

            loginUser($user);
        } else {
            array_push($errors, 'Wrong credentials');
        }
    } else {
        // dd("Errors");
        // $_SESSION['type'] = 'error';
        // $_SESSION['message'] = $errors;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    // dd($_SESSION);
}
