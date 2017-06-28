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
                            <li><a href="#sport1" data-toggle="tab">Скейтбординг</a></li>
                            <li><a href="#sport2" data-toggle="tab">Парашутизъм</a></li>
                            <li><a href="#sport3" data-toggle="tab">Каяк</a></li>
                            <li><a href="#sport3" data-toggle="tab">Сноубординг</a></li>
                            <li><a href="#sport4" data-toggle="tab">Колоездене</a></li>
                            <li><a href="#sport3" data-toggle="tab">Бейс джъмпинг</a></li>
                            <li><a href="#sport3" data-toggle="tab">Скок сбънджи</a></li>
                            <li><a href="#sport4" data-toggle="tab">Ски</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="sportHome">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="row">
											<div class="col-sm-3" align="right">
                                                <img src="img/pic1.jpg" style="width: 250px; height: 250px;">
                                            </div>
                                            <div class="col-sm-4" align="right">
                                                <img  src="img/pic1.jpg"  style="width: 250px; height: 250px;">
                                            </div>

                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail" style="width: 200px; height: 200px; margin: 0 auto">
                                                    <img class="imgInsideNavBar" src="img/pic1.jpg" alt="Chicago">
                                                    <div class="caption">
                                                        <h4>Популярни</h4>
                                                    </div>
                                                </div>                                            

                                            </div>
                                        </div>
                                        <br><br>


                                         <div class="row">
                                            <div class="col-sm-3" align="right">
                                                <img src="img/pic1.jpg" style="width: 250px; height: 250px;">
                                            </div>
                                            <div class="col-sm-4" align="right">
                                                <img  src="img/pic1.jpg"  style="width: 250px; height: 250px;">

                                            </div>

                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail" style="width: 200px; height: 200px; margin: 0 auto">
                                                    <img class="imgInsideNavBar" src="img/pic1.jpg" alt="Chicago" >
                                                    <div class="caption">
                                                        <h4>Най-нови</h4>
                                                    </div>
                                                </div> 

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col2 -->

            <div class="col-sm-1"></div>
            <!-- end of col3 -->

        </div>
	</div>
	
</body>
</html>