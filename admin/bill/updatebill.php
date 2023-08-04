
<div class="">
                <div class="text-center frmtitle my-3">
                    <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
                </div>
                <div class="text-center frmcontent1">
                <form action="index.php?act=updatebill" method="post" enctype="multipart/form-data">
               
                        <label for="">Tình trạng đơn hàng</label>
                        <select name="bill_status" id="">
                                <?php 
                                    foreach($listbill as $bill){
                                        extract($bill);   
                                        echo '<option value="'.$bill_id.'">'.get_ttdh($bill["bill_status"]).'</option>';
                                    }
                                ?>                               
                            </select>
                        <div class=" d-flex justify-content-center">
                            <input type="hidden" class="btn btn-success " name="id" value="<?=$id?>">
                            <input type="submit" class="btn btn-success " name="capnhat" value="CẬP NHẬT">
                            <input type="reset" class="btn btn-success" value="NHẬP LẠI">
                            <a href="index.php?act=listsp"><input type="button" class="btn btn-success" value="DANH SÁCH"></a>    
                        </div>
                        <?php
                            if(isset($thongbao) &&($thongbao != "")){
                                echo $thongbao;
                            } 
                        ?>
                    </form>
                </div>
        </div>
    </div>