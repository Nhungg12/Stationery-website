
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
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
<div class="row" style="background-color:darkgreen; height: 90px;">
    <div class="col-md-1"></div>
    <div class="col-md-3 mt-3">
      <a href="../index.php"><img src="../images/logo.webp" alt="" width="40%"></a>
      
    </div>
    <div class="col-md-4 mt-4">
      <div class="input-group mb-3">
        <select class="form-select" style="border-radius: 30px 0px 0px 30px;">
          <option>Tất cả</option>
          <option>VPP học sinh</option>
          <option>VPP văn phòng</option>
          <option>Phụ kiện</option>
          <option>Cặp - Túi sách</option>
          <option>Dụng cụ văn phòng</option>
        </select>
        <input class="form-control" type="text" placeholder="Tìm kiếm sản phẩm" style="width: 250px;">
        <button class="btn btn-warning" type="button" style="border-radius: 0px 30px 30px 0px;">
          <img src="images/icon1.png" alt="" width="20px"></button>
      </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3 mt-4">
      <img src="../images/icondangnhap.png" alt="" width="20px">
      <a href="Admin.php" class="link-text">Xin chào, Admin </a>
    </div>
  </div>
  <div class="row" style="border: 1px solid;">
    <div class="col-md-1"></div>
    <div class="col-md-9">
      <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color: orange;"><b>Quản lý sản phẩm</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nhanvien.php"><b>Quản lý nhân viên</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quanlynguoidung.php"><b>Quản lý người dùng</b></a>
              </li>
            </ul>
            <form class="d-flex">
              <img src="images/dienthoai.png" alt="" width="15px"> Holine: 092 4373 024
            </form>
          </div>
        </div>
      </nav>
    </div>
    <div class="col-md-1"></div>
  </div>
  <?php
    include "db.php";
    $query = mysqli_query($conn, "select * from sanpham");
  ?>
  <form action="" method="POST">
  <div class="container">
    <h3 style="text-align: center;margin-top: 50px;">QUẢN LÝ SẢN PHẨM</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col" style="background-color: gray;color: white;">Mã sản phẩm</th>
          <th scope="col"style="background-color: gray;color: white;">Tên sản phẩm</th>
          <th scope="col"style="background-color: gray;color: white;">Hình ảnh</th>
          <th scope="col"style="background-color: gray;color: white;">Phân loại</th>
          <th scope="col"style="background-color: gray;color: white;">Đơn vị tính</th>
          <th scope="col"style="background-color: gray;color: white;">Đơn giá</th>
          <th scope="col"style="background-color: gray;color: white;">Số lượng</th>
          <th scope="col"style="background-color: gray;color: white;">Sửa</th>
          <th scope="col"style="background-color: gray;color: white;">Xóa</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_array($query)) {?>
          <td>
            <?php echo $row['MA_SP'] ?>
          </td>
          <td>
            <?php echo $row['TEN_SP'] ?>
          </td>
          <td>
            <img src="image/<?php echo $row['IMAGES']?>" alt="" width="150px">
          </td>
          <td>
            <?php echo $row['PHAN_LOAI'] ?>
          </td>
          <td>
            <?php echo $row['DON_VI_TINH'] ?>
          </td>
          <td>
            <?php echo $row['DON_GIA_NHAP'] ?>
          </td>
          <td>
            <?php echo $row['SO_LUONG_NHAP'] ?>
          </td>
          <td><a class="btn" href="suasp.php?MA_SP=<?php echo $row['MA_SP']?>"><img src="../images/icon4.png" alt="" width="30px"></a></td>
          <td><a class="btn" href="xoasp.php?MA_SP=<?php echo $row['MA_SP']?>"><img src="../images/icon5.png" alt="" width="25px"></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <button type="submit" class="btn btn-success" style="font-size: 20px;"><a href="themsp.php"style="text-decoration: none;color:white" >Thêm sản phẩm</a></button>
  </div>
  </form>
</body>

</html>