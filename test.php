<html>
   
   <head>
      <title>Chuyển đổi định dạng ngày tháng trong PHP</title>
   </head>
   <body>
   
       <?php
        $dinh_dang_cu = "2016-09-29";  
		$dinh_dang_moi = date("d-m-Y", strtotime($dinh_dang_cu));  
		echo "Định dạng cũ: " .$dinh_dang_cu."<br>";
		echo "Định dạng mới: " .$dinh_dang_moi."<br>";
       ?>
       
   </body>
</html>