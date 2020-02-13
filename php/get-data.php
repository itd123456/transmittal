<?php

	require('database.php');

	$database = new Database();

	$stat = $_POST['stat'];

	$sql = "SELECT id, track_no, branch, status, DATE_FORMAT(date, '%W, %e %M %Y') AS date
			FROM trans_list
			WHERE status = $stat";

	$record = $database->fetchAll($sql);
?>