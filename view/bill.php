<div class=" mb container">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post" >
            <div class=" mb">
                <div class="boxtitle text-center "><h2>THÔNG TIN ĐẶT HÀNG</h2></div>
                <div class=" boxcontent billform">
                    <table class="table  table-striped-columns table-hover table-bordered my-3" >
                        <?php 
                        //kiểm tra tồn tại biến user thì các giá trị bằng biến session
                            if (isset($_SESSION['users'])) {
                               $user_name = $_SESSION['users']['user_name'];
                               $user_address = $_SESSION['users']['user_address'];
                               $user_email = $_SESSION['users']['user_email'];
                               $user_phone = $_SESSION['users']['user_phone'];
                            }else{
                                $user_name = "";
                               $user_address = "";
                               $user_email = "";
                               $user_phone = "";
                            }
                        ?>

                        <tr >
                            <td>Người đặt hàng</td>
                            <td><input class="ttcart" type="text" name="user_name" value="<?=$_SESSION['user']?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input class="ttcart" type="text" name="user_address" value="<?=$_SESSION['diachi']?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input class="ttcart" type="text" name="user_email" value="<?=$_SESSION['email']?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input class="ttcart" type="text" name="user_phone" value="<?=$_SESSION['sdt']?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class=" mb">
                    <div class=" boxcontent billform my-3">
                        <table class="table table-striped table-striped-columns table-hover table-bordered">
                            <thead>
                                <tr>
                                    <td>
                                        <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                                    </td>
                                </tr>
                            </thead>
                            <tr>
                                <td><input type="radio" name="pttt" value="0" checked> Trả tiền khi nhận hàng</td>
                                <td><input type="radio" name="pttt" value="1"> Chuyển khoản ngân hàng</td>
                                <td><input type="radio" name="pttt" value="2"> Thanh toán online</td>
                            </tr>
                        </table>
                    </div>
            </div>
            
            <div class=" mb">
                <div class="boxtitle my-3">THÔNG TIN GIỎ HÀNG</div>
                    <div class=" boxcontent cart">
                        <table class="table table-striped table-striped-columns table-hover table-bordered" >
                            <?php 
                              viewCart(0);
                            ?>
                      </table>
                      </div>
            </div>

            <div class=" mb bill">
                <input type="submit" class="btn btn-success w-100" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>

            
        </form>
         <?php
            bill_tien_momoQR();
            ?>
            <!-- <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="./view/momoQR.php">
                            <input type="submit" class="btn btn-success w-40" value="Thanh toan qua QR code" name="momo">
            </form>
        <br>
        <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="./view/momoATM.php">
                        <input type="submit" class="btn btn-success w-40" value="Thanh toan qua ATM momo" name="momo">
        </form> -->
    </div>

    
</div>




