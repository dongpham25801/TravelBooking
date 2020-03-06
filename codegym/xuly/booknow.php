<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    // $date1 = '2020-03-01';    
    // $date = new DateTime($date1);
    // $now = new DateTime();
    // echo $date->diff($now)->format("%d days, %h hours and %i minuts");
    
    include_once('connectmysql.php');
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully";
    if(isset($_POST['fbook'])){
        $tenkhach = $_POST['ftenkhach'];
        $tenphong = $_POST['ftenphong'];
        $sdtkhach = $_POST['fsdtkhach'];
        $diadiem = $_POST['fdiadiem'];
        $sokhach = $_POST['fsokhach'];
        $sophong = $_POST['fsophong'];
        $loaiphong = $_POST['floaiPhong'];
        $checkin = $_POST['fcheckin'];
        $checkout = $_POST['fcheckout'];
        $trangthai = "Đã thuê";
        // $iduser = $_SESSION['iduser'];

        $sql = "SELECT * FROM bookroom WHERE ngaytoi = '$checkin' AND roidi = '$checkout'";
        $exec = $conn->query($sql);

        if($exec->num_rows > 0){
            echo "<script>alert('Thời gian không phù hợp!');</script>";
        }else{
            $ptd = "INSERT INTO bookroom (tenkhach,tenphong,diadiem,sdt,sophong,sokhach,loaiphong,ngaytoi,roidi,trangthai)
                    VALUES ('{$tenkhach}','{$tenphong}','{$diadiem}','{$sdtkhach}','{$sophong}','{$sokhach}','{$loaiphong}','{$checkin}','{$checkout}','{$trangthai}')";
            $ptu = $conn->query($ptd);
            // if ($conn->query($ptd) === TRUE) {
            //     echo "New record created successfully";
            // } else {
            //     echo "Lỗi: " . $ptd . "<br>" . $conn->error;
            // }
            echo "<script>alert('Đặt phòng thành công!');</script>";
            header('location: bookedhistory.php');   
        }
    }

?>