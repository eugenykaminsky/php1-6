<?php
require_once __DIR__ . '/Class/GuestBook.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$path = __DIR__ . '/data.txt';
$guest = new GuestBook($path);
$guest -> getData();
$guest -> append("Еще одна новая запись2");
$guest -> save(); ?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <button type="submit">Отправить</button>
</form>


</body>
</html>
