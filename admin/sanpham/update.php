<?php
if(is_array($suasp)){
extract($suasp);
}
$newimg="../upload/".$img;
if(is_file($newimg)){
    $img="<img src='".$newimg."' height='80px'>";
}else{
    $img="no load";
}
?>
<div class="row">
            <div class="row mb10  headertiltle">
                <h1>CẬP NHẬT MỚI LOẠI HÀNG HÓA</h1>
            </div>
         <div class="row formcontent">
         <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" value=" <?php echo $suasp['name']; ?>" >
                </div>
                <div class="row mb10">
                    Giá sản phẩm <br>
                    <input type="text" name="price" value="<?php echo $suasp['price']; ?>" >
                </div>
                <div class="row mb10">
                    Danh mục sản phẩm <br>
                    <select name="iddm" >
                    <option value="0" selected >Tất cả</option>
                    <?php
                       foreach($listdm as $dm){
                        extract($dm);
                        if($iddm==$id) $a="selected"; else $a="";
                        echo '
                        <option value="'.$id.'"'.$a.'>'.$name.'</option>
                        ';
                       }
                       ?>
                </select>
                </div>
                <div class="row mb10">
                    Ảnh <br>
                    <input type="file" name="img">
                    <?php echo $suasp['img']; ?>
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" cols="30" rows="10"><?php echo $suasp['mota']; ?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$id?>">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                </div>
               
            </form>
         </div>
        </div>
       
      
    </div>