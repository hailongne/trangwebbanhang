<?php
function insert_bl($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan) values
    ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_bl($idpro){
    $sql = "SELECT * FROM binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'" ;
    $sql.=" order by id desc ";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_bl($id){
    $sql = "DELETE FROM binhluan where id=".$id;
    pdo_execute($sql);
}
?>