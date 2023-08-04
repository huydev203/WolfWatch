<div class="">
    <div class=" frmtitle mb">
        <h1 class="text-center my-3">DANH SÁCH NGƯỜI DÙNG</h1>
    </div>
   
    <div class=" container">
        
            <div class=" mb10 frmdsloai">
            <div class=" mb-4 text-center">
            <form action="index.php?act=users-search" method="post">
            <div class="mb10 text-center mb-4 ">
                <form action="">
                <input type="text" width="300px" class="btn btn-light" placeholder="tìm kiếm sản phẩm" name="tukhoa">
                <input type="submit" class="btn btn-success" name="timkiem" value="Tìm kiếm">

          
            </div>
                <table class="table table-striped table-striped-columns table-hover table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Tên đăng nhập </th>
                            <th>Mật khẩu</th>
                            <th>Ảnh
                            
                            <th>Họ tên
                            
                            <th>Địa chỉ
                            
                            <th>Số điện thoại</th>
                            <th>Email
                            
                            <th>Vai trò</th>
                            <th>action</th>
                            <!-- <th>Loại Máy</th>
                            <th>Chống Nước</th>
                            <th>Xuất Xứ</th>
                            <th>Bảo Hành</th>
                            <th>commnet</th>
                            <th>active</th> -->
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        foreach ($listusers as $users) {
                            extract($users);
                            $update_users = "index.php?act=update_users&user_id=".$user_id;
                            $delete_users = "index.php?act=delete_users&user_id=".$user_id;
                            // $hinhpath = "../upload/" . $product_image;
                            // if (is_file($hinhpath)) {
                            //     $image = "<img src='" . $hinhpath . "' height = '60px'>";
                            // } else {
                            //     $image = "No Photo";
                            // }
                        ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $user_id ?></td>
                                <td><?= $user_name ?></td>
                                <td><?= $user_password ?></td>          
                                <td><?= $user_image ?></td>                        
                                <td><?= $user_name ?></td>
                                <td><?= $user_address ?></td>
                                <td><?= $user_phone ?></td>
                                <td><?= $user_email ?></td>
                                <td><?= $user_vaitro	?></td>
                                <!-- <td><?= $product_wire ?></td>
                                <td><?= $product_origin ?></td>
                                <td><?= $product_insurance ?></td>
                                <td><?= $product_comment ?></td> -->

                                <td class="text-center">
                                    <a href="<?= $update_users ?>"><input type="button" class="btn btn-danger" value="Sửa"></a>
                                    <a href="<?= $delete_users ?>"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><input class="btn btn-danger " type="button" value="Xóa"></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
        </form>
    </div>
</div>
</div>