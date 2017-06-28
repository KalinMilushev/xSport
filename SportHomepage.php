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

                            <?php include('SportHome.html'); ?>

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

    </div>
       


    <!-- end of containter for row1 -->

    <br><br><br><br><br><br>

</body>

</html>