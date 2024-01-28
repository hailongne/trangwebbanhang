<div class="row mb content3 boxtrai  ">
    <div class=" mr ">
        <div class="row mb formtk ">
            <div class="boxtitle  ">ĐĂNG KÍ THÀNH VIÊN </div>
            <div class="row boxcontent  ">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        <strong>Email <br></strong>
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                    <input type="submit" value="Gửi" name="gui">
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