<?php
class Base {
    protected $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=consumidor_consciente;charset=utf8mb4", "root", "");
    }

}