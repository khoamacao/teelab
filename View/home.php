<section class="section_about container" style>
	<h1 class="title">Enjoy Your Youth!</h1>
	<div class="content"> Không chỉ là thời trang, TEELAB còn là “phòng thí nghiệm” của tuổi trẻ - nơi nghiên cứu và cho ra đời nguồn năng lượng mang tên “Youth”. Chúng mình luôn muốn tạo nên những trải nghiệm vui vẻ, năng động và trẻ trung.</div>
	
</section>
<div class="row1">
          <div class="col-lg-8 text-right">
          <h1 class="mb-5" style="color: black; font-family: 'Futura', sans-serif;">Áo Thun</h1>
       </div>
          <div class="col-lg-4 text-right">
              <a href="index.php?action=hanghoa&act=aothun">
                  <span style="color: gray;">Xem chi tiết</span>
                </div>
         
      </div>
<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row1">

    </div>
    <!--Grid row1-->
    <div class="row1">
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
            <a href="index.php?action=hanghoa&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                <span><?php echo $set['tenhh']."-".$set['mausac'];?></span>
            </a>
            <h5 class="my-4 font-weight-bold text-danger"><?php echo $set['dongia'];?><sup><u>đ</u></sup></h5>
     
            <h5>Số lượt xem: <?php echo $set['soluotxem'];?></h5>
           
        </div>
        <?php endwhile; ?>
    </div>
    <!--Grid row1-->
</section>

<style>
    .row1{
        margin-left: 40px;
        margin-right: 40px;
        padding: 10px;
    }
    .section_about{
        text-align: center;
        margin-top: 50px;
        padding: 20px;
    }
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
    .mb-3.text-left span {
    color: black;
    transition: color 0.3s; /* Add smooth transition effect */
}

/* Change the color to red on hover and remove underline */
.mb-3.text-left:hover span {
    color: red;
    text-decoration: none; /* Remove underline on hover */
}


    /* You can further customize these styles based on your design preferences */
</style>
<!--Section: Examples-->
<div class="row1">
          <div class="col-lg-8 text-right">
          <h1 class="mb-5 " style="color: black; font-family: 'Futura', sans-serif;">Áo Sơ Mi</h1>
          </div>
          <div class="col-lg-4 text-right">
              <a href="index.php?action=hanghoa&act=aosomi">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>
      </div>
<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row1">
        <!-- ... (unchanged code) ... -->
    </div>
    <!--Grid row1-->
    <div class="row1">
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
<a href="index.php?action=hanghoa&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
    <span><?php echo $set['tenhh']."-".$set['mausac'];?></span>
</a>
<h5 class="my-4 font-weight-bold text-danger"><?php echo $set['dongia'];?><sup><u>đ</u></sup></h5>

<h5>Số lượt xem: <?php echo $set['soluotxem'];?></h5>

</div>
        <?php endwhile; ?>
    </div>
    <!--Grid row1-->
</section>
<div class="row1">
          <div class="col-lg-8 text-right">
          <h1 class="mb-5" style="color: black; font-family: 'Futura', sans-serif;">Áo Polo</h1>    
          </div>
          <div class="col-lg-4 text-right ">
              <a href="index.php?action=hanghoa&act=aopolo">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>
      </div>
<!--Section: Examples-->

<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row1">
        <!-- ... (unchanged code) ... -->
    </div>
    <!--Grid row1-->
    <div class="row1">
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

            <a href="index.php?action=hanghoa&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                <span><?php echo $set['tenhh']."-".$set['mausac'];?></span>
            </a>
            <h5 class="my-4 font-weight-bold text-danger"><?php echo $set['dongia'];?><sup><u>đ</u></sup></h5>
     
            <h5>Số lượt xem: <?php echo $set['soluotxem'];?></h5>
           
        </div>
        <?php endwhile; ?>
    </div>
    <!--Grid row1-->
</section>
<div class="row1">
          <div class="col-lg-8 text-right">
          <h1 class="mb-5 "style="color: black; font-family: 'Futura', sans-serif;">Áo Khoác</h1>
          </div>
          <div class="col-lg-4 text-right">
              <a href="index.php?action=hanghoa&act=aokhoac">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>
      </div>
