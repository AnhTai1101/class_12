<?php
    include "models/frontend/listModel.php";
    class homeController extends Controller{
        use listModel;
        public function index(){
            $data = $this->list_money();
            $this->renderHTML("views/frontend/list.php",array("data"=>$data));
        }
    }
?>