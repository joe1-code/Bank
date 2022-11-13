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

$firstname=$_REQUEST['fname'];
$lastname=$_REQUEST['lname'];
$Email=$_REQUEST['email'];
$Contacts=$_REQUEST['contacts'];
$uname=$_REQUEST['username'];
$passcode=$_REQUEST['password'];

#Hash method for password.
 $hash = password_hash($passcode, PASSWORD_DEFAULT);
$sql="INSERT INTO customer VALUES('$firstname', '$lastname', '$Email', '$Contacts', '$uname', '$hash', '0')";

if(mysqli_query($con,$sql)){
 echo "Data submitted";
}
else{
 echo "error occured.$sql".$mysqli_error;
}


?>