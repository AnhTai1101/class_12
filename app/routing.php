<?php
    $area = "frontend";
    $controller = "home";
    $action = "index";
    $area = isset($_GET['area']) ? $_GET['area'] : "$area";
    $controller = isset($_GET['controller']) ? $_GET['controller'] : "$controller";
    $action = isset($_GET['action']) ? $_GET['action'] : "$action";
    $fileController = "controllers/$area/$controller"."Controller.php";
    if(file_exists($fileController)){
        include $fileController;
        // class
        $className = $controller."Controller";
        if(class_exists($className)){
            // tao obj
            $obj = new $className;
            $obj->$action();
        }else{
            die(" class $className Khong ton tai");
        }
    }else{
        die("no");
    }
?>