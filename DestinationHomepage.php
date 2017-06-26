<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>xSport</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1" style="background-color:lavender;">.col-sm-4</div>

            <div class="col-sm-10" style="background-color:lavender;">
                <div>
                    <img src="img/CoverPicture.jpg" width="100%" height="250">
                </div>
                <nav class="navbar navbar-inverse" data-offset-top="197">
                    <div class="container text-center collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-center">
                            <li>
                                <a href="" class="navbar-brand">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li><a href="" class="navbar-brand">Новини</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Спортове<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#a" data-toggle="tab">Колоездене</a></li>
                                    <li><a href="#b" data-toggle="tab">Парашутизъм</a></li>
                                    <li><a href="#c" data-toggle="tab">Каяк</a></li>
                                    <li><a href="#c" data-toggle="tab">Рафтинг</a></li>
                                    <li><a href="#c" data-toggle="tab">Катерене</a></li>
                                    <li><a href="#c" data-toggle="tab">Сноуборд</a></li>
                                    <li><a href="#c" data-toggle="tab">Sport1</a></li>
                                    <li><a href="#c" data-toggle="tab">Sport1</a></li>
                                    <li><a href="#c" data-toggle="tab">Sport1</a></li>
                                    <li><a href="#c" data-toggle="tab">Sport1</a></li>
                                    <li><a href="#c" data-toggle="tab">Sport1</a></li>
                                </ul>
                            </li>
                            <li><a href="" class="navbar-brand">Галерия</a></li>
                            <li><a href="" class="navbar-brand">Форум</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end of col2 -->

            <div class="col-sm-1" style="background-color:lavenderblush;">
                <div class="dropdown topcorner pull-right">
                    <button class="btn btn-default btn-primary dropdown-toggle loginButton" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
            </div>
            <!-- end of col3 -->
        </div>
        <!-- end of row1 -->

        <div class="row">
            <div class="col-sm-1">tex1</div>
            <!-- end of col1 -->

            <div class="col-sm-10">
                <div class="container">
                    <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs">
                            <li><a href="#placeToSleep" data-toggle="tab">Нощувки</a></li>
                            <li><a href="#food" data-toggle="tab">Храна</a></li>
                            <li><a href="#transport" data-toggle="tab">Транспорт</a></li>
                            <li><a href="#landmarks" data-toggle="tab">Забележителности</a></li>
                            <li><a href="#useful" data-toggle="tab">Полезни</a></li>
                        </ul>
                        <div class="tab-content">
                            
                            
                            <?php include('PlaceToSleep.html'); ?>
                            <?php include('Food.html');?>
							<?php include('Transport.html');?>
							<?php include('Landmarks.html');?>
							<?php include('Useful.html');?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col2 -->

            <div class="col-sm-1">text3</div>
            <!-- end of col3 -->

        </div>
        <!-- end of row2 -->

        <br>

        <div class="row">

            <div class="col-sm-1">L</div>
            <!-- end of col1 -->

            <div class="col-sm-4">

            </div>
            <!-- end of col2 -->

            <div class="col-sm-1"></div>
            <!-- end of col3 -->

            <div class="col-sm-2">

            </div>
            <!-- end of col4 -->

            <div class="col-sm-1"></div>
            <!-- end of col5 -->

            <div class="col-sm-2">
            </div>
            <!-- end of col6 -->

            <div class="col-sm-1"></div>
            <!-- end of col7 -->

        </div>
        <!-- end of row3 -->

    </div>
    <!-- end of containter for row1 -->

    <br><br><br><br><br><br>

</body>

</html>