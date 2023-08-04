<div class="swiper mySwiper">
    <h3>Sản Phẩm </h3>
    <div class="swiper-wrapper">
      <?php foreach ($dssp as $prodcuts) {
        extract($prodcuts);
        $hinhpath = "upload/" . $product_image;
        if (is_file($hinhpath)) {
          $image = "<img src='" . $hinhpath . "' height = '300px'>";
        } else {
          $image = "No Photo";
        }
      ?>
     <a href="index.php?act=chitiet&id=<?php echo $product_id ?>">
        <div class="swiper-slide" id="parent-product">
          <img src="" alt="">
          <div><?= $image ?></div>
          <div id="item-product">
            <a href="#" class="product-name"><?= $product_name ?></a>
            <div class="body-product">
              <h4 class="price-product"><?= $product_price ?></h4>
              <h4 class="price-sale-product">Giá Khuyến Mãi: <span><?= $product_sale ?></span> đ</h4>
            </div>
          </div>
          <form action="index.php?act=addtocart" method="POST">
            <input type="text" hidden name="product_id" value="<?= $product_id ?>">
            <input type="text" hidden name="product_name" value="<?= $product_name ?>">
            <input type="text" hidden name="product_image" value="<?= $product_image ?>">
            <input type="number" hidden name="product_price" value="<?= $product_sale ?>">
            <input type="submit" class="product-btn-cart" style="width:250px ;" name="addtocart" value="Mua ngay"></input>
          </form>
        </div>
        </a>
      <?php } ?>
    </div>