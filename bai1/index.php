<?php
// lấy danh sách tất cả các bài viết kèm theo tên tác giả và số lượng comment
// hiển thị danh sách dạng table

// 1 tạo kết nối
$connect = new PDO("mysql:host=127.0.0.1;dbname=we16302-php2;charset=utf8", "root", "12345678");
// 2 chuẩn bị câu sql
$sql = "select 
        p.*,
        u.name as author_name,
        (select count(*) from comments c where c.post_id = p.id) as count_comment
    from posts p
    join users u
    on p.author_id = u.id";
// 3 thực thi câu sql
$stmt = $connect->prepare($sql);
$stmt->execute();
// 4 lấy dữ liệu trả về từ câu sql
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<table>
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Comment</th>
    </thead>
    <tbody>
        <?php foreach($posts as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['title'] ?></td>
                <td><?= $p['author_name'] ?></td>
                <td><?= $p['count_comment'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>