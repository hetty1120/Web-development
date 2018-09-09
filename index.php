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
         <li><a href="index.php?data1=<?php echo $data1;?>">Home</a></li>
	<li><a href="review.php?data1=<?php echo $data1;?>" class="page-scroll">Hello, <?php echo $data1?></a></li>
	<li><a href="index.html">Log out </a></li>


   	    </ul>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div class="w3_bannerinfo">
<h2>The Best Price Make Your Heart Pound</h2>
<p>Select the category that you want </p>
<!-- Search-->
<div class="w3l_banser">
	<div id="search_form" class="search_top">		
		<form name="frm" action="product.php?data1=<?php echo $data1;?>" method="post">
		<div class="w3l_sel">
		<select name = "C1" id="category1" onChange="change()" class="frm-field required">
            <option value="Computer" selected="selected">Computer</option>
            <option value="Phone">Phone</option>
            <option value="TV">TV</option>
          </select>


		<select name = "C2" id="category2" class="frm-field required">
            <option value="Desktop" selected="selected">Desktop</option>
            <option value="Laptop">Laptop</option>
            <option value="Tablet">Tablet</option>
          </select>
<Script>
function change()
{   
    var x=document.getElementById("category1");
    var y=document.getElementById("category2");
    y.options.length=0;
    if(x.selectedIndex==0)
    {
        y.options.add(new Option("Desktop","Desktop", false, true));
        y.options.add(new Option("Laptop","Laptop"));
        y.options.add(new Option("Tablet","Tablet"));
    }
    if(x.selectedIndex==1)
    {
        y.options.add(new Option("Smart Phone","Smart Phone", false, true));
        y.options.add(new Option("Non Smart","Non Smart"));
    }
    if(x.selectedIndex==2)
    {
        y.options.add(new Option("4K TV","4K TV", false, true));
        y.options.add(new Option("Non 4K","Non 4K"));
    }
}
</Script>











		  </div>
			<input type="submit" value="search">
			<div class="clearfix"></div>
		</form>
	</div>
	</div>
<!--/Search-->
</div>
</div>
<!-- /Banner-->


<div class="map"></div>
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


</body>
</html>
