<style >
  /* Custom CSS for Login Page */
.login-sec {
  background-color: #f8f9fa;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.login-sec h3 {
  color: #333;
}

.login-form .form-group {
  margin-bottom: 20px;
}

.login-form label {
  font-weight: bold;
  color: #555;
}

.login-form input[type="text"],
.login-form input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login-form button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

.login-form button:hover {
  background-color: #0056b3;
}

.copy-text {
  margin-top: 20px;
  text-align: center;
  color: #555;
}

.copy-text a {
  color: #007bff;
  text-decoration: none;
}

.copy-text a:hover {
  text-decoration: underline;
}

  </style >
  <div class="container">
    <div class="row">
      <div class="col-md-10 login-sec">
        <h3 class="text-center"><b>Login Now</b></h3>
        <form  action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Tên Đăng Nhập:</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Mật Khẩu:</label>
            <input type="password" class="form-control" name="txtpassword" placeholder="">
          </div>


          <div class="form-check">
            <button class="btn btn-primary float-right" type="submit"> Đăng Nhập</button> 
            
          </div>
        </form>
        <div class="copy-text">TEELAB<i class="fa fa-heart"></i> <a href="index.php?action=forget">Quên mật khẩu</a></div>
      </div>
     
        </div>
      </div>
    </div>
