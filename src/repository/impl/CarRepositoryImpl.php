<?php
require_once $_SERVER['DOCUMENT_ROOT']."/com.michal.php/src/repository/CarRepository.php";
require_once $_SERVER['DOCUMENT_ROOT']."/com.michal.php/src/db_config/DbProvider.php";
require $_SERVER['DOCUMENT_ROOT']."/com.michal.php/src/domain/Car.php";

    class CarRepositoryImpl implements CarRepository {        
        public function findAll() {
            $connection = DbProvider::getDbConnection();
            $stmt = $connection->prepare('SELECT * FROM car');
            $stmt->execute();
            $result = $stmt->get_result();        
            $allCars = array();
        
            while ($row = $result->fetch_assoc()) {
                 $name = $row['name']; 
                 $price = $row['price'];
                 array_push($allCars, new Car($name, $price));
            }
            
            return $allCars;
        }

}