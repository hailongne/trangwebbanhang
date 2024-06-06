<?php
if(is_array($tintuc)){
extract($tintuc);
}
$newimg="../upload/".$hinh_anh;//hih_anh
if(is_file($newimg)){
    $hinh_anh="<img src='".$newimg."' height='80px'>";
}else{
    $hinh_anh="no load";
}
?>
<div class="row">
            <div class="row mb10  headertiltle">
                <h1>CẬP NHẬT MỚI TIN TỨC</h1>
            </div>
         <div class="row formcontent">
         <form action="index.php?act=suatt" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <div class="row mb10">
                    Tên tiêu đề <br>
                    <input type="text" name="tentd" value=" <?php echo $tintuc['tieu_de']; ?>" >
                </div>
              
                <div class="row mb10">
                    Danh mục tin tức <br>
                    <select name="iddm" >
                    <option value="0" selected >Tất cả</option>
                    <?php
                       foreach($listdm as $dm){
                        extract($dm);
                        //var_dump($dm);
                        if($id_danh_muc ==$id_danhmuc) $a="selected"; else $a="";
                        echo '
                        <option value="'.$id_danhmuc.'"'.$a.'>'.$ten_danhmuc.'</option>
                        ';
                       }
                       ?>
                </select>
                </div>
                <div class="row mb10">
                    Ảnh <br>
                    <input type="file" name="img">
                    <?=$hinh_anh?>
                </div>
                <div class="row mb10">
                   nội dung <br>
                    <textarea name="mota" cols="30" rows="10"><?= $tintuc['noi_dung'] ?>"</textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$tintuc['id']?>">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <a href="index.php?act=listtintuc"><input type="button" value="DANH SÁCH"></a>
                </div>
               
            </form>
         </div>
        </div>
       
      
    </div>