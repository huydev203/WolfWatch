<div class="container mb">
    <div class="boxtrai mr">
        <div class=" mb">
            <div class="boxcontent" style="text-align:center">
                <h2>Cảm ơn quý khách đã đặt hàng!</h2>
            </div>
        </div>
        <?php 
        //tồn tại bill và ktra bill
            if(isset($bill) && (is_array($bill))){
                extract($bill);
            }
        ?>
        <div class=" mb">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="boxcontent" style="text-align:center">
                <h1>STT-<?=$bill['bill_id']?></h1>
                <li>Tổng đơn hàng: <?=$bill['bill_total'];?></li> 
                <li>Phương thức thanh toán: <?php   
                if($bill['bill_pttt']==0){
                    echo " Trả tiền khi nhận hàng";
                    }else if($bill['bill_pttt']==1){
                        echo " Chuyển khoản ngân hàng";
                    }else if($bill['bill_pttt']==2){
                        echo " Thanh toán online";
                    }
                    ?></li>
            </div>
        </div>
     
        <div class=" mb">

            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class=" boxcontent billform">
                <table class="table  table-striped-columns table-hover table-bordered my-3" >

                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?=$bill['bill_address'];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$bill['bill_email'];?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><?=$bill['bill_phone'];?></td>
                    </tr>
                </table>
            </div>
        </div>

            
        <div class="mb">
                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                    <div class="boxcontent cart">
                        <table  class="table  table-striped-columns table-hover table-bordered my-3" >
                            <?php 
                                bill_chi_tiet($billct);
                            ?>
                      </table>
                      </div>
            </div>
        
    </div>

</div>




