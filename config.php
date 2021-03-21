
<?php

$sql_host = "localhost";
$sql_user = "root";
$sql_pwd = "";
$sql_port = "3306";
$sql_db = "demo";
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect($sql_host,$sql_user,$sql_pwd,$sql_db );
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


