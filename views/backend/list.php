<!DOCTYPE html>
<html lang="en">
<head>
  <title>Class 12A3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <style>
.fa-envelope{
  font-size: 40px;
  position: fixed;
  right: 10px;
  top: 10px;
}
  </style>
<a href="index.php?area=backend&controller=logout"><i class="fa fa-envelope"></i></a></a> 
<div class="container-fluid">
  <h2>Tab Quản lý</h2>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th style="width: 10%;">STT</th>
        <th>Họ Tên</th>
        <th>Số Tiền</th>
        <th style="width: 10%;">Trạng thái</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $rows): ?>
        <tr>
        <td><?php echo $rows->id; ?></td>
        <td><?php echo $rows->name; ?></td>
        <td>200.000đ</td>
        <td><a href="index.php?area=backend&controller=home&action=<?php echo $rows->trangthai==1?"delete":"add"; ?>_money&id=<?php echo $rows->id; ?>"><span class="text-<?php echo $rows->trangthai==1?"danger":"primary"; ?>"><?php echo $rows->trangthai==1?"Xóa":"Thêm"; ?></span></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>
 
</body>
</html>