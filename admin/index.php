<?php
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "..//model/pdo.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "../model/tintuc.php";
include "header.php";


if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        // danh mục
        case "adddm":
            if (isset($_POST["them"]) && ($_POST["them"])) {
                $tenloai = $_POST["tenloai"];
                insert_dm($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case "listdm":
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;
        case "xoadm":
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                delete_dm($_GET["id"]);
            }
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;

        case "suadm":
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $listsua = loadone_dm($_GET["id"]);
            }
            include "danhmuc/update.php";

            break;
        case "updatedm":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $tenloai = $_POST["tenloai"];
                $id = $_POST["id"];
                capnhat_dm($id, $tenloai);
                $thongbao = "Thêm thành công";
            }
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;
        // san pham
        case "addsp":
            if (isset($_POST["them"]) && ($_POST["them"])) {
                $tensp = $_POST["tensp"];
                $price = $_POST["price"];
                $iddm = $_POST["iddm"];
                $img = $_FILES["img"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "Image uploaded successfully";
                } else {
                    // echo "Image uploaded not successfully";
                }
                $mota = $_POST["mota"];
                insert_sp($tensp, $price, $img, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdm = loadall_dm();
            include "sanpham/add.php";
            break;
        case "listsp":
            if (isset($_POST["listok"]) && ($_POST["listok"])) {
            } else {
                $_POST["keyw"] = '';
                $_POST["iddm"] = 0;
            }
            $listdm = loadall_dm();
            $listsp = loadall_sp($_POST["keyw"], $_POST["iddm"]);
            include "sanpham/list.php";
            break;
        case "xoasp":
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                delete_sp($_GET["id"]);
            }
            $listsp = loadall_sp("", 0);
            include "sanpham/list.php";
            break;

        case "suasp":
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $suasp = loadone_sp($_GET["id"]);
            }
            $listdm = loadall_dm();
            include "sanpham/update.php";
            break;
        case "updatesp":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $id = $_POST["id"];
                $tensp = $_POST["tensp"];
                $price = $_POST["price"];
                $iddm = $_POST["iddm"];
                $img = $_FILES["img"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "Image uploaded successfully";
                } else {
                    // echo "Image uploaded not successfully";
                }
                $mota = $_POST["mota"];
                capnhat_sp($id, $tensp, $price, $img, $mota, $iddm);
                $thongbao = "Sua thành công";
            }
            $listdm = loadall_dm();
            $listsp = loadall_sp("", 0);
            include "sanpham/list.php";
            break;
        case "dskh":
            $listtk = loadall_tk();
            include "taikhoan/listtk.php";
            break;
        case "dsbl":
            $listbl = loadall_bl(0);
            include "binhluan/listbl.php";
            break;
        case "xoabl":
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                delete_bl($_GET["id"]);
            }
            $listbl = loadall_bl(0);
            include "binhluan/listbl.php";
            break;
        case "xoatk":
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                delete_tk($_GET["id"]);
            }
            $listtk = loadall_tk();
            include "taikhoan/listtk.php";
            break;
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
            //tin tức
        case 'addtintuc':
            $tieu_de='';
            $noi_dung='';
            $iddm='';
            $img='';
            if (isset($_POST['them']) && $_POST['them']) { //chữ thêm đc lấy ở trang addtintuc chỗ nút thêm mới name =them

                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $id=$_POST['id'];
                $iddm = $_POST['iddm'];

                $img = $_FILES["img"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "Image uploaded successfully";
                } else {
                    // echo "Image uploaded not successfully";
                }
                // $mota = $_POST["mota"];
                insert_tintuc( $tieude, $noidung, $img, $iddm,$id);
                
                
                $thongbao = "Thêm thành công";




            }
            $listdmtt = loadAll_dmtintuc();
            include('tintuc/add.php');
            break;
        case 'listtintuc':
            $listTinTuc = loadAll_TinTuc();
            include('tintuc/listtintuc.php');
        
        case 'suatt':
            $tieu_de='';
            $noi_dung='';
            $iddm='';
            $img='';
        if(isset($_GET['id']) && $_GET['id']>0){
            $id=$_GET['id'];
            //lấy ds dm tt
            $listdm = loadAll_dmtintuc();
            //lấy ttt theo id
            $tintuc=loadTinTucById($id);
            //var_dump($tintuc);
include 'tintuc/update.php';
        }
        //nhap lai ở nâm=nhap lai
        if(isset($_POST['capnhat']) && $_POST['capnhat']){
            $id=$_POST['id'];
            $tieu_de = $_POST['tentd'];
            $noi_dung = $_POST['mota'];
            $iddm = $_POST['iddm'];
            $img = $_FILES["img"]["name"];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                // echo "Image uploaded successfully";
            } else {
                // echo "Image uploaded not successfully";
            }
            // $mota = $_POST["mota"];
            capnhat_tintuc($tieu_de, $noi_dung, $img, $iddm,$id);
            $thongbao = "Thêm thành công";
            $listTinTuc = loadAll_TinTuc();
            include('tintuc/listtintuc.php');
            
        }
break;
case "xoatt":
    if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
        delete_TinTuc($_GET["id"]);
    }
    $listTinTuc = loadAll_TinTuc();
    
    //lấy ttt theo id
    include "tintuc/listtintuc.php";
    break;
    


        
    
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
?>