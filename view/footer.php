<div >
<footer>
<section class="Logo">
            <img src="upload/th2.jpg" alt="" width="300px" height="300px">
          </section>


          <section class="card_2">
              <h3>VỀ CHÚNG TÔI</h3>
              <a href="#">Giới thiệu về TocoToco</a>
              <a href="gioithieu.html">Nhượng quyền</a>
              <a href="">Tin tức khuyến mại</a>
              <a href="">Cửa hàng</a>
              <a href="#">Quy định chung</a>
              <a href="#">TT liên hệ &#038; ĐKKD</a>
          </section>

          <section class="card_3">
                <h3>CHÍNH SÁCH</h3>
                <a href="#">Chính sách thành viên</a>
                <a href="#">Hình thức thanh toán</a>
                <a href="#">Vận chuyển giao nhận</a>
                <a href="#">Đổi trả và hoàn tiền</a>
                <a href="#">Bảo vệ thông tin cá nhân</a>
                <a href="#">Bảo trì, bảo hành</a>

          </section>

          <section class="card_3">
            <h3>Hỗ Trợ khách hàng</h3>
            <a href="#">Chính sách thành viên</a>
            <a href="#">Hình thức thanh toán</a>
            <a href="#">Vận chuyển giao nhận</a>
            <a href="#">Đổi trả và hoàn tiền</a>
            <a href="#">Bảo vệ thông tin cá nhân</a>
            <a href="#">Bảo trì, bảo hành</a>

      </section>
        </footer>
        </div>

    </div>
    <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}
    </script>
</body>
</html>