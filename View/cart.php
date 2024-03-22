<style>
  /* General styles */
  .table-responsive {
    overflow-x: auto;
  }

  .btn {
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px;
  }

  /* Table styles */
  .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
    border-spacing: 0;
  }

  .table th,
  .table td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
  }

  .table th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
  }

  .table>tbody>tr>td,
  .table>tbody>tr>th,
  .table>tfoot>tr>td,
  .table>tfoot>tr>th,
  .table>thead>tr>td,
  .table>thead>tr>th {
    padding: 8px;
    vertical-align: top;
    border-top: 1px solid #ddd;
  }

  /* Success table row */
  .table-success {
    background-color: #dff0d8;
  }

  /* Form input */
  input[type="text"] {
    width: 50px;
  }

  /* General styles */
  body {
    background-color: #f8f9fa;
    color: #333;
    font-family: Arial, sans-serif;
  }

  .container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .btn {
    padding: 8px 16px;
    margin-right: 8px;
    font-size: 14px;
    font-weight: 600;
    line-height: 1.5;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: #007bff;
    color: #fff;
  }

  /* Table styles */
  .table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px;
    background-color: #fff;
  }

  .table th,
  .table td {
    padding: 12px;
    border: 1px solid #dee2e6;
  }

  .table th {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
    text-align: center;
  }

  .table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
  }

  /* Form input */
  input[type="text"] {
    width: 50px;
  }

  /* Alert */
  .alert {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
  }

  .alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
  }


</style>

<div class="table-responsive">
  <?php
    if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
    {
  ?>
    <form action="index.php?action=giohang&act=update_giohang" method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red;">GIỎ HÀNG </h2></td></tr>
          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Tùy Chọn Của Bạn</th>
            <th colspan="2">Giá</th>
          </tr>
        </thead>
        <tbody>

          <?php
            $j=0;
            foreach ($_SESSION['cart'] as $key => $item) {
              $j++;
          ?>
            <tr>
              <td><?php echo $j;?></td>
              <td><img width="50px" height="50px" src="Content\imagetourdien\<?php echo $item['hinh'];?>">
              <?php echo $item['tenhh'];?></td>
              <td>Màu: <?php echo $item['mau'];?>  Size: <?php echo $item['size'];?></td>
              <td>Đơn Giá: <?php echo number_format($item['dongia']);?>- Số Lượng: 
                <input type="text" name="newqty[<?php echo $key;?>]" value="<?php echo $item['soluong'];?>" /><br />
                <p style="float: right;"> Thành Tiền <?php echo number_format($item['thanhtien']);?> <sup><u>đ</u></sup></p>
              </td>
              <td><a href="index.php?action=giohang&act=delete_giohang&id=<?php echo $key;?>"><button type="button" class="btn btn-danger">Xóa</button></a>

                <button type="submit" class="btn btn-secondary">Sửa</button>

              </td>
            </tr>
          <?php
            }
          ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b>
                <?php
                  $gh=new giohang();
                  echo $gh->get_subTotal();
              ?> 
              <sup><u>đ</u></sup></b>
            </td>
            <td><a href="index.php?action=thanhtoan">Thanh toán</a></td>
          </tr>
        </tbody>
      </table>
    </form>
 <?php
    }
    else
    {
      echo '<script> alert("Giỏ hàng bạn chưa có hàng");</script>';
      echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
    }
?>
</div>
</div>