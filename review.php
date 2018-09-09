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
<h2>Welcome to User Centre</h2>




<?php

require_once('db_setup_hetty.php');
$sql = "USE hzhu24;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
//session_start();

//if(!isset($_SESSION['Email'])){
  //  header("Location:login.html");
    //exit();}



$useremail = $_GET['data1'];

//$user_query = mysql_query("SELECT * FROM User_2 where Email like '%$useremail%';");
//$user_query2 = mysql_query("SELECT Click_time FROM Review_history where Email = '$Email';");

$loginsql = "SELECT * FROM User_2 where Email = '$useremail';";
//echo $loginsql;
$result = $conn->query($loginsql);
if($result->num_rows > 0){

$row = $result->fetch_assoc();
}

;?>

<p><?php echo 'User Email:',$useremail;?></p>
<p><?php echo 'User Name:',$row['Username'];?></p>
<p><?php echo 'Registration Time:',$row['Registration_time'];?></p>
<p><?php echo 'Review history: ';?></p>

<p><?php 
$loginsql = "SELECT * FROM User_2,Review_history where User_2.Email=Review_history.Email and User_2.Email = '$useremail';";
//echo $loginsql;
$result = $conn->query($loginsql);
if($result->num_rows > 0){

//$row = $result->fetch_assoc();
}

while($row2=$result->fetch_assoc()){
echo '------','Item_ID: ', $row2['Item_ID'] .' '. $row2['Click_time'],'------','<br />';

}

;?></p>


</div>
</div>
</body>
</html>
