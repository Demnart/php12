<?php

foreach ($result as $value){
    echo $value['title'] . '<br>' . $value['text'] . '<br>' . $value['author'];
}
?>
<html>
<head>
    <title></title>
</head>
<body>
<a href="/view/add.php">Добавить новость</a>
</body>
</html>
