<?php
$host = "localhost";
$user ="root";
$password = "";
$db ="northrid-northridge_junior_school";
$data =mysqli_connect($host,$user,$password,$db);
//$conn = mysqli_connect('localhost','root','','northridge_junior_school');


   // Check connection
    if (!$data) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>