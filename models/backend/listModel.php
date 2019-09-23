<?php 
    trait listModel{
        public function list_money(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
            $result = $query->fetchAll();
            return $result;
        }
        public function delete(){
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("update noptien set trangthai=0 where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
        }
        public function add(){
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("update noptien set trangthai=1 where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
        }
        public function add_name(){
            $name = isset($_POST['name']) ? $_POST['name'] : 0;
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("insert into noptien set name=:name, sdt=1, trangthai=0,facebook=0, tien=200");
			//thuc thi truy van
			$query->execute(array("name"=>$name));
        }
    }
?>