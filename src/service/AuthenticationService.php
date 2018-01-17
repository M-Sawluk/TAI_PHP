<?php
interface AuthenticationService {
    
    function processLogin($email, $password);
    
    function logOut();
    
}