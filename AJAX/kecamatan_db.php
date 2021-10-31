<?php
	include 'authenticate_db.php';
	$kabupaten = $_POST['kabupaten'];
 
	echo "<option value=''>Pilih Kecamatan</option>";
 
	$query = "SELECT DISTINCT kecamatan FROM tbl_kodepos WHERE kabupaten=? ORDER BY kecamatan ASC";
	$check = $db1->prepare($query);
	$check->bind_param("s", $kabupaten);
	$check->execute();
	$res1 = $check->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['kecamatan'] . "'>" . $row['kecamatan'] . "</option>";
	}
?>