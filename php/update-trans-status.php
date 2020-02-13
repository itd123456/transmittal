<?php

	require('database.php');

	$db = new Database();

	$id = $_POST['id'];

	$update = "UPDATE trans_list
			   SET status = true, date_received = NOW()
			   WHERE id = $id";

	$db->execQuery($update);

?>