<html>

<?php include('functions.php');
	htmlHeader();
 ?>


<body>

    
        <?php include('htmlElements/upperPicAndNavbar.html'); ?>
		
		<div class="row">
            <div class="col-sm-2"></div>
            <!-- end of col1 -->

            <div class="col-sm-8">
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#monday">Понеделник</a></li>
                        <li><a href="#tuesday">Вторник</a></li>
                        <li><a href="#wednesday">Сряда</a></li>
                        <li><a href="#thursday">Четвъртък</a></li>
                        <li><a href="#friday">Петък</a></li>
                        <li><a href="#saturday">Събота</a></li>
                        <li><a href="#sunday">Неделя</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="#monday" class="tab-pane fade in active">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>12:00</th>
                                    <th>12:00</th>
                                    <th>12:00</th>
                                    <th>12:00</th>
                                    <th>12:00</th>
                                    <th>12:00</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Температура</td>
                                    <td>23°</td>
                                    <td>23°</td>
                                    <td>23°</td>
                                    <td>23°</td>
                                    <td>23°</td>
                                    <td>23°</td>
                                </tr>
                                <tr>
                                    <td>Валежи</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Вятър</td>
                                    <td>1.5 m/s</td>
                                    <td>1.5 m/s</td>
                                    <td>1.5 m/s</td>
                                    <td>1.5 m/s</td>
                                    <td>1.5 m/s</td>
                                    <td>1.5 m/s</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>Menu 1</h3>
                            <p>Some content in menu 1.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <!-- end of col2 -->

            <div class="col-sm-2"></div>
            <!-- end of col3 -->

        </div>


</body>

</html>