<!--Section: Examples-->

<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row1">
        <!-- ... (unchanged code) ... -->
    </div>
    <!--Grid row1-->
    <div class="row1">
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

            <a href="index.php?action=hanghoa&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                <span><?php echo $set['tenhh']."-".$set['mausac'];?></span>
            </a>
            <h5 class="my-4 font-weight-bold text-danger"><?php echo $set['dongia'];?><sup><u>đ</u></sup></h5>
     
            <h5>Số lượt xem: <?php echo $set['soluotxem'];?></h5>
           
        </div>
        <?php endwhile; ?>
    </div>
    <!--Grid row1-->


</section>
<hr class="my-1 " > 
<section class="section_feedback">
	<div class="container">
	 
		<h1 style="color: black; font-family: 'Futura', sans-serif; font-size: 50px; margin-top: 50px;">Find out TEELAB more</h1>
    <div class="block-content">
			<div class="feedback-swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-multirow">
				<div class="swiper-wrapper" style="width: 1160px; transform: translate3d(0px, 0px, 0px);">
					<div class="swiper-slide swiper-slide-active" style="order: 0; width: 222px; margin-right: 10px;">
						<a href="#" class="clearfix" title="Teelab">
							<img width="291" height="291" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_1.jpg?1702398129862" data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_1.jpg?1702398129862" alt="Teelab" data-was-processed="true">
						</a>
					</div>
					<div class="swiper-slide swiper-slide-next" style="-webkit-box-ordinal-group: 1; order: 1; width: 222px; margin-right: 10px;">
						<a href="#" class="clearfix" title="Teelab">
							<img width="291" height="291" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_2.jpg?1702398129862" data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_2.jpg?1702398129862" alt="Teelab" data-was-processed="true">
						</a>
					</div>
					<div class="swiper-slide" style="-webkit-box-ordinal-group: 5; order: 5; margin-top: 10px; width: 222px; margin-right: 10px;">
						<a href="#" class="clearfix" title="Teelab">
							<img width="291" height="291" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_3.jpg?1702398129862" data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_3.jpg?1702398129862" alt="Teelab" data-was-processed="true">
						</a>
					</div>
					<div class="swiper-slide" style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 10px; width: 222px; margin-right: 10px;">
						<a href="#" class="clearfix" title="Teelab">
							<img width="291" height="291" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_4.jpg?1702398129862" data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_4.jpg?1702398129862" alt="Teelab" data-was-processed="true">
						</a>
					</div>
					<div class="swiper-slide" style="-webkit-box-ordinal-group: 2; order: 2; width: 222px; margin-right: 10px;">
						<a href="#" class="clearfix" title="ND Shoes">
							<img width="291" height="291" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_5.jpg?1702398129862" data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_5.jpg?1702398129862" alt="ND Shoes" data-was-processed="true">
						</a>
					</div>
					<div class="swiper-slide" style="-webkit-box-ordinal-group: 3; order: 3; width: 222px; margin-right: 10px;">
						<a href="#" class="clearfix" title="Teelab">
							<img width="291" height="291" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_6.jpg?1702398129862" data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_6.jpg?1702398129862" alt="Teelab" data-was-processed="true">
						</a>
					</div>	
				</div>
			</div>
			
		</div>
	</div>
</section>
<style >
/* Add your custom styles here */
/* Add your custom styles here */
.section_feedback {
    display: flex;
    flex-direction: row; /* Set the direction to row to make it horizontal */
    justify-content: space-between; /* Evenly space items on both sides */
    overflow-x: auto; /* Add horizontal scrollbar if needed */
    text-align: center;
    margin-left: 80px;
}

.block-content {
    display: flex;
    flex-direction: row; /* Set the direction to row for the block content */
}

.feedback-swiper {
    width: 100%; /* Use 100% width to make it responsive */
}

.swiper-wrapper {
    display: flex; /* Set display to flex for the wrapper */
    transition: transform 0.5s ease; /* Add transition effect for smoother sliding */
}

.swiper-slide {
    flex: 0 0 auto; /* Set flex to 0 0 auto for fixed width items */
}
hr{
    width:90%;
    margin-left: 50px;
     text-align: center;
}

</style>