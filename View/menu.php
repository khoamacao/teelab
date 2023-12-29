
<style>
    /* Adjustments for the navbar */
    .navbar-nav {
        margin-left: auto; /* This will push the navigation items to the left */
    }

    .navbar-nav .nav-item {
        margin-right: 10px; /* Adjust the spacing between navigation items if needed */
    }

    /* Style for the search input and button */
    .input-group {
        display: flex;
        align-items: center;
    }

    .form-control {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    #btsearch {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
</style>

    <!-- dang ky -->
    <section class="col-12">
       
            <div class="col-12">
                <div class="row">
                    <nav class="navbar navbar-expand-lg n navbar-light bg-light" style="margin-bottom: 0px; ">
                    <form class="form-inline" action="" method="post">
                                <div class="input-group">
                                    <input type="text" style="width: 200px; height: 40px; border-radius: 10px;" name="txtsearch" class="form-control" placeholder="Tìm Kiếm" />
                                    <button style="width: 35px; height: 40px; border-radius: 10%;" type="submit" id="btsearch" value=""><i class="bi bi-search-heart"></i></button>
                                </div>
                            </form>
                        <!-- Right -->
                        <ul class="navbar-nav ml-auto">
                                
                            <li class="nav-item">
                                <a href="index.php?action=dangky" class="nav-link">Đăng Ký</a>
                            </li>
                            <?php
                                if (!isset($_SESSION['makh'])) {

                                } 
                                ?>
                            <li class="nav-item">
                                <a href="index.php?action=dangnhap" class="nav-link">Đăng Nhập</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?action=dangxuat" class="nav-link">Đăng Xuất</a>
                            </li>
                            <li>
                                <a href="" class="nav-link"><img src="Content/imagetourdien/cartx2.png" width="30px" height="30px" alt=""></a>

                            </li>
                            <li>
                                <p style="color: red; margin-top: 20px; margin-left: 0px;">(0)</p>
                            </li>
                            <li>
                                    <p style="color: red; margin-top: 20px; margin-left: 0px;"></p>
                                
                            </li>
                            <li>
                            <?php 
                                if(isset($_SESSION['makh'])&& isset($_SESSION['tenkh'])){
                                    echo '  <p style="color: red; margin-top: 20px; margin-left: 0px;">'.$_SESSION['tenkh'].'</p>';

                                }       else{
                                    echo '  <p style="color: red; margin-top: 20px; margin-left: 0px;">Xin Chào!</p>';
                                }     
                                              
                                 ?>
                            <li>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
       
    </section>


</header>
<!-- dang ky -->
<style>
        /* Add your custom styles here */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: white;
            color: black;
            padding: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar-brand {
            color: black;
            font-size: 25px;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar-nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: row;
            justify-content: space-around; /* Center the items horizontally and space them out */
            width: 80%;
        }

        .navbar-nav > li {
            margin-right: 5px;
        }

        .nav-link {
            color: black;
            text-decoration: none;
            font-size: 18px;
            letter-spacing: 1px; /* Add some letter spacing for clarity */
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #333;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            margin-top: 10px;
        }

        .dropdown-menu a {
            color: #fff;
            padding: 8px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
        background-color: red;
        }
        hr {
        height: 0.5px;
        background-color: black; /* Màu sắc của đường gạch ngang */
        margin: 0;
        visibility: visible;
        width: 90%; /* Kích thước chiều rộng của hr */
    }
    .nav-link:hover {
    color: black;
    opacity: 0.5; /* Set the desired opacity value */
}
</style>

        
 
   

<nav>
    <a class="navbar-brand" href=""><img src="./Content/imagetourdien/logo.webp"></img></a>

    <ul class="navbar-nav">
        <!-- First Line -->
        <li class="nav-item">
            <a class="nav-link" style="font-size: 28px;" href="index.php">Trang Chủ</a>           
        </li>
        <li class="nav-item">
            <a class="nav-link" style="font-size: 28px;" href="chinhsachdoitra.php">Chính Sách Đổi Trả</a>        
        </li>
        <li class="nav-item">
            <a class="nav-link" style="font-size: 28px;" href="size.php">Bảng Size</a>    
        </li>
        <li class="nav-item">
            <a class="nav-link" style="font-size: 28px;" href="hethongcuahang.php">Hệ Thống Cửa Hàng</a>
        </li>
    </ul>
<hr class="my-1 "> 
    <ul class="navbar-nav">
        <!-- Second Line -->
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1/teelab/index.php?action=hanghoa&act=aoall">Tất Cả Sản Phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1/teelab/index.php?action=hanghoa&act=aothun">Áo Thun</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1/teelab/index.php?action=hanghoa&act=aopolo">Áo PoLo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1/teelab/index.php?action=hanghoa&act=aosomi">Áo Sơ Mi</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1/teelab/index.php?action=hanghoa&act=aokhoac">Áo Khoác</a>
        </li>
       
        <!-- Add other categories as needed -->
    </ul>
</nav>
