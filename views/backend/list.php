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
    <h2 class="text-primary">Tab Quản lý</h2>         
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
			<ul class="pagination">
				<li class="btn text-primary">Trang</li>
				<?php for($i = 1; $i <= $numPage; $i++): ?>
				<li><a class="btn btn-primary" href="index.php?area=backend&controller=home&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>&nbsp;
				<?php endfor; ?>
			</ul>
  </div>
  <div class="container-fluid">
    <h3 class="text-primary">- Nội dung chi tiêu năm 2019:</h3>
    <?php foreach($ghichu as $row): ?>
      <h4>&nbsp;&nbsp;+ Lần <?php echo $row->id ;?>:<?php echo $row->content; ?></h4>
    <?php endforeach; ?>
    <form method="post" action="index.php?area=backend&controller=home&action=add_content">
    <div class="form-group">
      <h3 class="text-primary">Form Add name</h3>
      <label for="name">Nội dung chi tiêu</label>
      <input type="text" class="form-control" id="name" name="content" placeholder="Ngày trước Nội dung sau">
    </div>
    <button type="submit" class="btn btn-default text-primary">Thêm</button>
    </form>
  </div>
  <!-- <div class="container-fluid">
    <form method="post" action="index.php?area=backend&controller=home&action=go_name">
    <div class="form-group">
      <h3>Form Add name</h3>
      <label for="name">Tên</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên bạn học">
    </div>
    <button type="submit" class="btn btn-default text-primary">Thêm</button>
    </form>
  </div> -->
 
</body>
</html>