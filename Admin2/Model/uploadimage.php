<?php
function uploadImage()
{
    // b1: lấy hình về để vào đâu, tạo đường dẫn chứa hình
    $target_dir = "../../DuAnMau/Content/imagetourdien/";
    // b2: lấy tên hình về gắn vào đường dẫn hình
//$target_file="../../DuAnMau/Content/imagetourdien/hinhbaby.jpg";
    $target_file = $target_dir . basename($_FILES['image']['name']);
    // b3: kiêm tra hình có được đẩy lên server không
    $upload = 1;
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES['image']['tmp_name']);
        // $check=$_FILES['image']['size']
        if ($check !== false) {
            $upload = 1;
        } else {
            $upload = 0;
        }
    }
    // kiểm tra xem hình có tồn tại trong đường dẫn chưa
    if (file_exists($target_file)) {
        $upload = 0;
        echo '<script> alert("Hình đã tồn tại");</script>';
    }
    // kiểm tra xem hình có vượt quá dung lượng hay không 500kb=500000b
    if ($_FILES['image']['size'] > 500000) {
        $upload = 0;
        echo '<script> alert("Hình vượt quá dung lượng");</script>';
    }
    // kiểm tra có phải là hình hay không
// lấy phần mở rộng
    $imagefileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($imagefileType != "jpg" && $imagefileType != "jpeg" && $imagefileType != "png" && $imagefileType != "gif") {
        $upload = 0;
        echo '<script> alert("Không là hình");</script>';
    }
    // b4: khi nào upload, khi ko còn lỗi tức là upload=1
    if ($upload == 1) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            echo '<script> alert("Uplaod hình thành công");</script>';
        } else {
            echo '<script> alert("Uplaod hình ko thành công");</script>';
        }
    }
}

?>