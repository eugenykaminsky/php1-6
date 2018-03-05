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
$data = __DIR__ . '/data.txt';
$guest = new GuestBook($data);
$x = $guest -> getData();
var_dump($x);
$guest -> append("Привет, мир");
$y = $guest -> line;
var_dump($y);
$guest -> save();
?>


</body>
</html>
