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

#CREATE DATABASE 
$sql="CREATE DATABASE bank";
if($con->query($sql)==TRUE){
 echo "Database created";
}
else{
 //die("could not create DB".$con->query_error);
}

#CREATE TABLE
$table="CREATE TABLE customer(fname VARCHAR(100),
                           lname VARCHAR(100),
                           email VARCHAR(100),
                           contacts INT(100),
                           username VARCHAR(100),
                           password VARCHAR(100)
                           )";

if($con->query($table)==TRUE){
 echo "Table created";
}
else{
 die("error occured".$con->error);
}



$con->close();

?>