

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
echo "<script>alert('Congratulation!You have registered successfully!Please Log in!');window.location.href = 'login.html';</script>";
}
$conn->query($sql);


//$result = $conn->query($sql);

//if ($result === TRUE) {
//    echo "The email has been registered!Please try again,$Username";
//} else {
 //   echo "Error: " . $sql . "<br>" . $conn->error;
//}




?>


