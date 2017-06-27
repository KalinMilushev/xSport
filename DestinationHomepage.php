<html>

<?php include('functions.php');
	htmlHeader();
 ?>

<body>
    <div class="container-fluid">
        <?php include('htmlElements/upperPicAndNavbar.html'); ?>

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