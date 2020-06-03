<?php

require("models/base.php");

class Subscribe extends Base {

    public function subscriber($data) {
        $data = $this->sanitizer($data);
        if(
            !empty($data["email"]) &&
            filter_var($data["email"], FILTER_VALIDATE_EMAIL) &&
            !empty($data["name"]) &&
            mb_strlen($data["name"]) > 2
        ) {
            $query = $this->db->prepare("
                INSERT INTO subscribers
                (subscriber_name, subscriber_email)
                VALUES(?, ?)
            ");
            
            $result = $query->execute([
                $data["name"],
                $data["email"]
                
            ]);

            return $result;
        }

    }
}
