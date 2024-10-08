<?php
include "db.php";
if (isset($_POST['themnv'])) {
  $MA_NV = $_POST['MA_NV'];
  $HOTEN_NV = $_POST['HOTEN_NV'];
  $NGAY_SINH = $_POST['NGAY_SINH'];
  $GIOI_TINH = $_POST['GIOI_TINH'];
  $DCHI = $_POST['DCHI'];
  $SDT = $_POST['SDT'];
  if ($_FILES['IMAGES_NV']['error'] == 0) {
    $file = $_FILES['IMAGES_NV'];
    $IMAGES_NV = $file['name'];
    move_uploaded_file($file['tmp_name'], 'image/' . $file['name']);
    $sql = "INSERT INTO nhanvien(MA_NV,HOTEN_NV,IMAGES_NV,NGAY_SINH,GIOI_TINH,DCHI,SDT) VALUES 
    ('$MA_NV','$HOTEN_NV','$IMAGES_NV','$NGAY_SINH','$GIOI_TINH','$DCHI','$SDT')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
      header('location: nhanvien.php');
    } else {
      echo ("Thêm thất bại");
    }
  } else {
    echo ("Upload ảnh bị lỗi!");
  }
}
?>
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
    .nav-link {
      color: darkgreen;
      text-decoration: none;
      position: relative;
    }

    .link-text {
      color: aliceblue;
      position: relative;
      padding: 5px 0px;
      text-decoration: none;
    }

    .link-text:hover {
      color: rgb(255, 149, 0);
    }

    .nav-link::after {
      content: "";
      position: absolute;
      height: 3px;
      width: 100%;
      background-color: rgb(255, 128, 0);
      transform: scale(0);
      bottom: 0;
      left: 0;
      transition: all 0.4s ease-in-out;
    }

    .nav-link:hover {
      color: rgb(255, 149, 0);
    }

    .nav-link:hover::after {
      transform: scale(1);
    }
  </style>
</head>

<body>
  <div class="box p-4 text-center position-absolute">
    <form method="POST" action="" enctype="multipart/form-data">
      <h3 style="margin-bottom: 30px;">THÊM NHÂN VIÊN</h3>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="MA_NV"
          placeholder="Mã nhân viên" name="MA_NV">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="HOTEN_NV"
          placeholder="Tên nhân viên" name="HOTEN_NV">
      </div>
      <div class="mb-3">
        <input type="file" style="height: 40px;width: 500px;" class="form-control sign" id="IMAGES_NV"
          placeholder="Ảnh nhân viên" name="IMAGES_NV">
      </div>
      <div class="mb-3">
        <input type="datetime" style="height: 40px;width: 500px;" class="form-control sign" id="$NGAY_SINH"
          placeholder="Ngày sinh nhân viên" name="NGAY_SINH">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="$GIOI_TINH"
          placeholder="Giới tính" name="GIOI_TINH">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="$DCHI"
          placeholder="Địa chỉ" name="DCHI">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="SDT"
          placeholder="Số điện thoại" name="SDT">
      </div>
      <button type="submit" value="them" class="btn btn-success" style="width:130px; font-size: 20px"
        name="themnv">Thêm</button>
    </form>
  </div>
</body>

</html>