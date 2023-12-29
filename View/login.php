<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.login-block {
    background: #f4f4f4;
    padding: 30px 0;
    height: 200px;
    display: flex;
    align-items: center;
}

.login-sec {
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.1);
    background: #fff;
    border: 2px solid #337ab7;
    border-radius: 10px;
    background-color: aqua;
}

.login-form {
    width: 400px;
    margin: 0 auto;
    padding: 10px; /* Add padding to create space between content and border */
   
}

.login-form h3 {
    text-align: center;
    color: #333;
}


.text-uppercase {
    text-transform: uppercase;
}

.form-control {
    border-radius: 25px;
}



.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active {
    background-color: #286090;
    border-color: #204d74;
}
.bodder{
  border: 4px solid #337ab7; /* Add border around the form */
    border-radius: 8px; /* Optional: Add border radius for rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
    background-color: aqua;
    height: 250px;
    width: 450px;
    margin-left: 25%;
    margin-top: 15px;
    margin-bottom: 15px;
}
</style>

<div class="container">
    <div class="row">
        <div class=" col-md-12 ">
            <div class="bodder">
            <h3 class="text-center" style="padding-top: 30px;"><b>Login</b></h3>
            <form action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                    <input type="text" class="form-control" name="txtusername" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                    <input type="password" class="form-control" name="txtpassword" placeholder="">
                </div>        
                    <button class="btn btn-primary float-right" type="submit" name="submit" >Đăng Nhập</button>
                        
            </form>
            </div>
        </div>
    </div>
</div>
