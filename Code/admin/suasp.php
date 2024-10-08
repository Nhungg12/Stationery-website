
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .box {
      width: 550px;
      height: 500px;
      box-shadow: 0px 0px 3px gray;
      margin-left: 33%;
      margin-top: 150px;
      border-radius: 30px 30px 30px 30px;
    }
  </style>
</head>
<body>
    <?php
        include "db.php";
        $MA_SP = $_GET['MA_SP'];
        $query = mysqli_query($conn, "select * from sanpham where MA_SP = '$MA_SP'");
        $row = mysqli_fetch_array($query);
    ?>
<div class="box p-4 text-center position-absolute">
    <form method="POST" action="" enctype="multipart/form-data">
      <h3 style="margin-bottom: 30px;">Cập nhật thông tin sản phẩm</h3>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['MA_SP'] ?>" placeholder="Mã sản phẩm"
          name="MA_SP">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['TEN_SP'] ?>"  placeholder="Tên sản phẩm"
          name="TEN_SP">
      </div>
      <div class="mb-3">
        <input type="file" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['IMAGES'] ?>"
          name="IMAGES">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['PHAN_LOAI'] ?>" placeholder="Phân loại"
          name="PHAN_LOAI">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['DON_VI_TINH'] ?>"  placeholder="Đơn vị tính"
          name="DON_VI_TINH">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['DON_GIA_NHAP'] ?>" placeholder="Đơn giá nhập"
          name="DON_GIA_NHAP">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['SO_LUONG_NHAP'] ?>"  placeholder="Số lượng nhập"
          name="SO_LUONG_NHAP">
      </div>
      <button type="submit" value="" class="btn btn-success" name="update">Cập nhật</button>
    </form>
  </div>

  <?php
    if(isset($_POST['update'])){
        include "db.php";
        $MA_SP = $_GET['MA_SP'];
        $TEN_SP = $_POST['TEN_SP'];
        $PHAN_LOAI = $_POST['PHAN_LOAI'];
        $DON_VI_TINH = $_POST['DON_VI_TINH'];
        $DON_GIA_NHAP = $_POST['DON_GIA_NHAP'];
        $SO_LUONG_NHAP = $_POST['SO_LUONG_NHAP'];
        if ($_FILES['IMAGES']['error'] == 0) {
          $file = $_FILES['IMAGES'];
          $IMAGES = $file['name'];
          move_uploaded_file($file['tmp_name'], 'image/' . $file['name']);
          $sql = "update sanpham set TEN_SP = '$TEN_SP',IMAGES = '$IMAGES', PHAN_LOAI = '$PHAN_LOAI', DON_VI_TINH = '$DON_VI_TINH', 
          DON_GIA_NHAP = '$DON_GIA_NHAP', SO_LUONG_NHAP = '$SO_LUONG_NHAP' where MA_SP = '$MA_SP'";
          $query = mysqli_query($conn, $sql);
          if ($query) {
            header('location: admin.php');
          } else {
            echo ("Cập nhật thất bại");
          }
        } else {
          echo ("Upload ảnh bị lỗi!");
        }
    }

  ?>
</body>
</html>