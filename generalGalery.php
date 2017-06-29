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
                            <li><a href="#sport1">Скейтбординг</a></li>
                            <li><a href="#sport2">Парашутизъм</a></li>
                            <li><a href="#sport3">Каяк</a></li>
                            <li><a href="#sport3">Сноубординг</a></li>
                            <li><a href="#sport4">Колоездене</a></li>
                            <li><a href="#sport3">Бейс джъмпинг</a></li>
                            <li><a href="#sport3">Скок сбънджи</a></li>
                            <li><a href="#sport4">Ски</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="sportHome">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img class="imgInsideNavBar" src="img/pic1.jpg" style="width: 250px; height: 250px">
                                                Картинка 1
                                            </div>
                                            <div class="col-sm-4">
                                                <img class="imgInsideNavBar" src="img/pic1.jpg" style="width: 250px; height: 250px">
                                                Картинка 2
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <div class="thumbnail" style="width: 250px; height: 250px;">
                                                    <img class="imgInsideNavBar" src="img/pic1.jpg" alt="Chicago">
                                                    <div class="caption">
                                                        <h4>Популярни</h4>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img class="imgInsideNavBar" src="img/pic1.jpg" style="width: 250px; height: 250px">
                                                Картинка 3
                                            </div>
                                            <div class="col-sm-4">
                                                <img class="imgInsideNavBar" src="img/pic1.jpg" style="width: 250px; height: 250px">
                                                Картинка 4
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail" style="width: 250px; height: 250px">
                                                    <img class="imgInsideNavBar" src="img/pic1.jpg" >
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