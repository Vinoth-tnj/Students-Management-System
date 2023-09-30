<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","studentmsdb");

$sqlQuery = "SELECT id,st_id,stu_name,cgpa FROM cgpa ORDER BY cgpa DESC";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>