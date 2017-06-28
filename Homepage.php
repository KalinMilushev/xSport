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
				<div id="myCarousel" class="carousel slide" data-ride="carousel"  >
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" align="center" height="200px" width="200px">
						<div class="item active" >
							<img src="img/pic1.jpg">
						</div>

						<div class="item">
							<img src="img/pic1.jpg">
						</div>

						<div class="item">
							<img src="img/pic1.jpg">
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
                                           


        <br>

        

    </div>
    <!-- end of containter for row1 -->
	<br><br><br>
	<div class="row">
		<div class="col-sm-1"></div>
		
		<div class="col-sm-3 imgInsideNavBar" >
			<img src="img/pic1.jpg"  style="width: 250px; height: 250px;">
		</div>
		<div class="col-sm-3 imgInsideNavBar" >
			<img src="img/pic1.jpg"  style="width: 250px; height: 250px;">
		</div>
		<div class="col-sm-3 imgInsideNavBar" >
			<img src="img/pic1.jpg"  style="width: 250px; height: 250px;">
		</div>

	</div>
    <br><br><br><br><br><br>

</body>

</html>