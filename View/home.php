
<div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">Áo Thun</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=hanghoa&act=aothun">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>
      </div>
<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row">

    </div>
    <!--Grid row-->
    <div class="row">
        <?php 
        $hh = new hanghoa(); 
        $result = $hh->getHangAoThun();

        while($set = $result->fetch()):
        ?>
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-3 text-left">

            <div class="zoom-container">
                <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="img-fluid zoom-img" alt="">
                <div class="overlay">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                </div>
            </div>

                   <a href="#" class="text-dark">
                <span><?php echo $set['tenhh']."-".$set['mausac'];?></span>
            </a>
            <h5 class="my-4 font-weight-bold text-danger"><?php echo $set['dongia'];?><sup><u>đ</u></sup></h5>
     
            <h5>Số lượt xem: <?php echo $set['soluotxem'];?></h5>
           
        </div>
        <?php endwhile; ?>
    </div>
    <!--Grid row-->
</section>

<style>
    /* Add this style to your CSS */
    .zoom-container {
        position: relative;
        overflow: hidden;
    }

    .zoom-img {
        transition: transform 0.3s ease-in-out;
    }

    .overlay {
        position: absolute;
        top: -30px; /* Adjust this value based on your design */
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s ease-in-out, top 0.3s ease-in-out;
    }

    .zoom-container:hover .zoom-img {
        transform: scale(1.2);
    }

    .zoom-container:hover .overlay {
        opacity: 1;
        top: 33%; /* 33% of the image height */
    }

    .overlay i {
        color: white; /* Set the color of your icon */
        background-color: #ff0000; /* Set the background color of your icon */
        padding: 10px; /* Adjust this value based on your design */
        border-radius: 50%; /* Make it round */
        cursor: pointer;
    }

    /* Adjust the font styles for price and product name */
    .my-4 {
        font-size: 16px; /* Adjust the font size for the price */
        font-weight: bold; /* Set the font weight */
        margin-bottom: 10px; /* Adjust the margin */
    }

    .text-dark span {
        font-size: 14px; /* Adjust the default font size for the product name */
        font-weight: normal; /* Set the default font weight */
        color: black; /* Set the default color for the product name */
        transition: color 0.3s ease-in-out; /* Add transition for color change */
    }

    .text-dark span:hover {
        color: red; /* Set the color on hover */
    }

    /* You can further customize these styles based on your design preferences */
</style>
<!--Section: Examples-->
<div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">Áo Sơ Mi</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=hanghoa&act=aosomi">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>
      </div>
<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row">
        <!-- ... (unchanged code) ... -->
    </div>
    <!--Grid row-->
    <div class="row">
        <?php 
        $hh = new hanghoa(); 
        $result = $hh->getHangAoSoMi();

        while($set = $result->fetch()):
        ?>
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-3 text-left">

            <div class="zoom-container">
                <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="img-fluid zoom-img" alt="">
                <div class="overlay">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                </div>
            </div>

                   <a href="#" class="text-dark">
                <span><?php echo $set['tenhh']."-".$set['mausac'];?></span>
            </a>
            <h5 class="my-4 font-weight-bold text-danger"><?php echo $set['dongia'];?><sup><u>đ</u></sup></h5>
     
            <h5>Số lượt xem: <?php echo $set['soluotxem'];?></h5>
           
        </div>
        <?php endwhile; ?>
    </div>
    <!--Grid row-->
</section>
<div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">ÁO PoLo</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=hanghoa&act=aopolo">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>
      </div>
<!--Section: Examples-->

<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row">
        <!-- ... (unchanged code) ... -->
    </div>
    <!--Grid row-->
    <div class="row">
        <?php 
        $hh = new hanghoa(); 
        $result = $hh->getHangAoPoLo();

        while($set = $result->fetch()):
        ?>
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-3 text-left">

            <div class="zoom-container">
                <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="img-fluid zoom-img" alt="">
                <div class="overlay">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                </div>
            </div>

                   <a href="#" class="text-dark">
                <span><?php echo $set['tenhh']."-".$set['mausac'];?></span>
            </a>
            <h5 class="my-4 font-weight-bold text-danger"><?php echo $set['dongia'];?><sup><u>đ</u></sup></h5>
     
            <h5>Số lượt xem: <?php echo $set['soluotxem'];?></h5>
           
        </div>
        <?php endwhile; ?>
    </div>
    <!--Grid row-->
</section>
<div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">Áo Khoác</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=hanghoa&act=aokhoac">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>
      </div>
<!--Section: Examples-->

<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row">
        <!-- ... (unchanged code) ... -->
    </div>
    <!--Grid row-->
    <div class="row">
        <?php 
        $hh = new hanghoa(); 
        $result = $hh->getHangAoKhoac();

        while($set = $result->fetch()):
        ?>
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-3 text-left">

            <div class="zoom-container">
                <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="img-fluid zoom-img" alt="">
                <div class="overlay">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                </div>
            </div>

                   <a href="#" class="text-dark">
                <span><?php echo $set['tenhh']."-".$set['mausac'];?></span>
            </a>
            <h5 class="my-4 font-weight-bold text-danger"><?php echo $set['dongia'];?><sup><u>đ</u></sup></h5>
     
            <h5>Số lượt xem: <?php echo $set['soluotxem'];?></h5>
           
        </div>
        <?php endwhile; ?>
    </div>
    <!--Grid row-->
</section>