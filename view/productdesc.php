
<div class="container">
    
    <div class="d-flex my-5">
      <div class="col-md-6">
        <?php $hinhpath = "upload/" ?>
        <img class="" style="height: 370px;" src="<?php echo $hinhpath.$product['product_image']  ?>" class="w-100" alt="">
        
      </div>
      <div class="col-md-6">
        <div class="product-dtl">
          <div class="product-info">
            <div class="product-name-1 mb-4 fs-2"><?php echo $product['product_name']  ?></div>
            <div class="reviews-counter">
              <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" checked />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" checked />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" checked />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>
              <span>3 Reviews</span>
            </div>
            <div class="product-price-discount"><span><?php echo $product['product_sale']  ?></span><span class="line-through">$29.00</span></div>
          </div>
            <div class="container border">
              <table class="table table-striped">
                <thead><tr><th>Chi Tiết Sản Phẩm</th></tr></thead>
                <tbody>
                  <tr>
                    <th scope="col">Size</th>
                    <th ><?php echo $product['product_size']  ?></th>
                  </tr>
                  <tr>
                    <th scope="col">Color</th>
                    <th ><?php echo $product['product_color']  ?></th>
                  </tr>
                  <tr>
                    <th scope="col">Type</th>
                    <th ><?php echo $product['product_type']  ?></th>
                  </tr>
                  <tr>
                    <th scope="col">Wire</th>
                    <th ><?php echo $product['product_wire']  ?></th>
                  </tr>
                  <tr>
                    <th scope="col">Origin</th>
                    <th ><?php echo $product['product_origin']  ?></th>
                  </tr>
                  <tr>
                    <th scope="col">insurance</th>
                    <th ><?php echo $product['product_insurance']  ?></th>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          <div class="product-count">
          <form action="index.php?act=addtocart" method="POST">
            <input type="text" hidden name="product_id" value="<?php echo $product['product_id']  ?>">
            <input type="text" hidden name="product_name" value="<?php echo $product['product_name']  ?>">
            <input type="text" hidden name="product_image" value="<?php echo $product['product_image']  ?>">
            <input type="number" hidden name="product_price" value="<?php echo $product['product_sale']  ?>">
            <input type="submit" class="product-btn-cart" style="width:250px ;" name="addtocart" value="Mua ngay"></input>
          </form>


            <!-- <a href="#" class="round-black-btn">Mua Ngay</a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="product-info-tabs">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
            aria-selected="true">Reviews (0)</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
      
        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
          <div class="review-heading mb-4">REVIEWS</div>
         <?php foreach ($comment as $value){

             $query2 = "select * from users where user_id=".$value['comment_user'];
             $user=pdo_query_one($query2);
             echo " <div class='mb-20'><div class='user-cmt'>".$user['user_name'].": <span class='noidung'>".$value['comment_content']."</span> </div> </div>";
         }?>
          <?php
          if(isset($_SESSION['user'])){
            echo "<form class='review-form' action='index.php?act=binhluan' method='POST' id='binhluan'>
            <div class='form-group'>
              <label>Your rating</label>
              <div class='reviews-counter'>
                <div class='rate'>
                  <input type='radio' id='star5' name='rate' value='5' />
                  <label for='star5' title='text'>5 stars</label>
                  <input type='radio' id='star5' name='rate' value='4' />
                  <label for='star4' title='text'>4 stars</label>
                  <input type='radio' id='star5' name='rate' value='3' />
                  <label for='star4' title='text'>3 stars</label>
                  <input type='radio' id='star5' name='rate' value='2' />
                  <label for='star4' title='text'>2 stars</label>
                  <input type='radio' id='star5' name='rate' value='1' />
                  <label for='star4' title='text'>1 stars</label>
                </div>
              </div>
            </div>
            <div class='form-group' >
              <label>Your message</label>
              <input type='hidden' value='". $product['product_id']."' name='id_sp'>
              <textarea class='form-control' rows='10' name='coment'  ></textarea>
            </div>
            <button class='round-black-btn' id='nut' >Submit Review</button>
          </form>";
          }else{
            echo"<div class='btn btn_danger'>Đăng nhập để được bình luận </div>";
          }
          ?>
        </div>
      </div>
     
    </div>
  </div>
  <div class="tab-content container" id="myTabContent">
        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
          <div class="review-heading">REVIEWS</div>
          <p class="mb-20">There are no reviews yet.</p>
          <form class="review-form">
            <div class="form-group">
              <label>Your rating</label>
              <div class="reviews-counter">
                <div class="rate">
                  <input type="radio" id="star5" name="rate" value="5" />
                  <label for="star5" title="text">5 stars</label>
                  <input type="radio" id="star4" name="rate" value="4" />
                  <label for="star4" title="text">4 stars</label>
                  <input type="radio" id="star3" name="rate" value="3" />
                  <label for="star3" title="text">3 stars</label>
                  <input type="radio" id="star2" name="rate" value="2" />
                  <label for="star2" title="text">2 stars</label>
                  <input type="radio" id="star1" name="rate" value="1" />
                  <label for="star1" title="text">1 star</label>
                </div>
              </div>
            </div>
           
          </form>
        </div>
        <div class="load" id="load"></div>
      </div>
<script>
   
</script>