<div class="row mb content3 boxtrai ">
    <div class="  mr ">
       <form action="index.php?act=billcomfirm" method="post">
       <div class="row mb  ">
        
        <div class="boxtitle  ">THÔNG TIN ĐẶT HÀNG</div>
        <div class="row boxcontent  formtable ">
            <table>
                <?php
                if(isset($_SESSION['user'])){
                    $name=$_SESSION['user']['name'];
                    $address=$_SESSION['user']['address'];
                    $email=$_SESSION['user']['email'];
                    $tel=$_SESSION['user']['tel'];

                }else{
                    $name="";
                    $address="";
                    $tel="";
                    $email="";
                }
                ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input type="text" name="name"><?=$name?></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="address"><?=$address?></td>
                </tr>
                <tr>
                    <td>Email</td></td>
                    <td><input type="text" name="email"><?=$email?></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" name="tel"><?=$tel?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row mb">
        <input type="submit" value="Đồng ý đặt hàng" name="dongydh">
    </div></div>
       </form>
    </div>
</div>
<?php
include "view/boxphai.php";
?>