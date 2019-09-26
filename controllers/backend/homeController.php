<?php
    include "models/backend/listModel.php";
    class homeController extends Controller{
        use listModel;
        public function __construct()
        {
            $this->Authentication();
        }
        // file load danh sách lớp
        // public function index(){
        //     $data = $this->list_money();
        //     $this->renderHTML("views/backend/list.php",array("data"=>$data));
        // }
        // hàm xóa danh sách đóng tiền
        public function delete_money(){
            $this->delete();
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
            header("location:index.php?area=backend&controller=home");
        }
        // thêm danh sách đóng tiền
        public function add_money(){
            $this->add();
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
            header("location:index.php?area=backend&controller=home");
        }
        // thêm danh sách lớp
        public function go_name(){
            $this->add_name();
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
            header("location:index.php?area=backend&controller=home");
        }
        // lay so record trong trang
        public function index(){
			//quy dinh so ban ghi tren mot trang
			//$recordPerPage = 10;
			//----
			//phan trang	
			//tinh tong so ban ghi
			$total = $this->list_money();			
			//tinh tong so trang
			//$numPage = ceil($total/$recordPerPage);//ham ceil de lay tran
			//lay bien p truyen tu url -> bien nay the hien la dang o may
			//$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			//$fromRecord = $p*$recordPerPage;			
			//----
			//goi ham model_get() trong class userModel de lay du lieu
            //$data = $this->model_get($fromRecord,$recordPerPage);
            $ghichu = $this->list_content();
            $money_input = $this->money_input();
			$this->renderHTML("views/backend/list.php", array("total"=>$total,"ghichu"=>$ghichu,"money_input"=>$money_input));
		}
        public function add_content(){
            $this->Model_addContent();
            header("location:index.php?area=backend&controller=home");
        }
    }
?>