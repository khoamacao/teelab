<style>
body {
    font-family: 'Arial', sans-serif;
    background-color:white; /* Updated background color */
    margin: 0;
    padding: 0;
}

.container {
    margin-top: 0px;
}

.well {
    border: 4px solid #337ab7; /* Add border around the form */
    border-radius: 8px; /* Optional: Add border radius for rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
    background-color: aqua;
    height: 400px;
    width: 650px;
    margin-left: 25%;
    margin-top: 15px;
    margin-bottom: 15px;
  
}

.well legend {
    font-size: 24px;
    margin-bottom: 20px;
}

.form {
    margin-top: 20px;
}

.form label {
    font-weight: bold;
}

.form-control {
    margin-bottom: 10px;
}

.btn-primary {
    background-color: #337ab7;
    border-color: #2e6da4;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active {
    background-color: #286090;
    border-color: #204d74;
}

/* Added new styles for the second button */
.btn-secondary {
    background-color: #5bc0de;
    border-color: #46b8da;
}

.btn-secondary:hover,
.btn-secondary:focus,
.btn-secondary:active {
    background-color: #31b0d5;
    border-color: #269abc;
}

</style>

<body>

    <div class="container">
        <div class="row">
            <div class="bodder">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="well well-sm">
                    <legend><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!</legend>
                    <form action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="txttenkh">Tên Khách Hàng:</label>
                                <input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="txtdiachi">Địa chỉ:</label>
                                <input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="txtsdt">Số Điện Thoại:</label>
                                <input class="form-control" name="txtsdt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="txtusername">Tên Đăng Nhập:</label>
                                <input class="form-control" name="txtusername" placeholder="Tên đăng nhập" required="" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="txtemail">Email:</label>
                                <input class="form-control" name="txtemail" placeholder="Email" type="email">
                            </div>
                            <div class="col-md-6">
                                <label for="txtpass">Mật khẩu:</label>
                                <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
                            </div>
                            <div class="col-md-6">
                                <label for="retypepassword">Nhập lại mật khẩu:</label>
                                <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
                            </div>
                        </div>

                        <!-- Button group in the same row -->
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Đăng ký</button>
                            </div>
                            <div class="col-md-6">
                                <!-- Replace this button with a hyperlink -->
                                <a href="http://127.0.0.1/teelab/index.php?action=dangnhap" class="btn btn-lg btn-primary btn-block">Đăng Nhập</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            </div>
           
        </div>
    </div>

</body>
