<div class="title-usser text-center">
                <div class="frmtitle my-3">
                    <h1>THÊM MỚI SẢN PHẨM</h1>
                </div>
                <div class="frmcontent w-50">
                    <form action="index.php?act=add-products" method="post" enctype="multipart/form-data">
                    <label for="">Loại hàng</label>
                            <select name="product_category" class="w-100" id="">
                                <?php 
                                    foreach($listcategorys as $categorys){
                                        extract($categorys);
                                        echo '<option value="'.$category_id.'">'.$category_name.'</option>';
                                    }
                                ?>                               
                            </select> <br>
                       <label for="">Tên sản phẩm :</label>
                       <input type="text" name="product_name" id=""> <br>

                       <label for="">Ảnh</label>
                       <input type="file" name="product_image" id=""> <br>

                       <label for="">Giá</label>
                       <input type="number" name="product_price" id=""> <br>

                       <label for="">Giảm giá</label>
                       <input type="number" name="product_sale" id=""> <br>

                       <label for="">Size</label>
                       <input type="text" name="product_size" id=""> <br>

                       <label for="">Màu</label>
                       <input type="text" name="product_color" id=""> <br>

                       <label for="">Loại Máy</label>
                       <input type="text" name="product_type" id=""> <br>

                       <label for="">Chống nước</label>
                       <input type="text" name="product_wire" id=""> <br>

                       <label for="">Xuất xứ</label>
                       <input type="text" name="product_origin" id=""> <br>

                       <label for="">Bảo hành</label>
                       <input type="text" name="product_insurance" id=""> <br>

                       

                        
                        <div class="mt-4 btn-sp">
                            <input type="submit" name="themmoi" class="btn btn-success" value="THÊM MỚI">
                            <input type="reset" class="btn btn-success" value="NHẬP LẠI">
                            <a href="index.php?act=list-products"><input type="button" class="btn btn-success" value="DANH SÁCH"></a>    
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