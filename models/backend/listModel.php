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
        // public function list_money(){
        //     $conn = Connection::getInstance();
        //     $query = $conn->prepare("select * from noptien");
        //     $query -> setFetchMode(PDO::FETCH_OBJ);
        //     $query -> execute();
        //     $result = $query->rowCount();
        //     return $result;
        // }
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
        // lay record de truyen ra view
        // public function model_get($fromRecord,$recordPerPage){
		// 	//lay bien ket noi csdl
		// 	$conn = Connection::getInstance();			
		// 	//chuan bi cau truy van
		// 	$query = $conn->prepare("select * from noptien limit $fromRecord,$recordPerPage");
		// 	//chon che de duyet ban ghi
		// 	$query->setFetchMode(PDO::FETCH_OBJ);
		// 	//thuc hien truy van
		// 	$query->execute();
		// 	//duyet tat ca cac ban ghi nem ve mot bien
		// 	$result = $query->fetchAll();
		// 	return $result;
		// }
		public function list_content(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from ghichu");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
		public function Model_addContent(){
			$content = isset($_POST['content']) ? $_POST['content'] : 0;
			$content = ucfirst($content);
			$money = isset($_POST['money']) ? $_POST['money'] : 0;
			$date = isset($_POST['date']) ? $_POST['date'] : 0;
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("insert into ghichu set content=:content , date=:date, money=:money");
			//thuc thi truy van
			$query->execute(array("content"=>$content,"money"=>$money,"date"=>$date));
		}
		public function money_input(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=1");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->rowCount();
			// tinh tong so tien
			$d = $result*200000;
			// chia cách cách hàng ngìn và triệu bằng dấu chậm.
			$d = strrev(chop(chunk_split(strrev($d),3,"."),"."));
            return $d;
        }
    }
?>