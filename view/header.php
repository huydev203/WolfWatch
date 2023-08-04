<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wolf Watch</title>
  <link rel="shortcut icon" type="image/x-icon" href="view/img/logo-icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="view/css/index2.css">

</head>

<body>
  <!--Header-->
  <header class="header">
    <div class="header_container">
      <div class="navbar">
        <div class="nav-hotline ms-2">
          <div class="nav-locate"><i class="fa-solid fa-location-dot"></i><a href="">hệ thống cửa hàng</a>
          </div>
          <div class="nav-phone"><i class="fa-solid fa-phone"></i><a href="">0862738874</a></div>
        </div>
        <a href="index.php?act=" class="logo"><img src="view/img/logo.png" alt=""></a>
        <ul class="nav-icon mt-1 me-2">
          <li class="nav-item">
            <form action="" method="post">
              <input type="text">
              <div class="nav-sreach"><i class="fa-solid fa-magnifying-glass"></i></div>
            </form>
          </li>
          <li class="nav-item">
            <i class="fa-solid fa-user" id="nav-item-user"></i>
          </li>
          <li class="nav-item">
            <!-- <i class="fa-solid fa-cart-shopping" id="nav-shopping"></i> -->
            <a href="index.php?act=mybil"><i class="fa-solid fa-cart-shopping" id="nav-shopping"></i></a>
          </li>
        </ul>

      </div>
      
      <!-- <ul class="nav-menu">
        <li class="nav-drop">
          <a href="#" id="item-drop">
            <img src="view/img/item/icon-4.png" alt="">
            <span>Apple</span>
          </a>
        </li>
        <li class="nav-drop">
          <a href="#" id="item-drop">
            <img src="view/img/item/icon.png" alt="">
            <span>Đồng Hồ</span>
          </a>

        </li>
        <li class="nav-drop">
          <a href="#" id="item-drop">
            <img src="view/img/item/icon-1.png" alt="">
            <span>Smart Watch</span>
          </a>
        </li>
        <li class="nav-drop">
          <a href="#" id="item-drop">
            <img src="view/img/item/icon-2.png" alt="">
            <span>Phụ Kiện</span>
          </a>
        </li>
        <li class="nav-drop">
          <a href="#" id="item-drop">
            <img src="view/img/item/icon-3.png" alt="">
            <span>Tin Tức</span>
          </a>
        </li>
        <img src="view/img/item/icon-sale.png" alt="">
      </ul> -->

      <div class="login-user">

        <?php if (isset($_SESSION['user'])) {
          echo " <h4>Xin chào</h4>
        <ul>
        <li><a href='index.php?act=logout'>Đăng xuất</a></li>
        <span class='' type='submit' id='btn-cn'>Cập nhập tài khoản</span>
        </ul>";
        } else {
          echo "<form action='index.php?act=dangnhap' method='POST'>
          <p>Đăng Nhập</p>
          <label for=''>Tên Đăng Nhập</label>
          <input type='text' placeholder='Nhập tài khoản' name='username'>
          <label for=''>Mật khẩu</label>
          <input type='password' placeholder='Nhập mật khẩu' name='password'>
          <div>
            <button class='btn btn-primary me-2' type='submit'>Đăng Nhập</button>
            <span class='btn btn-primary' type='submit' id='btn-dk'>Đăng ký</span>
          </div>
        </form>
        <div class='login-gg-fb'>
          <a href='#' class='login-gg'>
            <i class='fa-brands fa-google'></i>
            <span>Google</span>
          </a>
          <p>Hoặc</p>
          <a href='#' class='login-fb'>
            <i class='fa-brands fa-facebook'></i>
            <span>Facebook</span>
          </a>
        </div>
        ";
        } ?>




        <img id="close" src="view/img/item/close.png" alt="">
      </div>
      <div class="dangky ">
        <h1 class="text-center">Đăng ký</h1>
        <form action="index.php?act=dangky" class="w-100" method="POST" enctype="multipart/form-data">
          <label for="">Họ tên</label>
          <?php if (isset($_SESSION['erro-username'])) {
            echo " <div id='ms-username'>" . $_SESSION['erro-username'] . "</div>";
          } ?>
          <input type="text" name="username" id="username" required>
          <label for="">Passwword</label>
          <?php if (isset($_SESSION['erro-password'])) {
            echo " <div id='ms-username'>" . $_SESSION['erro-password'] . "</div>";
          } ?>
          <input type="password" name="password" id="password" required>
          <label for="">Re-password</label>
          <?php if (isset($_SESSION['erro-repassword'])) {
            echo " <div id='ms-username'>" . $_SESSION['erro-repassword'] . "</div>";
          } ?>
          <input type="password" name="re-pass" id="re-password" required>
          <label for="">image</label>
          <input type="file" name="file" id="" required>
          <label for="">Địa chỉ</label>
          <input type="text" name="adr" id="diachi" required>
          <label for="">Số điện thoại</label>
          <input type="phone" name="phone" id="phone" required>
          <label for="">Email</label>
          <input type="email" name="email" id="email" required>
          <input type="hidden" name="vaitro" value="0">
          <div class="text-center mt-3">
            <button type="submit" name="dangky" class="btn btn-primary">Đăng ký</button>
          </div>
        </form>
        <img id="close1" src="view/img/item/close.png" alt="">
      </div>

      <div class="capnhap">
      <h1 class="text-center mt-1">Cập nhập tài khoản</h1>
      <?php $alo = $_SESSION['anh'];?>
      <form action="index.php?act=updateUser" method="POST"  enctype="multipart/form-data">
      <label for="">Họ tên</label>
          
          <input type="text" name="username" id="username" value="<?php echo $_SESSION['user'] ?>" >
          <label for="">Passwword</label>
          
          <input type="password" name="password" id="password" value="<?php echo $_SESSION['pass'] ?>" >
          <label for="">Re-password</label>
          
          <input type="password" name="re-pass" id="re-password" value="<?php echo $_SESSION['pass'] ?>">
          <label for="">image</label>
          <input type="text" value= "<?=$alo?>" name="anhcu" id="anhcu">
          <input type="file" name="file" id="">
          <label for="">Địa chỉ</label>
          <input type="text" name="adr" id="diachi" value="<?php echo $_SESSION['diachi'] ?>">
          <label for="">Số điện thoại</label>
          <input type="phone" name="phone" id="phone" value="<?php echo $_SESSION['sdt'] ?>">
          <label for="">Email</label>
          <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'] ?>">
          <input type="hidden" name="vaitro"value="0">
          <div class="text-center mt-3">
          <button type="submit" name="capnhat"  class="btn btn-danger btn-dk mb-2"   >Cập nhật</button>
          </div>
        </form>
        <img id="close2" src="view/img/item/close.png" alt="">
      </div>
    </div>

    <div class="backdrop-dangky"></div>
    <div class="backdrop-capnhap"></div>
    <div class="backdrop"></div>
    </div>
  </header>