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


				<div class="container col-sm-10">
					<div id="myCarousel" class="carousel slide" data-ride="carousel" >
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" align="center">
							<div class="item active">
								<img src="img/pic1.jpg" alt="Los Angeles" height="200" width="200">
							</div>

							<div class="item">
								<img src="img/pic1.jpg" alt="Chicago" height="200" width="200">
							</div>

							<div class="item">
								<img src="img/pic1.jpg" alt="New York" height="200" width="200">
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
				</div>
				<!-- End of carousel container -->
                                           
                           
            </div>
            <!-- end of col2 -->

            <div class="col-sm-1"></div>
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