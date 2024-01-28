<?php
function insert_dm($tenloai){
    $sql = "INSERT INTO danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_dm($id){
    $sql = "DELETE FROM danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadall_dm(){
    $sql = "SELECT * FROM danhmuc order by id desc ";
    $listdm = pdo_query($sql);
    return $listdm;
}
function loadone_dm($id){
    $sql = "SELECT * FROM danhmuc where id=". $_GET["id"];
    $listsua = pdo_query_one($sql);
    return $listsua;
}
function capnhat_dm($id,$tenloai){
    $sql = "UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}
?>