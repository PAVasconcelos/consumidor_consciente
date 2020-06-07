<?php

require_once("models/base.php");

class Users extends Base {

    public function login($data) {
        $data = $this->sanitizer($data);

        if(
            !empty($data["username"]) &&
            !empty($data["password"]) &&
            mb_strlen($data["password"]) <= 1000
        ) {
            $query = $this->db->prepare("
                SELECT user_name 
                FROM users
                WHERE user_password = ?
            ");

            $query->execute([
                $data["password"],
            ]);

            $user = $query->fetch(PDO::FETCH_ASSOC);

            print_r($user);
            
            if(!empty($user) ) {
                $_SESSION["name"] = $data["username"];

                echo 'Login';

                return true;
            }

            return false;
        }
    }
}

?>