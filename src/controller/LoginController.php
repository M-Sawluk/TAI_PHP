<?php
require $_SERVER['DOCUMENT_ROOT']."/com.michal.php/src/service/impl/AuthenticationServiceImpl.php";
require $_SERVER['DOCUMENT_ROOT']."/com.michal.php/src/domain/User.php";
class LoginController {

    function loginUser($email, $password) {
        AuthenticationServiceImpl::processLogin($email, $password);
    }
    
    function logOutUser(){
      AuthenticationServiceImpl::logOut();  
    }
}
