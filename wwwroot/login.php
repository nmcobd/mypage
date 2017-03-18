<?php
	
	if(isset($_POST['name'])){
		if ($_POST['name'] == '梁猛'){
			
			header("Location:index.html");
		}
	}
?>
<!DOCTYPE html>
<html>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<head><title>个人主页登录</title></head>

<body>
	<div id="container">
		<p>Welcome To My Personal Page!!!</p>
		<form action="login.php" method=POST>
			Please input my Chinese name: <input type=text name="name"><br>
			<input type=submit name='sub' value="Hello">
		</form>
	</div>
</body>