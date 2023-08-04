<?php
function loadall_tk(){
    $sql = "select categorys.category_id as category_id, categorys.category_name as category_name, count(products.product_id) as countsp,max(products.product_price) as maxprice, min(products.product_price) as minprice, avg(products.product_price) as avgprice from categorys inner join products on categorys.category_id=products.product_category group by categorys.category_id order by categorys.category_id desc"; 
    $listtk = pdo_query($sql);
    return $listtk;

}
?>