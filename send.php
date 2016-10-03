<?php
//$_POST['email']
//$_POST['mobile']
//$_POST['message']
	$conn = new mysqli('localhost', 'arksit_user', '654321', 'arksit_db');
	$sql = "INSERT INTO message (email, mobile, message) VALUES ('".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['message']."')";
	$conn->query($sql);
?>