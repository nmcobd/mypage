<html>
	<head>
		<title>close book</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		
		<p class=h2>Confirm and Write Something</p>
		<a id="back" href=index.html>返回首页</a><br>
		<?php
			setcookie('name', $_GET["name"])
		?>
		<form action=close.php method="post">
			<textarea name="comments">这本书</textarea>
			<br>
			<input type="submit" value="sub" name="sub"> 
		</form>
	</body>
</html>