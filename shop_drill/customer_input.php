<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<form action="customer_output.php" method="post">

<table>
	<tr><th><label for="name">お名前:</label></th>
	<td><input type="text" name="name" value=""></td></tr>

	<tr><th><label for="name">住所:</label></th>
	<td><input type="text" name="address" value=""></td></tr>

	<tr><th><label for="name">ログイン名:</label></th>
	<td><input type="text" name="login" value=""></td></tr>

	<tr><th><label for="name">パスワード:</label></th>
	<td><input type="text" name="password" value=""></td></tr>

	<tr><th><input type="submit" value="ログイン"></th></tr>


</table>
</form>

	

	</body>

</html>