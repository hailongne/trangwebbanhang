<?php
function viewcart($ktra){
    
    $tong=0;
    $i=1;
  

    foreach ($_SESSION['mycart'] as $cart) {
        $img = "upload/".$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
        $delsp="index.php?act=delcart&idcart='.$i.'";
        if($ktra==1){
            $thaotac='<th>Thao tác</th>';
            $xoa=' <td>  <a href="'.$delsp.'"><input type="button"  value="Xóa">  </a></td>';
        }else{
            $thaotac="";
            $xoa="";
        }
       
        echo '
        <tr>
        <th>Hình</th>
        <th>Sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        '.$thaotac.'
    </tr>
       
        <tr>
        <td><img src="'.$img.'" alt="" height="80px"></td>
        <td>'.$cart[1].'</td>
        <td>'.$cart[3].'</td>
        <td>'.$cart[4].'</td>
        <td>'.$ttien.'</td>
       '.$xoa.'
        </tr>
        ';
        $i+=1;
    }
   
    echo '
    <tr>
    <td colspan=4 >Tồng thành tiền</td>
   <td col7span=2>'.$tong.'</td>
   
   </tr>
    ';
  
}
function loadall_cart(){
    $sql = "SELECT * FROM cart order by id desc ";
    $listcart = pdo_query($sql);
    return $listcart;
}

function loadall_thongke(){
    $sql="select danhmuc.id as madm, danhmuc.name as tendm,
     count(sanpham.id) as countsp, min(sanpham.price) as minprice,
      max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listtk=pdo_query($sql);
    return $listtk;
}
?>