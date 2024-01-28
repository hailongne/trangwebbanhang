<div class="row formcontent">
<div class="row mb  headertiltle">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <form action="index.php?atc=listsp" method="post">
                <input type="text" name="keyw">
                <select name="iddm" >
                    <option value="0" selected >Tất cả</option>
                    <?php
                       foreach($listdm as $dm){
                        extract($dm);
                        echo '
                        <option value="'.$id.'">'.$name.'</option>
                        ';
                       }
                       ?>
                </select>
                <input type="submit" name="listok" value="GO">
                </form>        
            <form action="index.php?atc=addsp" method="post">       
                <div class="row mb10 formtable">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã sản phẩm </th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Lượt xem</th>
                            <th></th>
                        </tr>

                       <?php
                       foreach($listsp as $sanpham){
                        extract($sanpham);
                        $suasp="index.php?act=suasp&id=".$id;
                        $xoasp="index.php?act=xoasp&id=".$id;
                        $newimg="../upload/".$img;
                        if(is_file($newimg)){
                            $img="<img src='".$newimg."' height='80px'>";
                        }else{
                            $img="no load";
                        }
                        echo'
                        <tr>
                        <td> <input type="checkbox" name="" id=""> </td>
                        <td>'.$id.'</td></td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$img.'</td>
                        <td>'.$luotxem.'</td>
                        <td>
                        <a href="'.$suasp.'"> <input type="button" value="Sửa"></a>
                        <a href="'.$xoasp.'"> <input type="button" value="Xóa"></a>
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
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
                
            </form>
         </div>