<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/controllers/add.php" method="post">
<table style="margin: 0 auto; border: 1px solid black;border-collapse: collapse;text-align: center">
    <tr>
        <th style="border: 1px solid black" colspan="3">Добавьте новость</th>
    </tr>
    <tr>
        <td style="border: 1px solid black"><label for="title">Название новости :</label></td>
        <td style="border: 1px solid black" colspan="2"><input type="text" placeholder="Название новости" id="title" name="title"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black"><label for="text">Текст новости</label></td>
        <td style="border: 1px solid black" colspan="2"><textarea name="text" id="text" cols="30" rows="10"></textarea></td>
    </tr>
    <tr>
        <td style="border: 1px solid black"><label for="autor">Автор</label></td>
        <td style="border: 1px solid black" colspan="2"><input type="text" id="autor" name="author" placeholder="Автор"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black" colspan="3"><input type="submit" value="Отправить"></td>
    </tr>
</table>
</form>
<p style="text-align: center"><a href="/index.php">На главную</a></p>
</body>
</html>