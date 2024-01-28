<?php
session_start();
include "view/header.php";
include "model/sanpham.php";
include "model/pdo.php";
include "model/danhmuc.php";
include "model/cart.php";
include "model/taikhoan.php";
if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] =[];
$spm= loadall_sp_home();
$dmm=loadall_dm();
$sptop10=loadall_sp_top10();
if(isset($_GET["act"]) && ($_GET["act"]!="")){
    $act=$_GET["act"];
    switch($act){
        case "sanphamchitiet":
            if(isset($_GET["idsp"])&& ($_GET["idsp"])>0){
                $listspct= loadone_sp($_GET["idsp"]);
                extract($listspct);
                $spcl=loadsp_cungloai($id,$iddm);
                include "view/sanphamchitiet.php";
            }else{
                echo "Lỗi to đùng";
                include "view/home.php";
            }
            break;
            case "sanpham":
                if(isset($_POST["keyw"])&&($_POST["keyw"]!="")){
                    $keyw=$_POST["keyw"];
                }else{
                    $keyw="";
                }
                if(isset($_GET["iddm"])&&($_GET["iddm"]>0)){
                    $iddm=$_GET["iddm"];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sp($keyw,$iddm);
                   $tendm=load_tendm($iddm);
                    include "view/sanpham.php";
                break;
        case "dangky":
            if(isset($_POST["dangky"])&&($_POST["dangky"])){
                $user=$_POST["user"];
                $pass=$_POST["pass"];
                $email=$_POST["email"];
                insert_tk($user,$pass,$email);
                $thongbao1="Đã đăng kí thành công.Vào cập nhật để thao tác thêm";
            }
            include "view/taikhoan/dangki.php";
            break;
            case "dangnhap":
                if(isset($_POST["dangnhap"])&&($_POST["dangnhap"])){
                    $user=$_POST["user"];
                    $pass=$_POST["pass"];
                    $check=check($user,$pass);
                    if(is_array($check)){
                        $_SESSION["user"]=$check;
                        $thongbao1="Đã đăng nhập thành công";
                        header("Location:index.php");
                    }
                    $thongbao1="Tài khoản không tồn tại,vui lòng đăng kí ";
                }
                include "view/taikhoan/dangki.php";
                break;
                case "edit_tk":
                    if(isset($_POST["capnhat"])&&($_POST["capnhat"])){
                        $user=$_POST["user"];
                        $pass=$_POST["pass"];
                        $email=$_POST["email"];
                        $address=$_POST["address"];
                        $telephone=$_POST["telephone"];
                        $id=$_POST["id"];
                        capnhat_tk($id,$user,$pass,$email,$address,$telephone);
                        $_SESSION["user"]=check($user,$pass);
                    }
                    include "view/taikhoan/capnhattaikhoan.php";
                    break;
                    case "quenmk":
                        if(isset($_POST["gui"])&&($_POST["gui"])){
                            $email=$_POST["email"];
                           $checkemail=checkemail($email);
                           if(is_array($checkemail)){
                            $thongbao1="Mật khẩu của bạn là:".$checkemail["pass"];
                           }else{
                            $thongbao1="Email không chính xác";
                           }
                        }
                        include "view/taikhoan/quenmatkhau.php";
                        break;
            case "gioithieu":
                include "view/gioithieu.php";
                break;
                case "thoat":
                    session_destroy();
                    header("Location: index.php");
                    break;
                    case "addtocart":
                        if(isset($_POST["addtocart"])&& ($_POST["addtocart"])){
                            $id=$_POST["id"];
                            $name=$_POST["name"];
                            $img=$_POST["img"];
                            $price=$_POST["price"];
                            $soluong=1;
                            $ttien=$soluong*$price;
                            $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                           
                            array_push($_SESSION['mycart'],$spadd);
                        }
                       include "view/cart/viewcart.php";
                        break;
                        case "delcart":
            
                            if(isset($_GET['idcart']) && ($_GET['idcart']>=0)){
                                array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                            }else{
                                $_SESSION['mycart']=[];
                            }
                           header("Location:index.php?act=viewcart");
                            break;
                        case "billcomfirm":

                            include "view/lienhe.php";
                            break;
                            case "bill":
                                include "view/cart/bill.php";
                                break;
            case "lienhe":
                include "view/lienhe.php";
                break;
                default:
                include "view/home.php";
                break;
    }
}else{
    include "view/home.php";
}
include "view/footer.php";
?>