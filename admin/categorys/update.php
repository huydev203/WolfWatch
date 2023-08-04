<?php
if (is_array($update_category)) {
    extract($update_category);
}
?>
<div class="">

    <h1 class="text-center my-3">Cập Nhật Loại Hàng </h1>

    <div class="form text-center">
        <form action="index.php?act=updatedmuc" method="post">

            <input type="hidden" name="category_id" value="<?php if (isset($category_id) && ($category_id > 0)) echo $category_id; ?>">

            <label for="" class="mb-4">Tên loại</label>
            <input type="text" name="category_name" value="<?php if (isset($category_name) && ($category_name != "")) echo $category_name; ?>">




            <div class="button">
                <input type="submit" name="capnhat" value="Cập Nhật" class="btn btn-success">
                <input type="reset" value="Nhập Lại" class="btn btn-success">
                <a href="index.php?act=list-categorys" class="btn btn-success">Danh Sách</a>
            </div>
        </form>
    </div>

    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>

</div>
</div>