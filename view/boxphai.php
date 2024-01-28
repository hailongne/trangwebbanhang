<div class=" boxphai ">
                <div class="row mb ">
                    <div class="boxtitle  ">TÀI KHOẢN</div>
                    <div class="boxcontent formtk ">
                        <?php
                        if(isset($_SESSION["user"])){
                            extract($_SESSION["user"]);
                        
                        ?>
                        <div class="row mb10">
                            Xin chào bạn ! <br>
                            <?=$user?>
                            <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_tk">Cập nhật tài khoản</a>
                        </li>
                        <?php if($role==1){ ?>
                        <li>
                            <a href="admin/index.php">Đăng nhập Admin</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="index.php?act=thoat">Thoát</a>
                        </li>
                        </div>
                       <?php
                       }else{

                        ?>
                       

                        
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                            Tên đăng nhập <br>
                            <input type="text" name="user">
                        </div>
                        <div class="row mb10">
                            Mật khẩu <br>
                            <input type="password" name="pass" >
                        </div>
                        <div class="row mb10">
                            <input type="checkbox" name="check" >Ghi nhớ tài khoản?
                        </div>
                            <div class="row mb10">
                            <input type="submit" name="dangnhap" value="Đăng nhập">
                        </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng kí thành viên</a>
                        </li>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb  ">
                    <div class="boxtitle ">DANG MỤC</div>
                    <div class="boxcontent1 boxsot">
                        <ul>
                            <?php
                            foreach($dmm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '
                                <li><a href="'.$linkdm.'">'.$name.'</a></li>
                                '
                                ;   }
                            ?>

                        </ul>
                    </div>
                    <div class="boxfooter">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="keyw">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row mb  ">
                    <div class="boxtitle  ">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent  ">
                        <?php
                        foreach($sptop10 as $sp){
                            extract($sp);
                            $img="upload/".$img;
                            $linksp="index.php?act=sanphamchitiet&idsp=".$id;
                            echo'
                            <div class="row mb10 top10 ">
                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>