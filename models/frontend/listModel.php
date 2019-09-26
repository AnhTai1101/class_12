<?php 
    trait listModel{
		public function list_money(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=1");
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
        // public function model_get($fromRecord,$recordPerPage){
		// 	//lay bien ket noi csdl
		// 	$conn = Connection::getInstance();			
		// 	//chuan bi cau truy van
		// 	$query = $conn->prepare("select * from noptien where trangthai=1 limit $fromRecord,$recordPerPage");
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
		public function money_output(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select money from ghichu");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->fetchAll();
			// tinh tong so tien
			//$d = $result*200000;
			// chia cách cách hàng ngìn và triệu bằng dấu chậm.
			//$d = strrev(chop(chunk_split(strrev($d),3,"."),"."));
			
			foreach($result as $d){
				static $c = 0;
				$c = $c + $d->money;
				// $b = $d->money;
				// $a = (int)$b;
				// $c = $c + $a;
			}
			$c= $c*1000;
			$e = strrev(chop(chunk_split(strrev($c),3,"."),"."));
            return $e;
        }
    }
?>