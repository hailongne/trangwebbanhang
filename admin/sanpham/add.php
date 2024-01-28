<div class="row">
            <div class="row mb10  headertiltle">
                <h1>ThÊM MỚI LOẠI SẢN PHẨM</h1>
            </div>
         <div class="row formcontent">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" >
                </div>
                <div class="row mb10">
                    Giá sản phẩm <br>
                    <input type="text" name="price" >
                </div>
                <div class="row mb10">
                    Ảnh <br>
                    <input type="file" name="img">
                </div>
                <div class="row mb10">
                    Danh mục sản phẩm <br>
                    <select name="iddm" >
                       <?php
                       foreach($listdm as $dm){
                        extract($dm);
                        echo '
                        <option value="'.$id.'">'.$name.'</option>
                        ';
                       }
                       ?>
                    </select>
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" cols="30" rows="10"></textarea>
                </div>
                <div class="row mb10">
                <input type="submit" name="them" value="THÊM MỚI">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                 if (isset($_POST["them"]) && ($_POST["them"])){
                echo  $thongbao;
                 }
                 ?>
            </form>
         </div>
        </div>
      
    </div>