<?php
function serch_categorys($tukhoa){
    $sql = "select * from categorys where  categorys.category_name like '%".$tukhoa."%' ";
                $listsearch =pdo_query($sql);
                return $listsearch;
}
function serch_products($tukhoa){
    $sql = "select * from products where  products.product_name like '%".$tukhoa."%' ";
                $listsearchsp =pdo_query($sql);
                return $listsearchsp;
}
function serch_users($tukhoa){
    $sql = "select * from users where  users.user_name like '%".$tukhoa."%' ";
                $listsearchuser =pdo_query($sql);
                return   $listsearchuser;
}
?>