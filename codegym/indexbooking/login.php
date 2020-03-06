<?php

include_once('../connectmysql.php');
if(isset($_POST['flogin'])){
    $fmail = $_POST['fmail'];
    $fpass = $_POST['fpass'];

    $sql = "SELECT * FROM user WHERE youremail = '$fmail' and password = '$fpass'";
    $query = mysqli_query($conn,$sql);
    $arr = $query->fetch_assoc(); // đổ dữ liệu ra 1 bảng
    // echo $arr['ID'];
    // die();
    $num_rows = mysqli_num_rows($query);
    if($num_rows > 0){
        $_SESSION['fmail'] = $fmail;
        $_SESSION['fpass'] = $fpass;
        $_SESSION['iduser'] = $arr['ID'];
        header('location: redirect.php');
        echo "<script>alert('Đăng nhập thành công');</script>";
    }else{
        echo "<script>alert('Tài khoản hoặc mật khẩu không đúng!')</script>";
    }
}

?>