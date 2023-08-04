<?php
if(is_array($update_users)){
    extract($update_users);
    $hinhpath = "../upload/" . $user_image;
    if (is_file($hinhpath)) {
        $user_image = "<img src='" . $hinhpath . "' height = '60px'>";
    } else {
        $user_image = "No Photo";
    }
    
}
?>
<div class="title-usser">
                <div class=" frmtitle">
                    <h1>THÊM MỚI SẢN PHẨM</h1>
                </div>
                <div class="frmcontent w-50">
<form action="index.php?act=update_user" method="POST" enctype="multipart/form-data">
    
    <input type="hidden" name="user_id" value="<?=$user_id?>">
    <label for="">Tên đăng nhập</label> <br>
    <input type="text" name="user_name" value="<?=$user_name?>" > <br>
    <label for="">Passwword</label> <br>
    <input type="password" name="user_password" value="<?=$user_password?>" > <br>
    <label for="">Họ tên</label> <br>
    <input type="text" name="user_name" value="<?=$user_lastname?>" > <br>

    <label for="">image</label> <br>
    <input type="file" name="user_image" id="" value="<?=$user_image?>"> <br>
    <label for="">Địa chỉ</label> <br>
    <input type="text" name="user_address" id="" value="<?=$user_address?>"> <br>
    <label for="">Số điện thoại</label> <br>
    <input type="phone" name="user_phone" id="" value="<?=$user_phone?>"> <br>
    <label for="">Email</label> <br>
    <input type="text" name="user_email" id="" value="<?=$user_email?>"> <br>
    <input type="hidden" name="vaitro" id="" value="0">
    
    <div class="my-3 btn-sp">
    <input type="submit" name="capnhat" class="btn btn-success" value="Cập Nhật">
                        </div>
</form>
</div>
    </div>
    </div>