<div class="">
    <div class=" frmtitle text-center ">
        <h1 class="my-2">DANH SÁCH LOẠI HÀNG HÓA</h1>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng" class="btn btn-light">
        <input type="submit" name="listok" value="Tìm kiếm" class="btn btn-success">
    </form>
    <div class=" mt-3">

                <input type="button" class="btn btn-success" value="Chọn tất cả">
                <input type="button" class="btn btn-success" value="Bỏ chọn tất cả">
                <input type="button" class="btn btn-success" value="Xóa các mục tất tả">
     </div>
    </div>
    
    <div class="container text-center mb-3 ">
        <form action="#" method="post">
            <div class=" mb10 frmdsloai">

                <table class="table table-striped-columns table-hover table-bordered my-3">
                    <thead>
                        <tr>
                            <th></th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>KHÁCH HÀNG
                            </th>
                            <th>SỐ LƯỢNG HÀNG
                            </th>
                            <th>GIÁ TRỊ ĐƠN HÀNG
                            </th>
                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                            <!-- <th>NGÀY ĐẶT HÀNG<th> -->
                            <th>THAO TÁC
                            </th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $kh = $bill["bill_name"] . '<br> ' . $bill["bill_email"] . '<br> ' . $bill["bill_address"] . '<br> ' . $bill["bill_phone"];
                            $ttdh  = get_ttdh($bill["bill_status"]);
                            $countsp = loadall_cart_count($bill["bill_id"]);
                            $updatebill = "index.php?act=updatebill&bill_id=" . $bill_id;
                        ?>
                            <tr>

                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $bill_id ?></td>
                                <td><?= $kh ?></td>
                                <td><?= $countsp ?></td>
                     
                                <td><strong><?= $bill['bill_total'] ?></strong> VND</td>
                   
                                <td><?= $ttdh ?></td>


                          
                                <td>
                                    <a href="<?= $updatebill ?>"><input type="button" class="btn btn-danger" value="Sửa"></a>
                                    <a href="<?=$xoabill?>"><input type="button" class="btn btn-danger" value="Xóa"></a>   
                                </td>
                            </tr>
                        <?php } ?>
                        <!-- <?php
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $kh = $bill["bill_name"] . '<br> ' . $bill["bill_email"] . '<br> ' . $bill["bill_address"] . '<br> ' . $bill["bill_phone"];
                                    $ttdh  = get_ttdh($bill["bill_status"]);
                                    $countsp = loadall_cart_count($bill["bill_id"]);
                                    $updatebill = "index.php?act=updatebill&bill_id=" . $bill_id;
                                    echo '<tr>
                                            
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td>' . $bill['bill_id'] . '</td>
                                                    <td>' . $kh . '</td>
                                                    <td>' . $countsp . '</td>
                                                    <td><strong>' . $bill['bill_total'] . '</strong> VND</td>
                                                    <td>' . $ttdh . '</td>
                                                    <td>
                                                        <a href="<?=.$updatebill.>"><input  type="button" value="Sửa"></a>  
                                                        <a href="<?=$xoabill?>"><input type="button" value="Xóa"></a>   
                                                    </td>
                                                </tr>';
                                }
                                ?> -->
                    </tbody>
                </table>
            </div>
            
        </form>
    </div>
</div>