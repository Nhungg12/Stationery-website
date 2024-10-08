<?php
include "db.php";
if (isset($_POST['themsp'])) {
  $MA_SP = $_POST['MA_SP'];
  $TEN_SP = $_POST['TEN_SP'];
  $PHAN_LOAI = $_POST['PHAN_LOAI'];
  $DON_VI_TINH = $_POST['DON_VI_TINH'];
  $DON_GIA_NHAP = $_POST['DON_GIA_NHAP'];
  $SO_LUONG_NHAP = $_POST['SO_LUONG_NHAP'];
  if ($_FILES['IMAGES']['error'] == 0) {
    $file = $_FILES['IMAGES'];
    $IMAGES = $file['name'];
    move_uploaded_file($file['tmp_name'], 'image/' . $file['name']);
    $sql = "INSERT INTO sanpham(MA_SP,TEN_SP,IMAGES,PHAN_LOAI,DON_VI_TINH,DON_GIA_NHAP,SO_LUONG_NHAP) VALUES 
    ('$MA_SP','$TEN_SP','$IMAGES','$PHAN_LOAI','$DON_VI_TINH','$DON_GIA_NHAP','$SO_LUONG_NHAP')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
      header('location: admin.php');
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
      <h3 style="margin-bottom: 30px;">THÊM SẢN PHẨM</h3>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="MA_SP"
          placeholder="Mã sản phẩm" name="MA_SP">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="TEN_SP"
          placeholder="Tên sản phẩm" name="TEN_SP">
      </div>
      <div class="mb-3">
        <input type="file" style="height: 40px;width: 500px;" class="form-control sign" id="IMAGES"
          placeholder="Ảnh minh họa" name="IMAGES">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="PHAN_LOAI"
          placeholder="Phân loại" name="PHAN_LOAI">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="DON_VI_TINH"
          placeholder="Đơn vị tính" name="DON_VI_TINH">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="DON_GIA_NHAP"
          placeholder="Đơn giá nhập" name="DON_GIA_NHAP">
      </div>
      <div class="mb-3">
        <input type="text" style="height: 40px;width: 500px;" class="form-control sign" id="SO_LUONG_NHAP"
          placeholder="Số lượng nhập" name="SO_LUONG_NHAP">
      </div>
      <button type="submit" value="them" class="btn btn-success" style="width:130px; font-size: 20px"
        name="themsp">Thêm</button>
    </form>
  </div>
</body>

</html>