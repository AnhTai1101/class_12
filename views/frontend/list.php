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
  .container-fluid{
    margin-bottom: 30px;
  }
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
        <?php foreach($total as $rows): ?>
        <?php static $z=1; ?>
        <tr>
        <td><?php echo $z; ?></td>
        <td><?php echo $rows->name; ?></td>
        <td>200.000đ</td>
        </tr>
        <?php $z++; ?>
        <?php endforeach; ?>
    </tbody>
    <!-- them tong tien thu vao version1.1 -->
    <tr>
      <td>Tổng thu</td>
      <td></td>
      <td class="lead"><?php echo $money_input; ?>đ</td>
    </tr>
  </table>
    <h3 class="text-primary">- Nội dung chi tiêu năm 2019: </h3>
    <?php foreach($ghichu as $row): ?>
      <?php static $TongTieu; ?>
      <h4>&nbsp;&nbsp;+ Lần <?php echo $row->id ;?>:&nbsp;Ngày&nbsp;<?php echo date("d-m-Y", strtotime($row->date)); ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->content; ?>&nbsp;( <?php echo $row->money; ?>k )</h4>
      <?php $TongTieu = $TongTieu + $row->money; ?>
    <?php endforeach; ?>
    <h3 class="text-primary">- Tổng chi: &nbsp; <?php echo $money_output; ?>đ </h3>
</div>
<a href="index.php?area=frontend&controller=no"><span class="btn btn-primary">Danh sách các bạn chưa đóng tiền</span></a>
 
</body>
</html>