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
.fa-home{
  font-size: 40px;
  position: fixed;
  right: 10px;
  top: 10px;
}
</style>
<div class="container-fluid">
<a href="index.php?area=backend"><i class="fa fa-home"></i></a></a> 

  <h2 class="text-primary">Danh sách các bạn đóng tiền đợt 2</h2>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th style="width: 10%;">STT</th>
        <th>Họ Tên</th>
        <th>Số Tiền</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $rows): ?>
        <tr>
        <td><?php echo $rows->id; ?></td>
        <td><?php echo $rows->name; ?></td>
        <td>200.000đ</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
  <ul class="pagination">
    <li class="btn text-primary">Trang</li>
    <?php for($i = 1; $i <= $numPage; $i++): ?>
    <li><a class="btn btn-primary" href="index.php?area=frontend&controller=home&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>&nbsp;
    <?php endfor; ?>
  </ul>
  <h3 class="text-primary">- Nội dung chi tiêu năm 2019:</h3>
    <?php foreach($ghichu as $row): ?>
      <h4>&nbsp;&nbsp;+ Lần <?php echo $row->id ;?>:<?php echo $row->content; ?></h4>
    <?php endforeach; ?>
</div>
 
</body>
</html>