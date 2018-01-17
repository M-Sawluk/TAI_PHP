<?php
interface UserRepository {
    function getUser($email, $password);
}
