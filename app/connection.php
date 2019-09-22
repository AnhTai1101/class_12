<?php
    class Connection{
        public function getInstance(){
            global $host;
            global $database;
            global $user;
            global $password;
            // tao bien ket noi
            $conn = new PDO("mysql:host=$host;dbname=$database","$user","$password");
            $conn->exec("set names 'utf8'");
            return $conn;
        }
    }
?>