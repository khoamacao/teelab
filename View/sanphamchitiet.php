

<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>

<style >
    /* CSS cho phần chi tiết sản phẩm */
.product-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.product-description {
    font-size: 16px;
    margin-bottom: 20px;
}

.price {
    font-size: 20px;
    color: #ff0000; /* Màu đỏ cho giá bán */
}

.colors {
    margin-bottom: 10px;
}

/* CSS cho phần chọn kích thước */
.btn-circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 5px;
    margin-bottom: 5px;
    background-color: #ffffff; /* Màu nền */
    color: #000000; /* Màu chữ */
}

/* CSS cho phần bình luận */
.float-left {
    float: left;
    font-weight: bold;
}

textarea.input-field {
    width: 100%;
    height: 100px;
    margin-bottom: 10px;
}

#submitButton {
    background-color: #007bff; /* Màu nút Bình luận */
    color: #ffffff; /* Màu chữ */
}

/* CSS cho phần các bình luận */
.comment {
    margin-bottom: 20px;
}

/* CSS cho phần tiêu đề các bình luận */
.row hr {
    border: 0;
    clear: both;
    display: block;
    width: 96%;
    background-color: #ccc; /* Màu đường kẻ */
    height: 1px;
    margin-top: 20px;
}

/* CSS cho ảnh trong phần bình luận */
.comment-img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
    border-radius: 50%;
}

</style><script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").string = a;

    }
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=giohang_action" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">
                           <?php 
                            //Điều phối sản phẩm và truyền id qua
                            if(isset($_GET['id'])) {
                                $id=$_GET['id'];//19
                                //View đòi hỏi là cần thông tin của id = 19
                                // ai làm?model làm
                                $hh = new hanghoa();
                                $sp = $hh->getHangHoaId($id);//$sp=array(mahh:19, tenhh: giày)
                                $tenhh = $sp['tenhh'];
                                $mota = $sp['mota'];
                                $dongia = $sp['dongia'];
                            }
                           ?>
                            <?php 
                                $hinh = $hh->getHangHoaHinh($id);
                                $set = $hinh->fetch();
                            ?>
                            <div class="tab-pane active" id=""><img src="Content\imagetourdien\<?php echo $set['hinh'];?>" alt="" width="200px" height="350px">

                            </div>
                           
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php 
                                while($img = $hinh->fetch()):
                            ?>
                            <li class="active">
                                <a href="#<?php echo $img['hinh'];?>" data-toggle="tab">
                                    <img src="<?php echo 'Content/imagetourdien/'.$img['hinh'];?>" alt="Học thiết kế web bán hàng online">
                                </a>
                            </li>
                            <?php 
                                endwhile;
                            ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $id;?>" />
                        <h3 class="product-title"><?php echo $tenhh;?></h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota; ?>
                        </p>
                        <h4 class="price">Giá bán: <?php echo number_format($dongia);?> đ</h4>
                        
                        <h5 class="colors">Màu:
                            <select name="mymausac" class="form-control" style="width:150px;">
                               <?php 
                                $mau = $hh->getHangHoaMau($id);
                                while($set = $mau->fetch()):
                               ?>
                                    <option value="<?php echo $set['idmau'];?>">
                                        <?php 
                                            echo $set['mausac'];
                                        ?>
                                    </option>
                               <?php 
                                endwhile;
                               ?>
                            </select><br>
                           
                            <input type="hidden" name="size" id="size" value="0" />
                            Kích Thước:
                                <?php 
                                    $size = $hh->getHangHoaSize($id);
                                    while($set = $size->fetch()):
                                ?>
                                <button type="button" onclick="chonsize(<?php echo $set['size'];?>)"  name="" class="btn btn-default-hong btn-circle" id="hong" value="<?php echo $set['idsize']; ?>">
                                    <?php echo $set['size']; ?>
                                </button>
                                <?php 
                                    endwhile;
                                ?>
                            </br></br>
                            Số Lượng:

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />


                        </h5>
                        
                        <div class="action">

                            <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY
                            </button>

                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>

                <p class="float-left"><b>BÌnh luận </b></p>
                <hr>
            </div>
            <form action="" method="post">
            <div class="row">
              
                    <input type="hidden" name="txtmahh" value="" />
                    <img src="Content/imagetourdien/people.png" width="50px" height="50px"; />
                    <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                    <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
                                
            </div>
            
            </form>
            <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <hr>
            </div>
            <div class="row">
               <br/>
            </div>

        </div>
    </section>
