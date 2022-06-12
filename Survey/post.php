<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>お出かけプラン提案サイト</title>
</head>
<body>
<h1>あなたにぴったりのお出かけプランは？</h2>
<h2>簡単なアンケートに答えて、あなたにぴったりのお出かけプランを見つけよう！</h2>
<form action="write.php" method="post">
	<dl>
		<dt>お名前<div style="color: red; font-size: 12px; display: inline-block">(必須)</div>: </dt>
		<dd><input type="text" name="name" required></dd>
		<dt>あなたはどっち派？<div style="color: red; font-size: 12px; display: inline-block">(必須)</div>: </dt>
		<dd><input type="radio" name="style" value="インドア" required>インドア<input type="radio" name="style" value="アウトドア" required>アウトドア</dd>
		<dt>人数は？<div style="color: red; font-size: 12px; display: inline-block">(必須)</div>: </dt>
		<dd><input type="radio" name="number" value="一人がいい" required>一人がいい<input type="radio" name="number" value="複数人がいい" required>複数人がいい</dd>
	</dl>
	<input type="submit" value="送信">
</form>
<ul>
<!-- <li><a href="index.php">index.php</a></li> -->
</ul>
</body>
</html>