<div class="row">
            <div class="row mb10  headertiltle">
                <h1>ThÊM MỚI tin tức </h1>
            </div>
         <div class="row formcontent">
            <form action="index.php?act=addtintuc" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Tiêu đề <br>
                    <input type="text" name="tieude" >
                   
                </div>
             
                <div class="row mb10">
                    Ảnh <br>
                    <input type="file" name="img">
                    
                </div>
                


                <div class="row mb10">
                    Danh mục tin tức <br>
                    <select name="iddm" >
                       <?php
                       foreach($listdm as $dm){
                        extract($dm);
                        echo '
                        <option value="'.$danhmuc['id_danhmuc'].'">'.$danhmuc['ten_danhmuc'].'</option>
                        ';
                       }
                       ?>
                    </select>
                </div>
                <div class="row mb10">
                    Nội dung <br>
                    <textarea name="noidung" cols="30" rows="10"></textarea>
                   
                </div>
                <div class="row mb10">
                <input type="submit" name="them" value="THÊM MỚI">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listtintuc"><input type="button" value="DANH SÁCH"></a>
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