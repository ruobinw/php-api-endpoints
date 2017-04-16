<?php

if($_SERVER["REQUEST_URI"] == '/Timestamp.php') {
	echo json_encode(array('Timestamp' => time()));
}

?>
