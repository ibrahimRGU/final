<?php
	include("check.php");	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<a href="comments.php" style="font-size:18px">comment</a>
<body>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>
<br><br><br>
<a href="logout.php" style="font-size:18px">Logout?</a>
</body>
</html>

