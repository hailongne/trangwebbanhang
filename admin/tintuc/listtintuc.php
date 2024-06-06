<div class="row formcontent">
    <div class="row mb  headertiltle">
        <h1>DANH SÁCH tin tức</h1>
    </div>
    <form action="index.php?atc=listtintuc" method="post">
        <input type="text" name="keyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listTinTuc as $tintuc) {
                extract($tintuc);
                echo '
                <option value="'.$danhmuc['id_danhmuc'].'">'.$danhmuc['ten_danhmuc'].'</option>
                        ';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <form action="index.php?atc=addtintuc" method="post">
        <div class="row mb10 formtable">
            <table>
                <tr>
                    <th></th>
                    <th>Mã tiêu đề </th>
                    <th>tên tiêu đề </th>
                    <th>nội dung</th>
                    <th>Hình ảnh</th>
                    <th>danh muc</th>
                    
                    <th></th>
                </tr>

                <?php
                foreach ($listTinTuc as $tintuc) { //list khia báo $ ở indẽ
                    extract( $tintuc);
                    $suatt = "index.php?act=suatt&id=" . $id;
                    $xoatt = "index.php?act=xoatt&id=" . $id;
                    $newimg = "../upload/" . $hinh_anh;
                    if (is_file($newimg)) {
                        $hinh_anh = "<img src='" . $newimg . "' height='80px'>";
                    } else {
                        $hinh_anh= "no load";
                    }
                    echo '
                        <tr>
                        <td> <input type="checkbox" name="" id=""> </td>
                        <td>' . $id . '</td></td>
                        <td>' . $tieu_de . '</td>
                        <td>' . $noi_dung . '</td>
                        <td>' . $hinh_anh . '</td>
                        <td>' . $ten_danhmuc . '</td>
                       
                        <td>
                        <a href="' . $suatt . '"> <input type="button" value="Sửa"></a>
                        <a href="' . $xoatt . '"> <input type="button" value="Xóa"></a>
                        </td>
                       </tr>
                        ';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục chọn">
            <a href="index.php?act=addtintuc"><input type="button" value="Nhập thêm"></a>
        </div>

    </form>
</div>