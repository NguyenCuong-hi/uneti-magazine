<?php

namespace App;

use Database\DataBase;

class ViewPost
{
    public function index($id){
        $db = new DataBase();
        $result_file = $db->select('SELECT  file.* FROM file WHERE id = ? ', [$id])->fetch();

        $post = $db->select('SELECT * FROM posts WHERE id = ?', [$result_file['id_post']])->fetch();

        require_once(BASE_PATH . '/template/app/show_post.php');
    }

}