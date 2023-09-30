<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","studentmsdb");

$sqlQuery = "SELECT id,st_id,stu_name,sem5_sgpa FROM semsgpa ORDER BY sem5_sgpa DESC";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>