<?php
include 'db.php';
$result = $conn->query("SELECT TIME(created_at) AS jam FROM antrian ORDER BY created_at DESC")->fetch_assoc();
$result2 = $conn->query("SELECT TIME(created_at) AS jam2, kode FROM antrian ORDER BY created_at DESC")->fetch_assoc();
$jam = $result['jam'];
$jam2 = $result2['jam2'];
$kode = $result2['kode'];
if(Empty($jam)) { 
	echo "<font color=red>No Data!</font>"; } 
	else if($jam2 && $kode='10' || $jam2 && $kode='20'){ 
		echo '<font color=black>unit keluar pukul</font> ' . $jam2; }
		else { echo '<font color=black>unit masuk pukul</font> ' . $jam; }