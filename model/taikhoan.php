<?php
function insert_tk($user,$pass,$email){
    $sql = "INSERT INTO taikhoan (user,pass,email) 
    values('$user','$pass','$email')";
    pdo_execute($sql);
}
function check($user,$pass){
    $sql = "SELECT * FROM taikhoan where user = '".$user."' and pass = '".$pass."'";
    $check=pdo_query_one($sql);
    return $check;
}
function capnhat_tk($id,$user,$pass,$email,$address,$telephone){
$sql = "UPDATE taikhoan SET user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$telephone."'
        WHERE id=".$id;
    pdo_execute($sql);
}
function checkemail($email){
    $sql = "SELECT * FROM taikhoan where email = '".$email."'";
    $checkemail=pdo_query_one($sql);
    return $checkemail;
}
function loadall_tk(){
    $sql = "SELECT * FROM taikhoan order by id desc ";
    $listtk = pdo_query($sql);
    return $listtk;
}
function delete_tk($id){
    $sql = "DELETE FROM taikhoan where id=".$id;
    pdo_execute($sql);
}
?>