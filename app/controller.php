<?php
    class Controller{
        public $layout = "";
        public $view = "";
        public function renderHTML($fileView,$data=NULL){
            if($data != NULL){
                extract($data);
            }
            // doc fileview
            ob_start();
            include $fileView;
            $this->view = ob_get_contents();
            ob_clean();
            // ket thuc phien lam viec
            // kiem tra xem co file layout k
            if(file_exists($this->layout)){
                include $this->layout;
            }else{
                echo $this->view;
            }
        }
        public function Authentication(){
            // day la ham xac thuc xem da dang nhap chua
            if($_SESSION['account'] == NULL){
                // neu khong co nghia la chua dang nhap
                // t chuyen huong ve login
                header("location:index.php?area=backend&controller=login");
            }
        }
    }
?>