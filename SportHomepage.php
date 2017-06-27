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
                            <li><a href="#sportHome" data-toggle="tab">Home</a></li>
                            <li><a href="#events" data-toggle="tab">Събития</a></li>
                            <li><a href="#equipment" data-toggle="tab">Екипировки</a></li>
                            <li><a href="#destinations" data-toggle="tab">Дестинации</a></li>
                            <li><a href="#gallery" data-toggle="tab">Галерия</a></li>
                            <li><a href="#courses" data-toggle="tab">Уроци</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="sportHome">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-10"></div>
                                            
                                                <div class="container">
                                                    <div id="myCarousel" class="carousel slide col-sm-9" data-ride="carousel" >
                                                        <!-- Indicators -->
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                                        </ol>

                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" align="center">
                                                            <div class="item active">
                                                                <img src="img/pic1.jpg" alt="Los Angeles" height="250" width="300">
                                                            </div>

                                                            <div class="item">
                                                                <img src="img/pic1.jpg" alt="Chicago" height="250" width="300">
                                                            </div>

                                                            <div class="item">
                                                                <img src="img/pic1.jpg" alt="New York" height="250" width="300" >
                                                            </div>
                                                        </div>

                                                        <!-- Left and right controls -->
                                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                   
                                                </div>
                                                <!-- End of carousel container -->
                                            </div>
                                            <div class="col-sm-3"></div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-sm-3 imgInsideNavBar">
                                                <img class="imgInsideNavBar" src="img/pic1.jpg" alt="Chicago" style="width: 200px; height: 200px; margin: 0 auto">
                                            </div>
                                            <div class="col-sm-3 imgInsideNavBar">
                                                <img class="imgInsideNavBar" src="img/pic1.jpg" alt="Chicago" style="width: 200px; height: 200px; margin: 0 auto">
                                            </div>
                                            <div class="col-sm-3 imgInsideNavBar">
                                                <img class="imgInsideNavBar" src="img/pic1.jpg" alt="Chicago" style="width: 200px; height: 200px; margin: 0 auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include('SportEvents.html'); ?>
                            <?php include('SportGear.html');?>
							<?php include('SportDestinations.html');?>
							<?php include('SportGallery.html');?>
							<?php include('SportLearn.html');?>
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