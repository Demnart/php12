<html>
<head>
    <title></title>
</head>
<body>
<?php foreach ($result as $value): ?>
<table style="border: 1px solid black; border-collapse: collapse; margin: 0 auto;">
    <tr>
        <th style="border: 1px solid black;"><?php echo $value['title']?></th>
    </tr>
    <tr>
        <td style="border: 1px solid black"><?php echo $value['text']?></td>
    </tr>
     <tr>
         <td style="border: 1px solid black"><?php echo $value['author']?></td>
     </tr>
</table>
<?php endforeach;?>
<a href="/view/add.php">Добавить новость</a>
</body>
</html>
