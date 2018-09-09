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
         <li><a href="index.html">Home</a></li>
		<li><a href="Register.html" class="page-scroll">Register Now</a></li>
     	   </ul>
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<!-- Contact-->
<!-- /contact -->
	<div class="contact" id="contact">
		<div class="container">

			<div class="inner-w3">
					<h3>Congratulation! Please Log In</h3>
					<p> </p>
			</div>
			<div class="w3_agile_grids_top">	
				
			   <div class="contact-form-aits">

				 <form action="index.php" method="post">

				<div class="w3_cc">
				
				</div>
					<input type="text" class="margin-right" Name="Username" placeholder="Name" required="">
					<input Name="Password" type="text" id="Password" placeholder="Password" required="">

					<div class="clearfix"></div>
					<div class="send-button agileits w3layouts">
						<button class="btn btn-primary">Log In </button>
					</div>
			     </form>
				          
			   </div>
			</div>
		</div>
	</div>


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

<?php
require_once('db_setup_hetty.php');
$sql = "USE hzhu24;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$sql2 = "SELECT * FROM User_2 WHERE Email='$Email';";
$result2 = $conn->query($sql2);
if($result2->num_rows > 0){
echo "<script>alert('The email has been registered! Please try again.');history.go(-1);</script>";}

else{
$sql = "INSERT INTO User_2(Email,Username,Password,Registration_time) values ('$Email', '$Username', '$Password',now());";
}
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "Registered successfully,$Username";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$stmt = $conn->prepare("Select * from Students Where Username like ?");
//$stmt->bind_param("s", $username);
//$result = $stmt->execute();
//$result = $conn->query($sql);
?>


</body>
</html>
