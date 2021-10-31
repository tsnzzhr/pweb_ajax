<?php
	include 'authenticate_db.php';
	$provinsi = $_POST['provinsi'];
 
	echo "<option value=''>Pilih Kabupaten</option>";
 
	$query = "SELECT DISTINCT kabupaten FROM tbl_kodepos WHERE provinsi=? ORDER BY kabupaten ASC";
	$check1 = $db1->prepare($query);
	$check1->bind_param("s", $provinsi);
	$check1->execute();
	$res1 = $check1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['kabupaten'] . "'>" . $row['kabupaten'] . "</option>";
	}
?>