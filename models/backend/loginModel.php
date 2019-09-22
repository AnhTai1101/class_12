<?php
    trait loginModel{
        public function get_id(){
            $account = isset($_POST['account']) ? $_POST['account'] : "";
            $password = isset($_POST['password']) ? $_POST['password'] : "";
            $password = md5($password);
            $conn = Connection::getInstance();
            $query = $conn->prepare("select account from user where account=:account and password=:password");
            $query->setFetchMode(PDO::FETCH_OBJ);
            $query->execute(array("account"=>$account,"password"=>$password));
            $result = $query->fetch();
            return $result;
            
        }
        
    }
?>