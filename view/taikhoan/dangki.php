<div class="row mb content3 boxtrai  ">
    <div class=" mr ">
        <div class="row mb formtk ">
            <div class="boxtitle  ">ĐĂNG KÍ THÀNH VIÊN </div>
            <div class="row boxcontent  ">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        <strong>Email <br></strong>
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        <strong>Tên đăng nhập <br></strong>
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                       <strong> Mật khẩu <br></strong>
                        <input type="password" name="pass">
                    </div>
                    <div class="row mb10">
                    <input type="submit" value="Đăng ký" name="dangky">
                    <input type="reset" value="Nhập lại">
                    </div>
                </form>
               <h2 class="thongbao">
               <?php
                if(isset($thongbao1) && $thongbao1 !=""){
                    echo $thongbao1;
                }else{
                    echo "";
                }
                ?>
               </h2>
            </div>
        </div>
    </div>
</div>

<?php
include "view/boxphai.php";
?>


</div>