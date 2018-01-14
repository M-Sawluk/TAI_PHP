<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wypozyczalnia</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../static/cssy/navigation.css">
        <link rel="stylesheet" href="../static/cssy/footer.css">
        <link rel="stylesheet" href="../static/cssy/rent.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="fade-in textuers">
        <?php
            include_once '../templates/navBar.php';
        ?>  
        <div class="container">
            <div class="row" >
                <div class="col-md-9"><input type="text" class="form-control" placeholder="Name or Manufacturer " id="search" />
                </div>
                <div class="col-md-1"><input type="text" class="form-control" placeholder="Min Price " id="min" />
                </div>
                <div class="col-md-1"><input type="text" class="form-control" placeholder="Max Price " id="max" />
                </div>
                <div class="col-md-1" style="margin-left: 0px;">
                    <span class="input-group-btn">
                        <a class="btn btn-danger btn-block" id="searchbutton">
                            <span class=" glyphicon glyphicon-search"></span>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="container">  
            <div id="products" class="row list-group">
                 <?php
                include_once '../../src/repository/impl/CarRepositoryImpl.php';
                $cars = CarRepositoryImpl::findAll();
                foreach ($cars as $value){
                    echo $value->getThumbnail();
                }
            ?>
            </div>
        </div>
        <br><br>
        <hr>
        <?php
            include_once '../templates/footer.php';
        ?>       
        <script src="../static/jsy/rent.js"></script>
    </body>
</html>
