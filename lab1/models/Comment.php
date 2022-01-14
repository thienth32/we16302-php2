<?php
require_once './models/db.php';
function get_list_comment_by_post($post_id){
    $sql = "select 
                    c.*,
                    u.name as author
            from comments c
            join users u
            on c.author_id = u.id
            where c.post_id = $post_id";
    return executeQuery($sql, true);

}

?>