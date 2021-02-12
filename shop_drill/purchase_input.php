<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>購入画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php if(!isset($_SESSION['customer'])){
		print "購入手続きを行うにはログインしてください。";
	} else if(empty($_SESSION['product'])){
		print "カートに商品がありません。";
	} else {?>
	<p>お名前:<?= $_SESSION['customer']['name'] ?></p>
	<p>ご住所:<?= $_SESSION['customer']['address'] ?></p>
	<hr>
	<p>内容をご確認いただき、購入を確定してください。</p>
	<a href="purchase_output.php">購入を確定する</a>
	<?php  }

	?>

	
	
</body>

</html>