<?php
 function loadall_users(){
    $sql="select * from users";
    $listusers=pdo_query($sql);
    return $listusers;
}
function loadone_users($user_id){
    $sql="select * from users where user_id =".$user_id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_users($user_id,$user_name,$user_password,$user_image,$user_address,$user_phone,$user_email){
    
    $sql = "update users set user_name= '".$user_name."', user_password= '".$user_password."',   user_image= '".$user_image."', user_address= '".$user_address."', user_phone= '".$user_phone."', user_email= '".$user_email."'  where user_id =".$user_id;
    pdo_execute($sql);
    
}
function delete_users($user_id){
    $sql = "delete from users where user_id =".$user_id;
    pdo_execute($sql);
}
function select(){
    $sql="select * from users";
    $user = pdo_query($sql);
    return $user;
}
function adduser($username,$password,$email,$sdt,$image,$diachi,$vaitro,$dan){
    $query="insert into users(user_name,user_password,user_image,user_address,user_phone,user_email,user_vaitro) values ('$username','$password','../view/img/$image','$diachi','$sdt','$email',$vaitro)";
    move_uploaded_file($dan,'view/img/'.$image);
    pdo_execute($query);
}
?>