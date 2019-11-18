<?php
    function getConnection()
    {
		$conn = mysqli_connect('localhost', 'root', '', 'aiubian');
		return $conn;
	}
?>