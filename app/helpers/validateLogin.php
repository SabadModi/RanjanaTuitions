<?php
function validateLogin($user){
    
    global $conn;
    $errors = array();

    // dd($user);

    if (empty($user['username'])) {
        array_push($errors, "Username is required");
    }
   
    if (empty($user['password'])) {
        array_push($errors, "Password is required");
    }

    return $errors;
}

?>