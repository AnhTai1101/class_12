<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ví dụ bảng biểu trong Bootstrap 4 --- dammio.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container-fluid">
  <h2>Basic Table</h2>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
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
</div>
 
</body>
</html>