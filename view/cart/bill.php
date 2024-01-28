<div class="row mb content3 boxtrai ">
    <div class="  mr ">
       <form action="index.php?act=billcomfirm" method="post">
       <div class="row mb  ">
        
        <div class="boxtitle  ">THÔNG TIN ĐẶT HÀNG</div>
        <div class="row boxcontent formtable ">
            <table>
                <?php
                if(isset($_SESSION['user'])){
                    $name=$_SESSION['user']['user'];
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
                    <td><input type="text" name="name" value="<?=$name?>"> </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="address" value="<?=$address?>"></td>
                </tr>
                <tr>
                    <td>Email</td></td>
                    <td><input type="text" name="email" value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" name="tel" value="<?=$tel?>"></td>
                </tr>
            </table>
        </div>
        <div class="row mb  ">
        
        <div class="boxtitle  ">Phương thức thanh toán</div>
        <div class="row boxcontent  formtable ">
        <table>
            <tr>
                <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                <td><input type="radio" name="ptttt" >Chuyển khoản ngân hàng</td>
                <td><input type="radio" name="ptttt" >Thanh toán online</td>
            </tr>
        </table>
        </div>
        
    </div>
    <div class="row mb  ">
        
        <div class="boxtitle  ">GIỎ HÀNG</div>
        <div class="row boxcontent  formtable ">
<table>
   
    
        <?php
        viewcart(0);
        ?>
   
</table>

        </div>
    </div>

    </div>
    <div class="row mb formcontent">
        <input type="submit" value="Đồng ý đặt hàng" name="dongydh">
    </div></div>
       </form>
    </div>
</div>
<?php
include "view/boxphai.php";
?>