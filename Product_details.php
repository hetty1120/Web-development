<?php $data1 = $_GET["data1"];?>


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
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"><style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
.STYLE1 {color: #FFFFFF}
-->
</style></head>
<body>

<?php
require_once('db_setup_hetty.php');
$sql = "USE hzhu24;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$id = $_GET['data7'];
$app = $_GET['data8'];
$sql = "SELECT Description FROM $app where Item_ID = $id;";
$sql2 = "SELECT * FROM Items where Item_ID = $id;";
$sql3 = "SELECT * FROM Shopping_web where Item_ID = $id;";
$sql4 = "INSERT INTO Review_history values ($id, '$data1', now());";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
$row = $result->fetch_assoc();
$row2 = $result2->fetch_assoc();
?>

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

                <?php if (empty($data1)): ?><li><a href="index.html">Home</a></li>
                                        <li><a href='login.html' class='page-scroll'>Log In</a></li>
                     <?php else: ?><li><a href="index.php?data1=<?php echo $data1;?>">Home</a></li>
                                        <li><a href='review.php?data1=<?php echo $data1;?>' class='page-scroll'>Hello, <?php echo $data1?></a></li>
<li><a href="index.html">Log out </a></li>                        
<?php endif; ?>


</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

		<!-- desktop bar -->
		<section class="desktop-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
					 <h3>Product Details <i class="fa fa-bars"></i></h3>
					</div>

				</div>
			</div>
		</section>

		<section class="desk-com">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div id="pro-img" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="item active"><img src="<?php echo $row2['Pic_url'] ?>" alt="" width="512" height="512"></div><br>

							</div>
							<a class="left carousel-control" href="#pro-img" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
							<a class="right carousel-control" href="#pro-img" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="pro-details">
							<p class="category"><?php echo $app ?></p>
							<h2><?php echo $row2['Item_name'] ?></h2>

							<p class="STYLE1"><?php echo $row['Description']?></p>
						</div>
					</div>
				</div>
			</div>
		</section>




		<section class="desk-com">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="description">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#description" aria-controls="home" role="tab" data-toggle="tab">Price Comparison</a></li>
								
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								
								<?php
								while ($row3 = $result3->fetch_assoc()){
								?>

								<div role="tabpanel" class="tab-pane active" id="description">
									<h3><?php echo $row3['Web_name'] ?></h3>
									<a href="<?php echo $row3['Web'] ?>">Current price: $<?php echo $row3['Price'] ?></a><br><br>
								
								<?php
								}
								?>



								</div>
													
						</div>
					</div>
				</div>
			</div>
		</section>




<?php
$conn->close();
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
