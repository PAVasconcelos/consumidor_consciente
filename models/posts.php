<?php

require_once("models/base.php");

class Posts extends Base {

    public function getList() {
        $query = $this->db->prepare("
            SELECT post_id, post_title, post_date
            FROM posts
            ORDER BY post_date ASC
        ");

        $query->execute();

        $posts = $query->fetchAll(PDO::FETCH_ASSOC);

        return $posts;
    }

    public function createPost($data) {
        $data = $this->sanitizer($data);
        if (!empty($data["title"]) && !empty($data["content"])) {      
            $query = $this->db->prepare("
                INSERT INTO posts
                (post_title, post_message)
                VALUES(?, ?)
            ");
            $query->execute([
                $data["title"],
                $data["content"]
            ]);

            
        }

    }

    public function deletePost($id) {
        $query = $this->db->prepare("
            DELETE
            FROM posts
            WHERE post_id = ?
        ");

        $result = $query->execute([ $id ]);
        
    }


}