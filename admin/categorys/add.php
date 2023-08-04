<div class="">

    <h1 class="text-center my-3">THÊM MỚI LOẠI HÀNG</h1>

    <div class="form text-center">
        <form action="index.php?act=add-categorys" method="post">
            <label for=""   >Tên loại:</label>
            <input type="text" name="category_name" style="width: 250px;" class="mb-4" >
            <div class="button mb-5">
                <input type="submit" class="btn btn-success"  name="themmoi" value="Thêm Mới">
                <input type="reset" class="btn btn-success"  value="Nhập Lại">
                <a href="index.php?act=list-categorys" class="btn btn-success" >Danh Sách</a>
            </div>
        </form>
    </div>
    
    <?php
    if(isset($thongbao) &&($thongbao != "")){
        echo $thongbao;
    } 
    ?>

</div>
</div>