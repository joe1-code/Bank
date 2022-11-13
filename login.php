<?php

$servername="127.0.0.1";
$username="root";
$paswd="";
$database="bank";

$con=new mysqli($servername,$username,$paswd,$database);
if($con->connect_error){
 die("could not connect".$con->connect_error);
}
else{
 //echo "connected";
}

$user=$_REQUEST['username'];
$passcode=$_REQUEST['password'];
echo $passcode;
echo "<br>";

$sql="SELECT password FROM customer WHERE fname='Ngoda'";
$dbpass=$con->query($sql);
 // echo $dbpass;

if($dbpass->num_rows>0){
 while($row=$dbpass->fetch_assoc()){
if (!password_verify($passcode,$row['password'])) {
    echo 'Invalid password.';
    exit;
}
else{
 echo "Successfully logged in";
//$sql = "SELECT id, email, password FROM users WHERE email = '$email' AND password = '$password' AND activated = '1' LIMIT 1";
//$query = mysqli_query($conn, $sql);
}
 }}
?>