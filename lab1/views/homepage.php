<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Total Comment</th>
        </thead>
        <tbody>
            <?php foreach($posts as $p): ?>
                <tr>
                    <td><?= $p['id']?></td>
                    <td>
                        <a href="<?= BASE_URL . 'detail-post?id=' . $p['id']?>"><?= $p['title']?></a>
                    </td>
                    <td><?= $p['author_name']?></td>
                    <td><?= $p['total_comment']?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>