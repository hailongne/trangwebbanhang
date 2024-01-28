<div class="row mb content3 boxtrai ">
    <div class="  mr ">
        <div class="row mb  ">
        <div class="boxtitle  ">SẢN PHẨM <strong><?=$tendm?></strong> </div>
        <div class="row boxcontent  ">
        <?php
                    foreach($dssp as $list){
                        extract($list);
                        $hinh="upload/".$img;
                        $linksp="index.php?act=sanphamchitiet&idsp=".$id;
                        echo '
                        <div class=" mr sp">
                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                        <div class="boxchild mb">
                            <p>'.$price.'</p>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>
                        <div class="row themgio">
                        <form action="index.php?act=addtocart" method="post">
                          <input type="hidden" name="id" value="'.$id.'">
                          <input type="hidden" name="name" value="'.$name.'">
                          <input type="hidden" name="img" value="'.$img.'">
                          <input type="hidden" name="price" value="'.$price.'">
                          <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                      </div>
                    </div>
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
</div>