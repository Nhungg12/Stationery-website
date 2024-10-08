
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
      height: 550px;
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
        $MA_NV = $_GET['MA_NV'];
        $query = mysqli_query($conn, "select * from nhanvien where MA_NV = '$MA_NV'");
        $row = mysqli_fetch_array($query);
    ?>
<div class="box p-4 text-center position-absolute">
    <form method="POST" action="" enctype="multipart/form-data">
      <h3 style="margin-bottom: 30px;">Cập nhật thông tin nhân viên</h3>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['MA_NV'] ?>" placeholder="Mã nhân viên"
          name="MA_NV">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['HOTEN_NV'] ?>"  placeholder="Tên nhân viên"
          name="HOTEN_NV">
      </div>
      <div class="mb-3">
        <input type="file" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['IMAGES_NV'] ?>"
          name="IMAGES_NV">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['NGAY_SINH'] ?>" placeholder="Ngày sinh"
          name="NGAY_SINH">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['GIOI_TINH'] ?>"  placeholder="Giới tính"
          name="GIOI_TINH">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['DCHI'] ?>" placeholder="Địa chỉ"
          name="DCHI">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" value="<?php echo $row['SDT'] ?>"  placeholder="Số điện thoại"
          name="SDT">
      </div>
      <button type="submit" value="" class="btn btn-success" name="update">Cập nhật</button>
    </form>
  </div>

  <?php
    if(isset($_POST['update'])){
        include "db.php";
        $MA_NV = $_GET['MA_NV'];
        $HOTEN_NV = $_POST['HOTEN_NV'];
        $NGAY_SINH = $_POST['NGAY_SINH'];
        $GIOI_TINH = $_POST['GIOI_TINH'];
        $DCHI = $_POST['DCHI'];
        $SDT = $_POST['SDT'];
        if ($_FILES['IMAGES_NV']['error'] == 0) {
          $file = $_FILES['IMAGES_NV'];
          $IMAGES_NV = $file['name'];
          move_uploaded_file($file['tmp_name'], 'image/' . $file['name']);
          $sql = "update nhanvien set HOTEN_NV = '$HOTEN_NV',IMAGES_NV = '$IMAGES_NV', NGAY_SINH = '$NGAY_SINH', GIOI_TINH = '$GIOI_TINH', 
          DCHI = '$DCHI', SDT = '$SDT' where MA_NV = '$MA_NV'";
          $query = mysqli_query($conn, $sql);
          if ($query) {
            header('location: nhanvien.php');
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