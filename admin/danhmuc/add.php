<div class="row">
            <div class="row mb10  headertiltle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
         <div class="row formcontent">
            <form action="index.php?act=adddm" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="ma" disabled>
                </div>
                <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row mb10">
                <input type="submit" name="them" value="THÊM MỚI">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
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