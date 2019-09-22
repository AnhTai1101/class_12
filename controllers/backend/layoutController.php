<?php
    class layoutController{
        public function index(){
            unset($_SESSION['account']);
            header("location:index.php");
        }
    }
?>