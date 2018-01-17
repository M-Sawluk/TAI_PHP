<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/com.michal.php/src/repository/UserRepository.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/com.michal.php/src/db_config/DbProvider.php";
require $_SERVER['DOCUMENT_ROOT'] . "/com.michal.php/src/domain/User.php";

class UserRepositoryImpl implements UserRepository {

    public function getUser($email, $password) {
        $connection = DbProvider::getDbConnection();
        $stmt = $connection->prepare('SELECT * FROM user u '
                . ' join role r on u.role_id = r.role_id'
                . ' where u.email =? and u.password =? ');
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
       
        return new User($row['name'], $row['secondName'], $row['email'], $row['telephone'], $row['address'], $row['role_name']);
    }

}
