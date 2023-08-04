<?php
if(is_array($update_product)){
    extract($update_product);
    $hinhpath = "../upload/" . $product_image;
    if (is_file($hinhpath)) {
        $product_image = "<img src='" . $hinhpath . "' height = '60px'>";
    } else {
        $product_image = "No Photo";
    }
    $listcategorys =loadall_categorys();
}
?>
<div class="title-usser">
                <div class=" frmtitle my-3">
                    <h1 >THÊM MỚI SẢN PHẨM</h1>
                </div>
                <div class=" frmcontent w-50">
                    <form action="index.php?act=updatespham" method="post" enctype="multipart/form-data">
                    <label for="">Loại hàng</label>
                            <select name="product_category" class="w-100" id="">
                                <?php 
                                    foreach($listcategorys as $categorys){
                                        extract($categorys);
                                        echo '<option value="'.$category_id.'">'.$category_name.'</option>';
                                    }
                                ?>                               
                            </select> <br>
                            <input type="hidden" name="product_id" value="<?=$product_id?>">
                       <label for="">Tên sản phẩm :</label>
                       <input type="text" name="product_name" id=""  value="<?=$product_name?>"> <br>

                       <label for="">Ảnh</label>
                       <input type="text"  value="<?=$product_image?>" hidden>
                       <input type="file" name="product_image" id=""> <br>

                       <label for="">Giá</label>
                       <input type="number" name="product_price" id="" value="<?=$product_price?>" > <br>

                       <label for="">Giảm giá</label>
                       <input type="number" name="product_sale" id="" value="<?=$product_sale?>"> <br>

                       <label for="">Size</label>
                       <input type="text" name="product_size" id="" value="<?=$product_size?>"> <br>

                       <label for="">Màu</label>
                       <input type="text" name="product_color" id="" value="<?=$product_color?>"> <br>

                       <label for="">Loại Máy</label>
                       <input type="text" name="product_type" id=""value="<?=$product_type?>"> <br>

                       <label for="">Chống nước</label>
                       <input type="text" name="product_wire" id=""value="<?=$product_wire?>"> <br>

                       <label for="">Xuất xứ</label>
                       <input type="text" name="product_origin" id=""value="<?=$product_origin?>"> <br>

                       <label for="">Bảo hành</label>
                       <input type="text" name="product_insurance" id=""value="<?=$product_insurance?>"> <br>

                       

                        
                        <div class="btn-sp mt-4">
                            <input type="submit" name="capnhat"  class="btn btn-success" value="Cập Nhật">
                            <input type="reset" value="NHẬP LẠI" class="btn btn-success" >
                            <a href="index.php?act=list-products"><input class="btn btn-success"  type="button" value="DANH SÁCH"></a>    
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
    </div>