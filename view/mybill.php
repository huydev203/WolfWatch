<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
                    <?php 
                    //ktra mangr listbill
                        if(is_array($listbill)){
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['bill_id']);
                                echo '  
                                    <tr>
                                        <td>'.$bill['bill_id'].'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$bill['bill_total'].'</td>
                                        <td>'.$ttdh.'</td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>




