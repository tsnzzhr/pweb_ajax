<?php
	include 'authenticate_db.php';
 
	echo "<option value=''>Pilih Provinsi</option>";
 
	$query = "SELECT DISTINCT provinsi FROM tbl_kodepos ORDER BY provinsi ASC;";
	$check = $db1->prepare($query);
	$check->execute();
	$res1 = $check->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['provinsi'] . "'>" . $row['provinsi'] . "</option>";
	}
?>