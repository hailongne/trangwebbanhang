<?php
if(is_array($listsua)){
extract($listsua);
}
?>
<div class="row">
            <div class="row mb10  headertiltle">
                <h1>CẬP NHẬT MỚI LOẠI HÀNG HÓA</h1>
            </div>
         <div class="row formcontent">
            <form action="index.php?act=updatedm" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="ma" disabled>
                </div>
                <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="tenloai" value="<?php echo $name?$name:"" ?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)){
                        echo $id;
                    } ?>">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                </div>
                <?= $thongbao?>
            </form>
         </div>
        </div>
       
      
    </div>