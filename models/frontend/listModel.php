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
    }
?>