<?php

require_once './lib.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once './controllers/PostController.php';
        post_index();
        break;
    case 'detail-post':
        require_once './controllers/PostController.php';
        post_detail();
        break;
    default:
        # code...
        break;
}
?>