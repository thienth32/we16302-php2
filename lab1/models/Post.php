<?php
require_once './models/db.php';
function post_select_all(){
    $sql = "select 
                    p.*,
                    u.name as author_name,
                    (select count(*) from comments where post_id = p.id) as total_comment 
            from posts p
            join users u
            on p.author_id = u.id";
    return executeQuery($sql, true);
}
function post_get_by_id($id){
    $sql = "select 
                    p.*,
                    u.name as author_name,
                    (select count(*) from comments where post_id = p.id) as total_comment 
            from posts p
            join users u
            on p.author_id = u.id
            where p.id = $id";
    return executeQuery($sql, false);
}

?>