<?php
    class homeController extends Controller{
        public function __construct()
        {
            $this->Authentication();
        }
        public function index(){
           $this->renderHTML("views/backend/home.php");
        }
    }
?>