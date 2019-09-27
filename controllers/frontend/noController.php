<?php
    include "models/frontend/listModel.php";
    class noController extends Controller{
        use listModel;
        public function index(){
            $no_money = $this->no_money();
            $this->renderHTML("views/frontend/no_money.php",array("no_money"=>$no_money));
        }
    }
?>