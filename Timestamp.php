<?php

if($_SERVER["REQUEST_URI"] == '/php-api-endpoints/Timestamp.php') {
	return json_encode(array('Timestamp' => time()));
}

?>
