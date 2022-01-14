<?php
require_once './models/Post.php';
require_once './models/Comment.php';
function post_index(){
    $posts = post_select_all();
    include_once './views/homepage.php';
}

function post_detail(){
    $id = $_GET['id'];
    $post = post_get_by_id($id);
    $comments = get_list_comment_by_post($id);
    // echo "<pre>";
    // var_dump($post);
    include_once './views/detail.php';
}

?>