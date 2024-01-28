<div class="row mb content3  boxtrai">
            <div class= "  mr ">
                <div class="banner mb">
                   <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="view/images/Banner5.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="view/images/banner6.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="view/images/banner7.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
                </div>
                    <?php
                    foreach($spm as $sp){
                        extract($sp);
                        $hinh="upload/".$img;
                        $linksp="index.php?act=sanphamchitiet&idsp=".$id;
                        echo '
                        <div class=" mr mb sp ">
                        <a href="'.$linksp.'"><img src="'.$hinh.'"  alt=""></a>
                        <div class="boxchild mb10">
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
        <?php
           include "view/boxphai.php";
           ?>