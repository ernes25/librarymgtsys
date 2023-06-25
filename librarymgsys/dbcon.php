<?php
$host = "localhost";
$user ="root";
$password = "";
$db ="nestwave_library";
$gift =mysqli_connect($host,$user,$password,$db);
//$conn = mysqli_connect('localhost','root','','northridge_junior_school');


   // Check connection
    if (!$gift) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>