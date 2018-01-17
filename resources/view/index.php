<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../static/cssy/jquery.datetimepicker.css">
        <link rel="stylesheet" href="../static/cssy/form.css">
        <link rel="stylesheet" href="../static/cssy/navigation.css">
        <link rel="stylesheet" href="../static/cssy/materialized.css">
        <link rel="stylesheet" href="../static/cssy/footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../static/jsy/jquery.datetimepicker.full.js"></script>
        <script type="text/javascript" src="../static/jsy/materialized.js"></script>
        <script type="text/javascript" src="../static/jsy/dateAndCarouselInit.js"></script>
    </head>
    <body class="fade-in">
        <?php
        include_once '../templates/navBar.php';
        ?>
        <div>
            <div class="login_wrapper" id="loginForm">
                <div class="form-block w-form" style="text-align: center">
                    <form id="email-form" name="email-form" data-name="Email Form" class="form">
                        <input type="email" class="login_input w-input"
                               maxlength="256" name="name" data-name="Name" placeholder="E-mail" id="name"/><input
                               type="password" class="login_input w-input" maxlength="256" name="email" data-name="Email"
                               placeholder="Hasło" id="login_email" required=""/>
                        <input type="submit" value="Zaloguj" data-wait="Please wait..." class="login_button w-button"/>
                        <div class="row w-row">
                            <div class="w-col w-col-1">
                                <input type="checkbox" />
                            </div>
                            <div class="w-col w-col-11"><label class="login_lab">Zapamiętaj mnie</label></div>
                        </div>
                    </form>
                    <a href="#" class="login_link">Przypomnij hasło</a>
                </div>
            </div>
        </div>
        <div id="wideo">
            <video id="vid" playsinline muted loop autoplay poster="../static/zdjecia/poster.jpg">
                <source src="../static/wideo/618511023.mp4" type="video/mp4">       
            </video>
        </div>
        <div class="rent-wrapper" id="rentwrapper">
            <a class="close" href="#" id="close">Zamknij X</a>
            <a class="close" href="#" style="float: left" id="load">Wczytaj dane</a>
            <h2 class="heading" style="text-align: center">Wypełnij dane</h2>
            <div class="w-form">
                <form id="rentForm" method="post" enctype="text/plain" onsubmit="return spr()">
                    <label for="imie" id="1">Podaj imię i nazwisko:</label>
                    <input class="renttext w-input" id="imie" maxlength="256" name="imie" placeholder="Imię i nazwisko" type="text">

                    <label id="2" for="Samochod">Wybierz samochód:</label>
                    <select class="renttext w-select" id="Samochod" name="Samochod">
                        <option selected disabled value="">Wybierz samochód</option>
                        <option value="Benz">Mercedes Benz</option>
                        <option value="Corsa">Opel Corsa</option>
                        <option value="Passat">Passat</option>
                    </select>

                    <label id="3" for="Miasto">Wybierz miasto:</label>
                    <select class="renttext w-select" id="Miasto" name="Miasto">
                        <option selected disabled value="">Wybierz miasto</option>
                        <option value="Warszawa">Warszawa</option>
                        <option value="Łódź">Łódź</option>
                        <option value="Kraków">Kraków</option>
                    </select>

                    <label id="4" for="email">Wprowadź email:</label>
                    <input class="renttext w-input" id="email" maxlength="256" name="email" placeholder="E-mail" type="email">
                    <div class="form-group">
                        <label id="5">Początek wynajmu:</label>
                        <div class="input-group date">   
                            <input class="renttext w-input" id="datetimepicker1" maxlength="256" name="date1" placeholder="Początek" type="text">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="6" >Koniec wynajmu:</label>
                        <div class="input-group date">
                            <input class="renttext w-input" id="datetimepicker2" maxlength="256" name="date2" placeholder="Koniec" type="text">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <label id="7">Sposób płatności:</label>
                    <div class="radio-button-field-2 w-clearfix w-radio">
                        <input class="w-radio-input" id="pekao" name="Karta" type="radio">
                        <label class="field-label w-form-label">Pekao</label>
                    </div>

                    <div class="radio-button-field w-radio">
                        <input class="w-radio-input" id="mbank" name="Karta" type="radio" value="Radio">
                        <label class="w-form-label" >MBank</label>
                    </div>

                    <label class="field-label-2" id="pay">Do zapłaty: 0zł</label>
                    <input class="submitbutton w-button" type="submit" style="display: block" value="Przejdz do płatności">
                </form>
            </div>
        </div>
        <div class="container1 ">
            <button class="but" id="rentBut">Zacznij wynajem</button>
        </div>
        <div class="container1">
            <img id="arrow" src="../static/zdjecia/arrow2.png" class="" alt="">
            <div class="pause" id="vidPause">&#9616;&nbsp;&#9612;</div>
        </div>
        <div class="caru" id="bott">
            <br>
            <h2>Nasze najlepsze oferty!</h2>
            <div class="carousel" data-interval="100" id="carousel">
                <?php
                include_once '../../src/repository/impl/CarRepositoryImpl.php';
                $cars = CarRepositoryImpl::findAll();
                foreach ($cars as $value) {
                    echo $value->getSlide();
                }
                ?>
            </div>
            <br><br>
            <hr>
            <?php
            include_once '../templates/footer.php';
            ?>
        </div>
        <script type="text/javascript"  src="../static/jsy/validation.js"></script>
        <script type="text/javascript"  src="../static/jsy/form.js"></script>
    </body>
</html>


