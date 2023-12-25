<?php
 $act="hanghoa";
 if (isset($_GET['act'])) {
    $act=$_GET['act'];
 } 
 switch ($act) {
    case 'aothun':
        include_once "./View/sanpham.php";
            break;
        case 'aosomi':
            include_once "./View/sanpham.php";
            break;
        case 'aokhoac':
            include_once "./View/sanpham.php";
                break;
        case 'aopolo':
            include_once "./View/sanpham.php";
                break;
        case 'aoall':
        include_once "./View/sanpham.php";
            break;
 }
?>