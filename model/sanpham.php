<?php
function insert_sp($tensp,$price,$img,$mota,$iddm){
    $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) 
    values('$tensp','$price','$img','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sp($id){
    $sql = "DELETE FROM sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sp_top10(){
    $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,10 ";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sp_home(){
    $sql = "SELECT * FROM sanpham where 1 order by id desc limit 0,9 ";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sp($key="",$iddm=0){
    $sql = "SELECT * FROM sanpham where 1";
    if($key!=""){
        $sql.=" and name like '%".$key."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by name ";
    $listsp1 = pdo_query($sql);
    return $listsp1;
}

function loadsp_cungloai($id,$iddm){
    $sql = "SELECT * FROM sanpham where iddm=".$iddm." AND  id<>".$id;
    $spcl= pdo_query($sql);
    return  $spcl;
}
function load_tendm($iddm){
    if($iddm>0){
    $sql = "SELECT * FROM danhmuc where id=".$iddm;
    $dm= pdo_query_one($sql);
    extract($dm);
    return  $name;
    }
    else{
        return "";
    }
}
function loadone_sp($id){
    $sql = "SELECT * FROM sanpham where id=".$id;
    $suasp= pdo_query_one($sql);
    return  $suasp;
}
function capnhat_sp($id,$tensp,$price,$img,$mota,$iddm){
    if($img!=""){
    $sql = "UPDATE sanpham SET name='".$tensp."',price='".$price."',img='".$img."',mota='".$mota."',iddm='".$iddm."'
     WHERE id=".$id;
    }
     else{
        $sql = "UPDATE sanpham SET name='".$tensp."',price='".$price."',mota='".$mota."',iddm='".$iddm."'
        WHERE id=".$id;
     }
    pdo_execute($sql);
}
?>