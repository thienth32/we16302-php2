<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?= $post['title']?></h2>
    <p>Tác giả: <?= $post['author_name']?></p>
    <p>Số bình luận: <?= $post['total_comment']?></p>
    <hr>
    <h3>Bình luận</h3>
    <ul>
        <?php foreach($comments as $c): ?>
            <li>
                <?= $c['content']?> - <?= $c['author']?>
            </li>
        <?php endforeach?>
    </ul>
</body>
</html>