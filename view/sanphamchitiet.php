<div class="row mb content3 boxtrai ">
    <div class="  mr ">
        <div class="row mb  ">
            <?php
            extract($listspct);
            echo ' <div class="boxtitle  ">' . $name . '</div>';
            ?>
            <div class="row boxcontent  ">
                <?php
                $img = "upload/" . $img;
                echo '<img class="row mb spct" src="' . $img . '"  height="150px" alt="">';
                echo $mota;
                ?>

            </div>

        </div>
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
             $("#binhluan").load("view/binhluan/binhluanform.php", {idpro:<?=$id?>});           
                });
            </script>
<div class="row " id="binhluan" >

</div>
        <div class="row mb  ">
            <div class="boxtitle  ">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent  ">
                <?php
                foreach ($spcl as $spsame) {
                    extract($spsame);
                    $linksp = "index.php?act=sanphamchitiet&idsp=" . $id;
                    echo '
            <li><a href="' . $linksp . '">' . $name . '</a></li>
            
            ';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include "view/boxphai.php";
?>