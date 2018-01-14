<?php
class DbProvider {
    private static $connection;

    public static function getDbConnection(){
        if(DbProvider::$connection == null){
            $connectionData = parse_ini_file("../../resources/config/db_config.ini");
            $host = $connectionData['db.host'];
            $user = $connectionData['db.user'];
            $pass = $connectionData['db.pass'];
            $db_schema = $connectionData['db.schema_name'];
            $connection = mysqli_connect($host, $user, $pass, $db_schema);
            if($connection == null){
                die ( "Error connecting to database!" );
            }    
            return $connection;
       } else {
            return $connection;
       }

    }
}

