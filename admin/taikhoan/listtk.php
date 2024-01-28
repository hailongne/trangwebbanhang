<div class="row formcontent">
<div class="row mb10  headertiltle">
                <h1>DANH SÁCH KHÁCH HÀNG</h1>
            </div>
                <div class="row mb10 formtable">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>    Mật khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Vai trò</th></th>
                            <th></th>
                        </tr>

                       <?php
                       foreach($listtk as $tk){
                        extract($tk);
                       
                        $xoatk="index.php?act=xoatk&id=".$id;
                        echo'
                        <tr>
                        <td> <input type="checkbox" name="" id=""> </td>
                        <td>'.$id.'</td></td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td>
                        
                        <a href="'.$xoatk.'"> <input type="button" value="Xóa"></a>
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
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
                
         </div>