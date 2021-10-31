<?php
	include 'authenticate_db.php';
	$kecamatan = $_POST['kecamatan'];
 
	echo "<option value=''>Pilih Kelurahan</option>";
 
	$query = "SELECT DISTINCT kelurahan FROM tbl_kodepos WHERE kecamatan=? ORDER BY kelurahan ASC";
    
	$check = $db1->prepare($query);
	$check->bind_param("s", $kecamatan);
	$check->execute();
	$res1 = $check->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['kelurahan'] . "'>" . $row['kelurahan'] . "</option>";
	}
?>