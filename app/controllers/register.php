<?php
include(ROOT_PATH . "/app/helpers/validateLogin.php");

$id = '';
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';
$admin = '';



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

if(isset($_POST['emailValidate'])){
    $userEmail = selectOne('users', ['email'=>$_POST['email']]);
    if($userEmail){
        exit(false);
    } else{
        exit(true);
    }
}

if(isset($_POST['validateUsername'])){
    $userName = selectOne('users', ['username'=>$_POST['username']]);

    if($userName){
        exit(false);
    } else{
        exit(true);
    }
}

if (isset($_POST['registerBtn'])) {

    unset($_POST['register-btn'], $_POST['passwordConf']);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $_SESSION['registerUsername'] = $username;
    // $_SESSION['registerPassword'] = $password;
    // $_SESSION['registerEmail'] = $email;


    $_POST['admin'] = 0;
    $admin = $_POST['admin'];

    $id = create($table,['admin'=>$admin, 'username'=>$username, 'email'=>$email, 'password'=>$password]);
    $user = selectOne($table, ['id'=>$id]);

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];

    exit(BASE_URL . "examination/home.php");

}