<?php
require_once ('config.php');

// Su dung cho lenh: them sua xoa. Áp dụng cho câu truy vấn
function execute($sql) { 
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');
	mysqli_query($conn, $sql);
	mysqli_close($conn);
}

// Su dung cho lenh: select. Áp dụng cho câu truy vấn. 
function executeResult($sql) {
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');
	$resultset = mysqli_query($conn, $sql);
	$data      = [];
	while (($row = mysqli_fetch_array($resultset, 1)) != null) { 
		$data[] = $row;
	}
	mysqli_close($conn);
	return $data;
}