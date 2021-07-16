<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// include("../../../app/database/db.php");

if(isset($_POST['fullname'])){
    var_dump($_POST);
    


}

$id = '';
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';
$admin = '';


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


    // $_POST['admin'] = 0;
    $admin = $_POST['admin'];

    $id = create($table,['admin'=>$admin, 'username'=>$username, 'email'=>$email, 'password'=>$password]);
    $user = selectOne($table, ['id'=>$id]);

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];

    // exit(BASE_URL . "examination/home.php");

}