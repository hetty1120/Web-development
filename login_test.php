
<?php
require_once('db_setup_hetty.php');
$sql = "USE hzhu24;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}

echo "hehe PHP!<br>";

// Query:
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$loginsql = "SELECT * FROM User_2 where Email = '$Email' and Password = '$Password';";
#$sql = "SELECT * FROM Students where Username like 'amai2';";
$result = $conn->query($loginsql);

if($result->num_rows > 0){
?>
   <table class="table table-striped">
      <tr>
         <th>Email</th>
         <th>Username</th>
         <th>Password</th>
         <th>Registration_time</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['Email']?></td>
          <td><?php echo $row['Username']?></td>
          <td><?php echo $row['Password']?></td>
          <td><?php echo $row['Registration_time']?></td>
      </tr>

<?php
}
}
else {
echo "User not found";
}
?>

<?php
$Email = $_POST['Email'];
$Click_time = $_POST['Click_time'];
$loginsql = "SELECT Click_time FROM Review_history where Email = '$Email';";
$result = $conn->query($loginsql);

if($result->num_rows > 0){
?>
   <table class="table table-striped">
      <tr>
         <th>Email</th>
         <th>Click_time</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['Email']?></td>
          <td><?php echo $row['Click_time']?></td>
      </tr>
<?php
}
}
else {
echo "User not found";
}
?>









