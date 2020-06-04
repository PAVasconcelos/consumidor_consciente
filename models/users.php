<?php

require("models/base.php");

class Users extends Base {

    public function login($data) {
        $data = $this->sanitizer($data);

        if(
            !empty($data["username"]) &&
            !empty($data["password"]) &&
            mb_strlen($data["password"]) <= 1000
        ) {
            $query = $this->db->prepare("
                SELECT user_name, user_password 
                FROM users
                WHERE user_name = ?, user_password = ?
            ");

            $query->execute([
                $data["username"],
                $data["password"]
            ]);

            $user = $query->fetch(PDO::FETCH_ASSOC);

            if(!empty($user)) {
                $_SESSION["username"] = $user["username"];

                echo 'Login';

                return $user;
            }
        }
    }
}

?>