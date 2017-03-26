<?php
	header("Content-type: text/html;charset=utf-8");
	if(isset($_POST['bookname']) && isset($_POST['sub'])){
		$link = new mysqli('localhost', 'root', '123456', 'mypage');
		$link->query("set names utf8");
		if(!$link){
			die('connect error'.mysqli_error($link));
		}
		$today = date("Y-m-d");
		$name = $_POST['bookname'];
		$sql = "insert into books values('".$name."','".$today."', null, null)";
		$res = $link->query($sql);
		if(!$res){
			die('insert error'.mysqli_error($link));
		}
		echo "<h3>add successfully</h3>";
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>book info</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link ref='stylesheet' href='css/style.css' type='text/css'>
	</head>
	<body>
		<a id="back" href=index.html>返回首页</a><br>
		<form action='addbook.php' method=post>
			input your book name:
			<input type=text name=bookname>
			<input type=submit value=sub name=sub>
		</form>
	</body>
</html>