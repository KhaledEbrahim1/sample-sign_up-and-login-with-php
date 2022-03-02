<?php


$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cafesystem";


$conn =mysqli_connect($servername,$dbusername,$dbpassword,$dbname);


if (!$conn ) {
	die("connection filed" .mysqli_connect_error() );
}