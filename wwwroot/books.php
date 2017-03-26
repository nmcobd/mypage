<html>
	<head>
		<title>Welcome to LM</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		
		<p class='h2'>读万卷书，行万里路</p>
		<a href=addbook.php>add book</a>
		<a id="back" href=index.html>返回首页</a>
		<ul>
			<li>
				reading...
				<ul>
					<?php
						$link = new mysqli('localhost', 'root', '123456', 'mypage');
						$link->set_charset("utf8");
						if (!$link){
							die('connect error'. mysqli_connect_error());
						}
						$sql = "SELECT name, start_date FROM books where end_date is null";
						$res = $link->query($sql);
			
						if ($res->num_rows > 0){
							while($row = $res->fetch_assoc()){
								echo "<li>《".$row["name"]."》, 开始于".$row["start_date"];
								echo ".<a href=close_book.php?name=".$row["name"]." >阅读完毕</a>"."</li>";
							}
						}
					?>
				</ul>
			</li>
			<li>
				done...
				<ul>
					<?php
						$sql = "SELECT name, start_date, end_date FROM books where end_date is not null";
						$res = $link->query($sql);
			
						if ($res->num_rows > 0){
							while($row = $res->fetch_assoc()){
								echo "<li>《".$row["name"]."》, 开始于".$row["start_date"].",结束于".$row["end_date"].".</li>";
							}
						}
					?>
				</ul>
			</li>
		</ul>
		
	</body>
</html>