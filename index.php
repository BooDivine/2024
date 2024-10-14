<?php

//宣告一個網頁參數，用HEREDOC包起來
$html = <<< HEREDOC

//驚嘆號+tab鍵，自動生成基本網頁的格式
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //這裡是要呈現的網頁內容
    <h1>Hello PHP!</h1>
</body>
</html>

HEREDOC;

echo $html;

?>
