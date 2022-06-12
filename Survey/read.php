<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>あなたにおすすめするのは...</h1>
    <?php

    function h($s){
    return htmlspecialchars($s, ENT_QUOTES);
}

    $file = fopen('data/data.txt', 'r');

    echo '<table border>
        <tr>
        <th>お名前</th>
        <th>インドア or アウトドア</th>
        <th>一人 or 複数人</th>
        <th>おすすめのお出かけプラン</th>
        </tr>';

    while ($str = fgets($file)){
        $ary = explode(',', $str);
        echo '<tr>';
        echo '<td>'.h($ary[1]).'</td>';
        echo '<td>'.h($ary[2]).'</td>';
        echo '<td>'.h($ary[3]).'</td>';
        foreach($ary as $line){
        }
        if(rtrim($ary[2]) == 'インドア' && rtrim($ary[3]) == '一人がいい'){
            echo '<td style="color: red">'.'漫画喫茶'.'</td>';
        } else if(rtrim($ary[2]) == 'インドア' && rtrim($ary[3]) == '複数人がいい'){
            echo '<td style="color: red">'.'カラオケ'.'</td>';
        } else if(rtrim($ary[2]) == 'アウトドア' && rtrim($ary[3]) == '一人がいい'){
            echo '<td style="color: red">'.'キャンプ'.'</td>';
        } else{
            echo '<td style="color: red">'.'ドライブ'.'</td>'; 
        }
        echo '</tr>';
    }

    echo '</table>';

    fclose($file);

    ?>

<dvi class ="back_home"><a href="post.php">ホームに戻る</a></div>

</body>
</html>