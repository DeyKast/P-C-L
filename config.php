<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'pclegend');

if (!$conn) {
	echo 'Connection error: ' . mysqli_connect_error();
}

?>