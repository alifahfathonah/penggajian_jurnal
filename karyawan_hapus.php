<?php
	include("sess_check.php");
		$id = $_GET['kry'];	
		$sql = "DELETE FROM karyawan WHERE karyawan_id='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: karyawan.php?act=delete&msg=success");
?>