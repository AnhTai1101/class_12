<?php
    include "models/frontend/listModel.php";
    class homeController extends Controller{
        use listModel;
        // lay so record trong trang
        public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 10;
			//----
			//phan trang	
			//tinh tong so ban ghi
			$total = $this->list_money();			
			//tinh tong so trang
			$numPage = ceil($total/$recordPerPage);//ham ceil de lay tran
			//lay bien p truyen tu url -> bien nay the hien la dang o may
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			//----
			//goi ham model_get() trong class userModel de lay du lieu
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/frontend/list.php", array("data"=>$data,"numPage"=>$numPage));
		}

    }
?>