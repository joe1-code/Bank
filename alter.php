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

$sql="ALTER TABLE customer ADD COLUMN lock_attempt VARCHAR(100) NOT NULL";

if($con->query($sql)==TRUE){
 die("could not add table".$con->query_error);
}
else{
 echo "successfully added a column";
}

$con->close();
?>