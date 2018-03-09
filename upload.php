<?php
require_once __DIR__ . '/Class/Uploader.php';

$files = new Uploader('myimg');
$x = $files -> name;
echo $x;
if($files -> isUploaded()) {
    var_dump($_FILES);
}else {
    echo "загрузите файл";
}
$files -> upload();