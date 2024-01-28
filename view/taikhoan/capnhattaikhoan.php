<div class="row mb content3 boxtrai  ">
    <div class=" mr ">
        <div class="row mb formtk ">
            <div class="boxtitle  ">Cập nhật tài khoản </div>
            <div class="row boxcontent  ">
                <?php
                if(isset($_SESSION["user"])&&(is_array($_SESSION["user"]))){
                    extract($_SESSION["user"]);
                }
                ?>
                <form action="index.php?act=edit_tk" method="post">
                    <div class="row mb10">
                        <strong>Email <br></strong>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        <strong>Tên đăng nhập <br></strong>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                       <strong> Mật khẩu <br></strong>
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                       <strong> Địa chỉ <br></strong>
                        <input type="password" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                       <strong> Số điện thoại <br></strong>
                        <input type="password" name="telephone" value="<?=$telephone?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="Cập nhật" name="capnhat">
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