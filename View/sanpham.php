
<!--Phân trang-->
<?php
    $hh=new hanghoa();
    $result=$hh->getHangAoAll();
    $count=$result->rowCount();
    //cho giới hạn môi xtrang bao nhieu sản phẩm
    $limit=20;
    //tinh xem có bao nh page
    $trang=new Page();
    ///lấy ra số trang
    $page=$trang->findPage($count,$limit);//trả vè 
    //lấy start
    $start=$trang->findStart($limit);
    //khởi đầu trang 
    $current_Page=isset($_GET['page'])?$_GET['page']:1;
?>
<?php
$ac=1;
if (isset($_GET['action'])) {
    if ($_GET['action']=='hanghoa') {
        if ($_GET['act']=='aopolo') {
            $ac=2;
        }if($_GET['act']=='aosomi') {
            $ac=3;       
        }if($_GET['act']=='aokhoac') {
            $ac=4;
        }if($_GET['act']=='aoall'){
            $ac=5;
        }
    }

}
?>
<style>
/* Thêm kiểu cho menu dọc */
.list-group {
    padding-left: 10px; /* Khoảng lề bên trái cho menu */
}

.list-group-item {
    font-weight: bold;
    font-size: 15px;
    color: black;
    border: none;
    margin-bottom: 5px;
    padding: 10px; /* Khoảng lề trong mỗi mục menu */
}

/* Thêm kiểu cho menu con */
.list-group-item-sub {
    padding-left: 30px; /* Tăng khoảng lề cho menu con */
}

/* Loại bỏ chấm phía trước của Tất cả sản phẩm */
.list-group-item.list-group-item-action::before {
    content: none;
}

/* Kiểu cho tiêu đề sản phẩm */
h4 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Kiểu cho sản phẩm */
.mb-3.text-left {
    margin-bottom: 20px;
}

/* Kiểu cho giá và tên sản phẩm */
.my-4.font-weight-bold {
    color: red;
}
/* Add this CSS to change the hover color of the product name to red */
.mb-3.text-left span {
        color: black;
        transition: color 0.3s; /* Add smooth transition effect */
        text-decoration: none; /* Remove underline by default */
    }

    /* Change the color to red on hover */
    .mb-3.text-left:hover span {
        color: red;
    }
/* Kiểu cho nút New */
.btn.btn-danger {
    font-size: 14px;
}

/* Kiểu cho số lượt xem */
h5 {
    font-size: 14px;
    color: #555;
}
/* Add your custom styles for the sidebar */
.col-md-3 {
    background-color: #f8f9fa; /* Set a background color */
    padding: 15px; /* Add padding for better spacing */
    border-right: 1px solid #dee2e6; /* Add a border on the right side */
}

.list-group {
    margin-bottom: 20px; /* Add margin at the bottom */
}

.list-group-item {
    font-size: 18px;
    color: #495057;
    border: none;
    border-radius: 5px; /* Add rounded corners */
    transition: background-color 0.3s; /* Add a transition for a smooth effect */

    /* Center the text and add some padding */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

.list-group-item:hover {
    background-color: #e9ecef; /* Change background color on hover */
}

/* Style the icon inside the list items */
.list-group-item i {
    margin-right: 10px;
}
.row2{
    padding: 25px;
}

/* Add more styles as needed */

</style>


<div class="container-fluid">
    <div class="row2">
        <!-- Left Sidebar -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="?action=hanghoa&act=aoall" style="font-size: 24px;" class="list-group-item list-group-item-action"><i class="bi bi-hdd-stack-fill"></i>  </i>Danh Mục</a>
                <a href="?action=hanghoa&act=aopolo" class="list-group-item list-group-item-action"><i class="bi bi-filter-left"> </i>Áo Polo</a>
                <a href="?action=hanghoa&act=aosomi" class="list-group-item list-group-item-action"><i class="bi bi-filter-left"> </i>Áo Sơ Mi</a>
                <a href="?action=hanghoa&act=aokhoac" class="list-group-item list-group-item-action"><i class="bi bi-filter-left"> </i>Áo Khoác</a>
                <a href="?action=hanghoa&act=aothun" class="list-group-item list-group-item-action"><i class="bi bi-filter-left"> </i>Áo Thun</a>
                     </div>
        </div>
        <!-- Right Content -->
        <div class="col-md-9">
            <section>
                <?php
                $hh = new hanghoa();
                switch ($ac) {
                    case 1:
                        $result = $hh->getHangAoThunAll();
                        echo '<h1 class="text-uppercase font-family: "Futura",sans-serif; mb-5">Áo Thun</h1>';
                        break;
                    case 2:
                        $result = $hh->getHangAoPoloAll();
                        echo '<h1 class="text-uppercase  font-family: "Futura",sans-serif; mb-5">Áo Polo</h1>';
                        break;
                    case 3:
                        $result = $hh->getHangAoSoMiAll();
                        echo '<h1 class="text-uppercase  font-family: "Futura",sans-serif; mb-5">Áo Sơ Mi</h1>';
                        break;
                    case 4:
                        $result = $hh->getHangAoKhoacAll();
                        echo '<h1 class="text-uppercase  font-family: "Futura",sans-serif; mb-5">Áo Khoác</h1>';
                        break;
                    case 5:
                        ///$result = $hh->getHangAoAll();
                        $result = $hh->getHangAoAll_page($start,$limit);
                        echo '<h1 class="text-uppercase  font-family: "Futura",sans-serif; mb-5">Tất Cả Các Sản Phẩm</h1>';
                  
                          break;
                }

                while ($set = $result->fetch()):
                    ?>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-3 text-left">
                        <div class="view overlay z-depth-1-half">
                            <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo $set['dongia']; ?><sup><u>đ</u></sup></br>
                        </h5>
                        <a href="index.php?action=hanghoa&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                            <span><?php echo $set['tenhh'] . "-" . $set['mausac']; ?></span></br></a>
                        <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                        <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5>
                    </div>
                <?php endwhile; ?>
            </section>
        </div>
    </div>
</div>

<div class="col-md-6 div col-md-offset-3">
    <ul class="pagination">
        <?php
        // Display pagination links only when the category is "Tất cả sản phẩm"
        if ($ac == 5) {
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li><a href="index.php?action=hanghoa&act=aoall&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php }
        }
        ?>
    </ul>
</div>
