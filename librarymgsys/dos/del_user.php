<?php
		ob_start();
    require '../dbcon.php';
    $id = $_GET['petty_id'];
$sql = "DELETE FROM lib_users WHERE id='$id' ";
$res = mysqli_query($gift,$sql);

if ($res) {
	
	header("location:users.php");
}
?>

