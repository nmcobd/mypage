<?php
	$link = new mysqli("localhost", "root", "123456", "mypage");
	if (!$link){
		echo "connect error";
	}
	$today = date("Y-m-d");
	$name = $_COOKIE["name"];
	$comments = $_POST["comments"];
	$sql = "UPDATE books SET end_date = ".$today.", comments = '".$comments."' WHERE name = '".$name."'";
	$res = $link->query($sql);
	if(!$res){
		die("update error".mysqli_error());
	}
	echo "update successfully.";
?>