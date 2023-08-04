<?php
    function insert_categorys($category_name){
        $sql="insert into categorys(category_name) values('$category_name')";
        pdo_execute($sql);
    }

    function delete_categorys($category_id){
        $sql = "delete from categorys where category_id =".$category_id;
        pdo_execute($sql);
    }

    function loadall_categorys(){
        $sql = "select * from categorys order by category_id ";
        $listcategorys =pdo_query($sql);
        return $listcategorys;
    }

    function loadone_categorys($category_id){
        $sql = "select * from categorys where category_id =".$category_id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_categorys($category_id,$category_name){
        $sql="update categorys set category_name = '".$category_name."' where category_id =".$category_id;
        pdo_execute($sql);
    }
?>