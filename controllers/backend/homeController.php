<?php
    include "models/backend/listModel.php";
    class homeController extends Controller{
        use listModel;
        public function __construct()
        {
            $this->Authentication();
        }
        // file load danh sách lớp
        public function index(){
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
        }
        // hàm xóa danh sách đóng tiền
        public function delete_money(){
            $this->delete();
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
        }
        // thêm danh sách đóng tiền
        public function add_money(){
            $this->add();
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
        }
        // thêm danh sách lớp
        public function go_name(){
            $this->add_name();
            $data = $this->list_money();
            $this->renderHTML("views/backend/list.php",array("data"=>$data));
            header("location:index.php?area=backend&controller=home");
        }

    }
?>