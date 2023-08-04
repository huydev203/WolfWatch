<?php
    function insert_products($product_name,$product_image,$product_price,$product_sale,$product_size,$product_color,$product_type,$product_wire,$product_origin,$product_insurance,$product_category){
        $sql = "insert into products(product_name,product_image,product_price,product_sale,product_size,product_color,product_type,product_wire,product_origin,product_insurance,product_category) values('$product_name','$product_image',
        '$product_price','$product_sale','$product_size','$product_color','$product_type','$product_wire','$product_origin','$product_insurance','$product_category')";
        pdo_execute($sql);
    }
    function delete_products($product_id){
        $sql="delete from products where product_id=".$product_id;
        pdo_execute($sql);
    }
    function loadall_product(){
        $sql="select * from products";
        $listproducts=pdo_query($sql);
        return $listproducts;
    }
    function loadone_product($product_id){
        $sql="select * from products where product_id =".$product_id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function loadall_sanpham_home(){
        $sql="select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm = '".$iddm."'";
        }

        $sql.=" order by product_id desc";
        // nỗi chuỗi .= cách khoảng
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where id =".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
        }else{
            return "";
        }
        
    }
    function loadall_sanpham_top10(){
        $sql="select * from products where 1 order by product_view desc limit 0,10";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    
    // load danh muc san pham chung loai
    function load_sanpham_cungloai($product_id,$product_category){
        $sql="select * from sanpham where product_id =".$product_id." AND product_category <> ".$product_category;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
        // $sp=pdo_query_one($sql);
        // return $sp;
    }
    function update_product($product_id,$product_category,$product_name,$product_image,$product_price,$product_sale,$product_size,$product_color,$product_type,$product_wire,$product_origin,$product_insurance){
$sql = "update products set product_category= '".$product_category."', product_name= '".$product_name."',   product_image= '".$product_image."',product_price= '".$product_price."', product_sale= '".$product_sale."', product_size= '".$product_size."', product_color= '".$product_color."', product_type= '".$product_type."', product_wire= '".$product_wire."',  product_origin= '".$product_origin."',product_insurance= '".$product_insurance."'  where product_id =".$product_id;
            pdo_execute($sql);
            
}


// else
// $sql = "update sanpham set  name= '".$tensp."',  price= '".$giasp."',  img= '".$hinh."', mota= '".$mota."',iddm= '".$iddm."' where id=".$id;
// pdo_execute($sql);
