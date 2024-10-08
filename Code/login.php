
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/Logo.png">
  <title>Alena</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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

    .box {
      width: 380px;
      height: 450px;
      box-shadow: 0px 0px 3px gray;
      margin-left: 35%;
      margin-top: 70px;
    }

    .sign {
      background-color: #EBEBEB;
    }

    .btn:hover {
      border: none;
      background-color: rgb(230, 133, 23);
    }
  </style>
</head>

<body>
  <div class="row" style="background-color:darkgreen; height: 90px;">
        <div class="col-md-1"></div>
        <div class="col-md-3 mt-3">
        <a href="index.php"><img src="images/logo.webp" alt="" width="40%"></a>
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
            <img src="images/icondangnhap.png" alt="" width="20px">
            <a href="login.php" class="link-text">Đăng nhập </a> <span style="color: aliceblue;">/</span>
            <a href="register.php" class="link-text">Đăng ký </a><span style="color: aliceblue;">|</span>
            <img src="images/icon3.png" alt="" width="20px">
            <a href="giohang.html" class="link-text">Giỏ hàng</a>
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
                                <a class="nav-link" href="index.php" style="color: orange;"><b>Trang chủ</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sanpham.php"><b>Sản phẩm</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><b>Tin tức</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><b>Liên hệ</b></a>
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
    
    <!-- Đăng nhập -->
  <div class="box p-4 text-center position-absolute">
    <form method="post" action="login_process.php">
      <h3>Đăng nhập</h3>
      <div class="mb-3">
        <input type="email" style="height: 40px;" class="form-control sign" id="email" placeholder="Email"
          name="email">
      </div>
      <div class="mb-3">
        <input type="password" style="height: 40px;" class="form-control sign" id="password" placeholder="Mật khẩu"
          name="password">
      </div>
      <button type="submit" style="width: 330px; height: 40px; color: aliceblue;" class="btn btn-success">Đăng
        nhập</button>
      <br><br>
      <p> Hoặc đăng nhập bằng:</p>
      <img src="images/fb.svg" alt="" width="150px">
      <br><br>
      <img src="images/gg.svg" alt="" width="150px">
    </form>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-dark " style="color: aliceblue; margin-top: 700px;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>LIỆN HỆ VỚI CHÚNG TÔI:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <img src="images/fb (2).png" alt="" width="70px" style="margin-left: 5px;">
        <img src="images/it.png" alt="" width="40px" style="margin-left: 5px;">
        <img src="images/tw.png" alt="" width="30px" style="margin-left: 30px;">
        <img src="images/gg.png" alt="" width="30px" style="margin-left: 30px;">

      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-4 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i><img src="images/logo.webp" alt="" width="150px">
            </h6>
            <p style="color: darkorange; font-size: 20px;">
            Shop bán văn phòng phẩm stationery
            </p>
            <img src="images/vitri.png" alt="" width="20px"> Địa chỉ: Tầng 6, Tòa nhà Ladeco, 266 Đội Cấn, Phường Liễu
            Giai, Quận Ba Đình, TP Hà Nội
            <p></p>
            Giờ làm việc: Từ 9:00 đến 22:00 các ngày trong tuần từ Thứ 2 đến Chủ nhật</p>
            <p>Holine: </p>
            <p style="color: rgb(255, 174, 0); font-size: 20px;">092 4373 024</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Về chúng tôi
            </h6>
            <p>
              <a href="index.php" class="text-reset" style="text-decoration: none;">Trang chủ</a>
            </p>
            <p>
              <a href="Sanpham.php" class="text-reset" style="text-decoration: none;">Sản phẩm</a>
            </p>
            <p>
              <a href="#" class="text-reset" style="text-decoration: none;">Tin tức</a>
            </p>
            <p>
              <a href="#" class="text-reset" style="text-decoration: none;">Liên hệ</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Hỗ trợ khách hàng
            </h6>
            <p>
              <a href="index.php" class="text-reset" style="text-decoration: none;">Trang chủ</a>
            </p>
            <p>
              <a href="Sanpham.php" class="text-reset" style="text-decoration: none;">Sản phẩm</a>
            </p>
            <p>
              <a href="#" class="text-reset" style="text-decoration: none;">Tin tức</a>
            </p>
            <p>
              <a href="#" class="text-reset" style="text-decoration: none;">Liên hệ</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Dịch vụ</h6>
            <p>
              <a href="index.php" class="text-reset" style="text-decoration: none;">Trang chủ</a>
            </p>
            <p>
              <a href="Sanpham.php" class="text-reset" style="text-decoration: none;">Sản phẩm</a>
            </p>
            <p>
              <a href="#" class="text-reset" style="text-decoration: none;">Tin tức</a>
            </p>
            <p>
              <a href="#" class="text-reset" style="text-decoration: none;">Liên hệ</a>
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgb(109, 109, 109); height: 70px;">
      © Bản quyền thuộc về Cafein Team
      <a class="text-reset fw-bold" href="#" style="text-decoration: none;"> | Cung cấp bởi Sapo</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>

</html>