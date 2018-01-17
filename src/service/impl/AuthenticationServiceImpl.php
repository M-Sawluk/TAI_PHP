<?php
require $_SERVER['DOCUMENT_ROOT']."/com.michal.php/src/service/AuthenticationService.php";
require $_SERVER['DOCUMENT_ROOT']."/com.michal.php/src/repository/impl/UserRepositoryImpl.php";
class AuthenticationServiceImpl implements AuthenticationService {   
    function processLogin($email, $password){
        $allowedCharsInPassowrd = "/^((?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%&*]{6,20})$/";
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match($allowedCharsInPassowrd, $password)) {
            session_start();
            $user = UserRepositoryImpl::getUser($email, $password);
            $_SESSION['user'] = serialize($user);
            echo 'in';
        } else {
            echo 'out';
            $_SESSION['user'] = serialize('dupa');
        }
    }
    
    function logOut(){session_destroy();}
}
