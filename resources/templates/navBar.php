<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><img height="45" alt="" src="../static/zdjecia/car-logo.png" style="margin-top: -10px ;margin-left: -33px" /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                    echo '<li class="active"><a href="index.php">Strona domowa</a></li>';
                    echo '<li><a href="rent.php">Wypożyczalnia samochodów</a></li>';
                    echo '<li><a href="">Kontakt</a></li>';
                } else {
                    echo '<li><a href="index.php">Strona domowa</a></li>';
                    echo '<li class="active"><a href="rent.php">Wypożyczalnia samochodów</a></li>';
                    echo '<li><a href="">Kontakt</a></li>';
                }
                ?>
            </ul>
            <ul class="nav navbar-nav" id="nri">
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#">Język <img src="../static/zdjecia/poland.jpg" alt=""/>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color:black;">
                        <li>
                            <a href="?language=pl" style="color: #d1d1d1;">Polski</a>
                        </li>
                        <li>
                            <a href="?language=eng" style="color: #d1d1d1;">Angielski</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">Zarejestruj się <span class="glyphicon glyphicon-user"></span></a>
                </li>

                <li>
                    <a href="#" id="loginbut"><b>Zaloguj się</b><span class="glyphicon glyphicon-log-in"></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
