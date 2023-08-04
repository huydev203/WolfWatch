<div class="container">
    <div class="frmtitle my-3 text-center">
        <h1>DANH SÁCH LOẠI SẢN PHẨM</h1>
    </div>
   
    <div class="">
        <form action="#" method="post" class="align-middle">
            <div class=" mb10 frmdsloai ">
            <div class=" mb-3 text-center">
            <form action="">
            <form action="index.php?act=products-search" method="post">
            <div class="mb10 text-center mb-4 ">
                <form action="">
                <input type="text" width="300px" class="btn btn-success" placeholder="tìm kiếm sản phẩm" name="tukhoa">
                <input type="submit" class="btn btn-success" name="timkiem" value="Tìm kiếm">

                </form>

            </form>
                <a href="index.php?act=list-products"><input class="btn btn-success" type="button" value="Danh Sách"></a>
              
              
            </div>  
                <table class="table table-striped table-striped-columns table-hover table-bordered">
                <h3>Từ khóa tìm kiếm : <?php echo $_POST['tukhoa'];  ?> </h3>
                    <thead>
                        <tr>
                           
                            <th>MÃ SP</th>
                            <th>Mã loại</th>
                            <th>TÊN SẢN PHẨM
                            
                            <th>HÌNH ẢNH
                            
                            <th>GIÁ
                            
                            <th>Giảm Giá</th>
                            <th>Size
                            
                            <th>Màu</th>
                            <th>Loại Máy</th>
                            <th>Chống Nước</th>
                            <th>Xuất Xứ</th>
                            <th>Bảo Hành</th>
                            <th>commnet</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
                        <?php
                        foreach ($listsearchsp as $products) {
                            extract($products);
                            $updatesp = "index.php?act=updatesp&product_id=".$product_id;
                            $deletesp = "index.php?act=deletesp&product_id=".$product_id;
                            $hinhpath = "../upload/" . $product_image;
                            if (is_file($hinhpath)) {
                                $image = "<img src='" . $hinhpath . "' height = '60px'>";
                            } else {
                                $image = "No Photo";
                            }
                        ?>
                            <tr>
                               
                                <td><?= $product_id ?></td>
                                <td><?= $product_category ?></td>
                                <td><?= $product_name ?></td>
                                
                                <td><?= $image ?></td>
                                
                                <td><?= $product_price ?></td>
                                
                                <td><?= $product_sale ?></td>
                                <td><?= $product_size ?></td>
                                <td><?= $product_color ?></td>
                                <td><?= $product_type?></td>
                                <td><?= $product_wire ?></td>
                                <td><?= $product_origin ?></td>
                                <td><?= $product_insurance ?></td>
                                <td><?= $product_comment ?></td>

                                <td>
                                    <a href="<?= $updatesp ?>"><input type="button" class="btn btn-danger my-3" value="Sửa"></a>
                                    <a href="<?= $deletesp ?>"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><input class="btn btn-danger" type="button" value="Xóa"></a>
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