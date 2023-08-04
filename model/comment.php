<?php
function addComent($content,$user,$product){
    $query = "INSERT INTO comments (comment_content, comment_user,comment_product)
    VALUES ('$content',$user,$product)";
    pdo_execute($query);
   
} 
?>