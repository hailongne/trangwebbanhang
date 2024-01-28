<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$listbl = loadall_bl($_POST["idpro"]);

$idpro = $_REQUEST["idpro"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <style>
        .binhluan table {
            width: 100%;
        }

        .binhluan table td:nth-child(1) {
            width: 50%;
            ;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
        }
    </style>
</head>

<body>

    <div class="row mb ">
        <div class="boxtitle  ">BÌNH LUẬN</div>
        <div class="boxcontent  binhluan ">
            <table>
                <?php
                foreach ($listbl as $bl) {
                    extract($bl);
                    echo '<tr></tr> <td><li> ' . $noidung . '</li></td>';
                    echo '<td>' . $iduser . '</td>';
                    echo ' <td>' . $ngaybinhluan . '</td></tr>';
                }
                ?>
            </table>
        </div>
        <div class="boxfooter">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung">
                <input type="submit" name="guibl" value="Gửi bình luận">
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST["guibl"]) && ($_POST["guibl"])) {
        $noidung = $_POST["noidung"];
        $iduser = $_SESSION["user"]["id"];
        $ngaybinhluan = DATE('h:i:sa d/m/Y');
        insert_bl($noidung, $iduser, $idpro, $ngaybinhluan);
        header("Location: ". $_SERVER['HTTP_REFERER']);

    }
    ?>

</body>

</html>