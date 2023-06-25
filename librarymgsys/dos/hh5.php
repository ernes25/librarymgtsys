<?php 



require '../dbcon.php';
$k = $_POST['x']
$sqll ="SELECT * from lib_users WHERE id={$k}";
$resu = mysqli_query($gift,$sqll);
while ($rows = mysqli_fetch_array($resu)) {
	$dat['class'] = $rows["class"];
	// code...
}
echo json_encode($dat);




 ?>