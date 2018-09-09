<?php $C1 = $_POST["C1"];?>
<?php $C2 = $_POST["C2"];?>
<?php $data1 = $_GET["data1"];?>
<?php $data2 = $_POST["data1"];?>
<?php if(empty($data1)){$data1 = $data2;}?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="css/chocolat.css" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<!-- Banner-->
<div class="w3_banner">
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1><a class="navbar-brand" href="index.html">Meliora</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
		<?php if (empty($data1) && (empty($data2))): ?><li><a href="index.html">Home</a></li>
					<li><a href='login.html' class='page-scroll'>Log In</a></li>
                     <?php else: ?><li><a href="index.php?data1=<?php echo $data1;?>">Home</a></li>
					<li><a href='review.php?data1=<?php echo $data1;?>' class='page-scroll'>Hello, <?php echo $data1;?></a></l>i
<li><a href="index.html">Log out </a></li>
			<?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<div class="well wedget">

							 	
				<div class="heading-border b-color-6"></div>
				<form action="product.php" method="post">
				<div class="w3_cc">		
				</div>
				<strong>By Brand</strong>
					<input type="text" class="margin-right" Name="filter_B" placeholder="Name">
				<strong>By Size</strong>
					<input type="text" class="margin-right" Name="filter_S" placeholder="Name">
				<strong>By Color</strong>
					<input type="text" class="margin-right" Name="filter_C" placeholder="Name">
				<strong>Key Words</strong>
					<input type="text" class="margin-right" Name="filter_K" placeholder="Name">
					<input type="hidden" name="C1" value="<?php echo $C1;?>">
					<input type="hidden" name="C2" value="<?php echo $C2;?>">
					<input type="hidden" name="data1" value="<?php echo $data1;?>">					
					<input type="submit" value="Filter">
					</form>
					<p></p>
					<div class="clearfix"></div>
					<div class="send-button agileits w3layouts">
					<br></br>
					</div>
			     
				 
				 





						<!-- desktop -->
						<div class="featured-product desktop">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="btn-default">
											<h1><span>Search Results:</span></h1>
											<div class="heading-border b-color-6"></div>
									  </div>
									</div> <!-- section title -->
									<div class="row hidden-xs">
										<div class="col-sm-12">
											<nav class="navbar navbar-default desk-nav">
												<!-- Brand and toggle get grouped for better mobile display -->
												<div class="navbar-header">
													<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#desktop" aria-expanded="false">
														<span class="sr-only">Toggle navigation</span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>
												</div>

<!-- Collect the nav links, forms, and other content for toggling -->
												<div class="collapse navbar-collapse" id="desktop">
													<div class="navbar-form nav navbar-nav navbar-left">
																											
															<!--select class="heading-border b-color-6">
																<option>Price-Low to High</option>
																<option>Price-High to Low</option>
																<option>Review</option>
														       		<option>New Arrival</option>

						                              </select>
															<i class="fa fa-long-arrow-up"></i-->
												  </div>

	
													</div>	


												</div>
											</nav>
										</div>
									</div>	
									<div class="row">

<?php
require_once('db_setup_hetty.php');
$sql = "USE hzhu24;";
if ($conn->query($sql) === TRUE){
   //echo "using Database hzhu24"
}else{
   echo "Error using database:" . $conn->error;
}
$C1 = $_POST["C1"];
$C2 = $_POST["C2"];
$F_array = array($_POST['filter_S'], $_POST['filter_B'], $_POST['filter_C'], $_POST['filter_K']);
if(!empty($F_array[0]) || !empty($F_array[1]) || !empty($F_array[2]) || !empty($F_array[3])){
$C1 = $_POST["C1"];
$C2 = $_POST["C2"];
if(empty($F_array[0])){
$des = join('%', $F_array);
$query = "SELECT * FROM Items, $C1 where Items.Item_ID = $C1.Item_ID and Category2 Like '%$C2%' and description like '%$des%';";
}else{
$des = join('%', array_slice($F_array, 1));
$query = "SELECT * FROM Items, $C1 where Items.Item_ID = $C1.Item_ID and Category2 Like '%$C2%' and description like '%$des%' and $C1.Screen_size like '%$F_array[0]%';";
}
}else{
$query = "SELECT * FROM Items where Category1 Like '%$C1%' and Category2 Like '%$C2%';";
}
$result = $conn->query($query);

if($result->num_rows > 0){
?>

<?php
while($row = $result->fetch_assoc()){
$url = $row['Pic_url'];
$data7 = $row['Item_ID'];
$data8 = $row['Category1'];
?>
	<div class="col-sm-4">
		<div class="thumbnail">
			<!--span class="e-label"><div>Sale</div></span-->
			<span class="service-link text-center">
				<img class="center" src= "<?php echo $url;?>" align = "middle">
				<div class="list-inline">
					<!--a href=""><i class="fa fa-eye"></i></a-->
					<!--a href=""><i class="fa fa-link"></i></a-->
				</div>
			</span>
			<div class="caption">
				<div class="category"> <?php echo $C2; ?>
					<div class="pull-right">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
      				<h3><?php echo $row['Item_name']; ?></h3>
				<h4><?php echo $row['Brand']; ?></h4>
				<!--strong>$899.00</strong-->
				<!--div><a href="product-detail.html" class="btn btn-default" role="button">Details</a></div-->
				<div><a href = "Product_details.php?data1=<?php echo $data1;?>&data7=<?php echo $data7;?>&data8=<?php echo $data8;?>" name="Details" class="btn btn-default">Details</a></div>
			</div>
		</div>
	</div>
<?php
}
}
else {
echo "Item not found";
}
echo "</table>"
?>
<div class="map">

 <iframe src="" style="border:0" allowfullscreen></iframe>

</div>
<!--/Contact-->
<div class="copyright">
		<div class="container">
			<p>Copyright &copy; 2018.Company name All rights reserved.</p>
		</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script type="text/javascript">
$(document).ready(function() {
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<!-- Calendar -->
			
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<!-- requried-jsfiles-for owl -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->

<!-- gallery-pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
<script type="text/javascript">
$(function() {
	$('.view-seventh a').Chocolat();
});
</script>
<!-- //gallery-pop-up-script -->
</body>
</html>
<?php
$conn->close();
?>

</body>
</html>
