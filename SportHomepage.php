<html>

<?php include('functions.php');
	htmlHeader();
 ?>

<body>
    <div class="container-fluid">
	
       <?php include('htmlElements/upperPicAndNavbar.html'); ?>
        <div class="row">
            <div class="col-sm-1"></div>
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
                                            <div class="col-sm-3 imgInsideNavBar" align="right">
                                                <img class="imgInsideNavBar" src="img/pic1.jpg" alt="Chicago" style="width: 200px; height: 200px; margin: 0 auto">
                                            </div>
                                            <div class="col-sm-3 imgInsideNavBar" align="right">
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

            <div class="col-sm-1"></div>
            <!-- end of col3 -->

        </div>
        <!-- end of row2 -->

        <br>

        <div class="row">

            <div class="col-sm-1"></div>
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