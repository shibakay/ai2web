<?php
// ファイルに文字列を書き込む
file_put_contents("sample.txt", "ここに新しいテキストが追加されます。\n", FILE_APPEND);

// ファイルストリームを使って書き込む
$handle = fopen("sample.txt", "a");
if ($handle) {
    fwrite($handle, "追加のテキスト\n");
    fclose($handle);
} else {
    // エラー処理
    echo "ファイルを開けませんでした。";
}
?>
