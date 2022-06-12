<?php
$name = $_POST["name"];
$style = $_POST["style"];
$num = $_POST["number"];
$c = ",";

// ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
// error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$style.$c.$num;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>送信完了
</title>
</head>
<body>
<?php

?>
<h1>送信しました</h1>
<h2><a class="check" href="read.php">あなたに最適なお出かけプランを確認してみよう！--></a></h2>

<a class="back" href="post.php"><--戻る</a>

</body>
</html>