<?php
    include "models/backend/listModel.php";
    class homeController extends Controller{
        use listModel;
        public function __construct()
        {
            $this->Authentication();
        }
        public function index(){
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
        }
        public function delete_money(){
            $this->delete();
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
        }
        public function add_money(){
            $this->add();
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
        }

    }
?>