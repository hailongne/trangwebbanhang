<?php
function loadAll_dmtintuc(){
    $sql ='SELECT * FROM danhmuctintuc ORDER BY id_danhmuc DESC';
    $listDM=pdo_query($sql);
    return $listDM;
}
function insert_tintuc($id,$tieude,$noidung,$img,$iddm){
    $sql="INSERT INTO tintuc(id,tieu_de,noi_dung,hinh_anh,id_danh_muc)
    VALUES ('$id','$tieude','$noidung','$img','$iddm')";
    
    pdo_execute($sql);
}
function loadAll_TinTuc(){
    $sql= " SELECT id,tieu_de,noi_dung,hinh_anh,ten_danhmuc,danhmuctintuc.id_danhmuc 
    FROM tintuc INNER JOIN danhmuctintuc ON tintuc.id_danh_muc=danhmuctintuc.id_danhmuc
    ORDER BY id DESC";
    $listTt=pdo_query($sql);
   return $listTt;
}
function loadTinTucById($id){
    $sql="SELECT * FROM tintuc WHERE id='$id'";
    $tintuc=pdo_query_one($sql);
    return $tintuc;
}
function delete_TinTuc($id){
    $sql="DELETE FROM tintuc WHERE id= '$id' ";
    pdo_execute($sql);
}

function capnhat_tintuc($tieu_de, $noi_dung, $img, $iddm,$id){
    if($img!=""){
    $sql = "UPDATE tintuc SET id_danh_muc='".$iddm."', tieu_de='".$tieu_de."',noi_dung='".$noi_dung."',hinh_anh='".$img."'
     WHERE id=".$id;
    }
     else{
        $sql = "UPDATE tintuc SET id_danh_muc='".$iddm."', tieu_de='".$tieu_de."',noi_dung='".$noi_dung."',id_danh_muc='".$iddm."'
     WHERE id=".$id;
     }
    pdo_execute($sql);
    }
    

?>
