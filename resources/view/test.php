<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include_once '../../src/repository/impl/CarRepositoryImpl.php';
            include_once '../../src/db_config/DbProvider.php';
//            $conn = DbProvider::getDbConnection();
//            $conn->select('Select * from car');
//            echo "hello";
//            echo $_SERVER['DOCUMENT_ROOT'];
            $va = CarRepositoryImpl::findAll();
            
            foreach ($va as $value){
                echo $value->getSlide();
            }
        ?>
    </body>
</html>
