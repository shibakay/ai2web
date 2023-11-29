<?php
// ファイルの内容を一度に全て読み込む
$content = file_get_contents("sample.txt");
echo $content;
echo '<br>';

// ファイルを行単位で読み込む
$lines = file("sample.txt");
foreach ($lines as $line) {
    echo $line;
    echo '<br>';
}

// ファイルストリームを使って読み込む
$handle = fopen("sample.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line;
        echo '<br>';
    }
    fclose($handle);
} else {
    // エラー処理
    echo "ファイルを開けませんでした。";
}

