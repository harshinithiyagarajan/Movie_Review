<?php
$usname="localhost";
$rname="root";
$password="";
$dbname="testdb";
$conn=mysqli_connect($usname,$rname,$password,$dbname);
if(!$conn){
    echo "Connection failed";
}