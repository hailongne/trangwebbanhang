<div class="row formcontent">
<div class="row mb10  headertiltle">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <form action="#" method="post">
                <div class="row mb10 formtable">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>

                       <?php
                       foreach($listdm as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo'
                        <tr>
                        <td> <input type="checkbox" name="" id=""> </td>
                        <td>'.$id.'</td></td>
                        <td>'.$name.'</td>
                        <td>
                        <a href="'.$suadm.'"> <input type="button" value="Sửa"></a>
                        <a href="'.$xoadm.'"> <input type="button" value="Xóa"></a>
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
                
            </form>
         </div>