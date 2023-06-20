<?php
	include_once 'dbh.php';

	$ename = $_POST['employeeName'];
	$dou = $_POST['inputDate'];
	$ec = $_POST['equipmentCode'];
	$equipDesc = $_POST['equipmentDesc'];
	//$in = $_POST['checkIn'];
	//$out = $_POST['checkOut'];	
	
	$conn = openConn();

	$stmt = $conn->prepare("INSERT INTO inventory(employee_name, date_of_use, equip_code, equip_desc) values(?, ?, ?, ?, ?)");

	$stmt->bind_param("issis", $eid, $ename, $dou, $ec, $equipDesc);
	$stmt->execute();
	echo "Registration succesful...";
	$stmt->close();
	closeConn($conn);

?>