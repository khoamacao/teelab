<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        section {
            padding: 20px;
        }

        .mb-5 {
            margin-bottom: 5px;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        .container-fliud {
            max-width: 100%;
            margin: auto;
        }

        .wrapper {
            display: flex;
            justify-content: space-around;
        }

        .preview img {
            max-width: 100%;
            height: auto;
        }

        .details {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .price {
            color: #e44d26;
            font-size: 1.5em;
            margin-top: 10px;
        }

        .colors {
            margin-top: 10px;
        }

        .btn-circle {
            border-radius: 50%;
            margin: 5px;
            padding: 10px;
        }

        .float-left {
            float: left;
        }

        hr {
            border: 1px solid #ccc;
            margin-top: 10px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        #submitButton {
            margin-top: 10px;
            float: right;
        }

        .like,
        .add-to-cart {
            margin-top: 10px;
        }

        /* Additional CSS for comment section */
        .comment-section {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .comment-img {
            width: 50px;
            height: 50px;
        }

        .comment-box {
            margin-top: 10px;
        }

        .comment-btn {
            float: right;
        }

        .comment-list {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<section>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="#" method="post">
                        <div class="preview col-md-6">
                        <div class="tab-content">

                            <?php
                            //truyền id để lấy thông tin của san phẩm
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $hh = new hanghoa();
                                $sanpham = $hh->getHanghoaChiTiet($id);
                                $tensp = $sanpham['tenhh'];
                                $mota = $sanpham['mota'];
                                $dongia = $sanpham['dongia'];
                                $hinh = $sanpham['hinh'];
                            }else{
                                echo "Please enter";
                            }
                            ?>
                            <div class="tab-pane active" id=""><img src="Content\imagetourdien\<?php echo $hinh ?>" alt="" width="445px" height="480px">
                            </div>

                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">

                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="" />
                        <h3 class="product-title"><?php echo $tensp; ?> </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota; ?>
                        </p>
                        <h4 class="price">Giá bán: <?php echo number_format($dongia); ?>đ</h4>

                        <h5 class="colors">Màu:
                            <select name="mymausac" class="form-control" style="width:150px;">
                                <?php
                                $mau = $hh->getHangaoMau($id);
                                while ($set = $mau->fetch()) {
                                ?>
                                    <option value="<?php echo $set['idmau'] ?>"><?php echo $set['mausac']; ?></option>
                                <?php } ?>
                            </select><br>

                            <input type="hidden" name="size" id="size" value="0" />
                            Kích Thước:
                            <?php
                            $size = $hh->getHangaoSize($id);
                            while ($set = $size->fetch()) {

                            ?>
                                <button type="button" name="" class="btn btn-default-hong btn-circle" id="hong" value="<?php echo $set['idsize']; ?>">
                                    <?php echo $set['tensize']; ?>
                                </button>
                            <?php } ?>
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

</section>

</div>
<form action="" method="post">
    <div class="row">

        <input type="hidden" name="txtmahh" value="" />
        <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
        <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

    </div>

</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
</div>
<div class="row">
    <br />
</div>

</div>
</section>