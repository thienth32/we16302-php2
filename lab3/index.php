<?php
require_once './vendor/autoload.php';
use App\Core\Form;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        Tạo ra form
    </h3>
    <?php $form = Form::begin("http://google.com", "get");?>
    <?php Form::end() ?>
</body>
</html>