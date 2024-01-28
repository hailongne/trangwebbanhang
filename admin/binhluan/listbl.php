<div class="row formcontent">
<div class="row mb10  headertiltle">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
                <div class="row mb10 formtable">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung bình luận</th>
                            <th>ID User</th>
                            <th>ID Pro</th>
                            <th>Ngày đăng bình luận</th>
                            <th></th>
                        </tr>

                       <?php
                       foreach($listbl as $bl){
                        extract($bl);
                       
                        $xoabl="index.php?act=xoabl&id=".$id;
                        echo'
                        <tr>
                        <td> <input type="checkbox" name="" id=""> </td>
                        <td>'.$id.'</td></td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td
                        <a href="'.$xoabl.'"> <input type="button" value="Xóa"></a>
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
                <a href="index.php?act=addbl"><input type="button" value="Nhập thêm"></a>
                </div>
                
         </div>