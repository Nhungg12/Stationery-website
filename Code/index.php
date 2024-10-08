<?php
include "./admin/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stationery</title>
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
      <a href="" class="link-text">Giỏ hàng</a>
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
                <a class="nav-link" href=""><b>Tin tức</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><b>Liên hệ</b></a>
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
  <div class="row">
    <div class="col">
      <img src="images/banner.webp" alt="" width="100%">
    </div>
  </div>
  <div class="row" style="background-color: white; text-align: center; color: black; height: 150px;">
    <div class="col-md-1"></div>
    <div class="col mt-4">
      <img src="images/hinh1.webp" alt="" width="50px">
      <h5>VPP Học sinh</h5>
    </div>
    <div class="col mt-4">
      <img src="images/hinh2.webp" alt="" width="50px">
      <h5>VPP Văn phòng</h5>
    </div>
    <div class="col mt-4">
      <img src="images/hinh3.webp" alt="" width="65px">
      <h5>Phụ kiện</h5>
    </div>
    <div class="col mt-4">
      <img src="images/hinh4.webp" alt="" width="55px">
      <h5>Cặp - Túi sách</h5>
    </div>
    <div class="col mt-4">
      <img src="images/hinh5.webp" alt="" width="55px">
      <h5>Dụng cụ văn phòng</h5>
    </div>
    <div class="col-md-1"></div>
  </div>
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col">
      <h1>TẤT CẢ SẢN PHẨM</h1>
    </div>
    <div class="col-md-3"></div>
  </div>
  <div class="row">
    <?php
    $query = mysqli_query($conn, "select * from sanpham");
    ?>
    <?php while ($row = mysqli_fetch_array($query)) { ?>
      <div class="col-md p-4">
        <div class="card text-center transform" style="border: none;">
          <div class="card-body" >
            <a href=""><img src="admin/image/<?php echo $row['IMAGES'] ?>" alt=""
                style="height: 250px; width: 250px;"></a>
          </div>
          <a class="text-dark" href="" style="text-decoration: none;">
            <?php echo $row['TEN_SP'] ?>
          </a>
          <p class="text-danger">
            <?php echo $row['DON_GIA_NHAP'] ?> VND
          </p>
          <a href="" style="margin-top: -10px;"><button class="btn btn-warning">Mua ngay</button>&nbsp;&nbsp;
          <button class="btn btn-danger"><img src="images/icon3.png" width="20px" alt=""></button></a>
        </div>
      </div>
    <?php } ?>
    
  </div>
  <div class="row" style="margin-top: 200px; text-align: center;">
    <div class="col-md-1"></div>
    <div class="col">
      <div class="row" style="text-align:left">
        <h2>DỊCH VỤ CỦA CHÚNG TÔI</h2>
      </div>
      <div class="row mt-5">

        <div class="col-md-2"><img src="images/icon1.svg" alt="" style="width: 50px;"></div>
        <div class="col" style="margin-right: 200px; text-align:left">
          <div class="row ">
            <h5>GIAO HÀNG FREE NỘI THÀNH</h5>
          </div>
          <div class="row"><i>Giao free trong nội thành HN và HCM</i></div>
        </div>


      </div>
      <div class="row mt-5">
        <div class="col-md-2"><img src="images/icon2.svg" alt="" style="width: 50px;"></div>
        <div class="col" style="margin-right: 170px; text-align:left">
          <div class="row ">
            <h5>TRẢ HÀNG TRONG VÒNG 24H</h5>
          </div>
          <div class="row"><i>Hỗ trợ trả hàng cho khách khi sản phẩm có lỗi</i></div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-2"><img src="images/icon3.svg" alt="" style="width: 50px;"></div>
        <div class="col" style="margin-right: 200px; text-align:left">
          <div class="row ">
            <h5>KIỂM TRA HÀNG KHI NHẬN HÀNG</h5>
          </div>
          <div class="row"><i>Khách hàng kiểm tra hàng trước khi nhận</i></div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-2"><img src="images/icon4.svg" alt="" style="width: 50px;"></div>
        <div class="col" style="margin-right: 200px; text-align:left">
          <div class="row ">
            <h5>THANH TOÁN COD</h5>
          </div>
          <div class="row"><i>Hỗ trợ khách hàng thanh toán cod</i></div>
        </div>
      </div>
    </div>
    <div class="col"><img src="images/nguoi.webp" alt="" width="380"></div>
    <div class="col-md-1"></div>
  </div>

  <footer class="text-center text-lg-start bg-dark " style="color: aliceblue; margin-top:100px">
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

</body>

</html>