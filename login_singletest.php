
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

      </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>


<div class="w3_bannerinfo">


<?php

session_start();

require_once('db_setup_hetty.php');
$sql = "USE hzhu24;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}

// Query:
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$User = $_POST['Username'];

$loginsql = "SELECT * FROM User_2 where Email = '$Email' and Password = '$Password';";


$result = $conn->query($loginsql);

$result2 = mysql_fetch_array($loginsql);


if($result->num_rows > 0){
//	$_SESSION['Email'] = $Email;
//	$_SESSION['Username'] = $result2['Username'];

?>
        <h2><?php echo $Email. ', Welcome!';?></h2></a><br /><p> Enter <a href="review.php?data1=<?php echo $Email;?>"> User Center</a><br /></p>

        <p><?php echo 'Return';?><a href="index.php?data1=<?php echo $Email;?>"> HomePage </a><?php echo "and enjoy it";?></p>	

   <!--table class="table table-striped">
      <tr>
         <th>Email</th>
         <th>Username</th>
         <th>Password</th>
         <th>Registration_time</th>
      </tr-->
<?php
while($row = $result->fetch_assoc()){
?>
      <!--tr>
          <td><?php echo $row['Email']?></td>
          <td><?php echo $row['Username']?></td>
          <td><?php echo $row['Password']?></td>
          <td><?php echo $row['Registration_time']?></td>
      </tr-->

<?php
}
}
else {
echo "<script>alert('Incorrect username or password! Please try again.');history.go(-1);</script>"; 
}

?>
</div>

</div>
</body>
</html>
