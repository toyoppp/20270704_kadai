<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    みんなが好きなうどんと天ぷら
</body>

<body>
    
</body>

<?php
//文字作成
$str = $_POST["name"].$_POST["udon"].$_POST["tempura"];
//File書き込み
$file = fopen("./data/data.txt", "a");    // ファイル読み込み
var_dump($file);

fwrite($file, $str . "\n");
fclose($file);
?>

<?php 

$file = fopen("data/data.txt", "r");

while (!feof($file)) {

$line = fgets($file);
echo $line;
}

fclose($file);

?>

</html>