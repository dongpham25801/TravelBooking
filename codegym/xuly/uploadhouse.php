 
<?php
        include('connectmysql.php');
        if(isset($_POST['fsend'])){
            /*
            echo "<pre>" . $_POST['fdescribe'];
            settype($_POST['fprice'], "int"); ĐỊNH KIỂU DỮ LIỆU CHO BIẾN
            echo "Price:  " . $_POST['fprice'] . "vnd <br>";
            echo gettype($_POST['fprice']); HIỂN THỊ KIỂU DỮ LIỆU CỦA BIẾN
            */
            $TenNha= $_POST['fname'];
            $LoaiNha= $_POST['fhouse'];
            $LoaiPhong= $_POST['froom'];
            $DiaChi= $_POST['faddress'];
            $SLphongNgu= $_POST['famountbed'];
            $SLphongTam= $_POST['famountbath'];
            $GiaTienTheoDem= $_POST['fprice'];
            $MoTaChung= $_POST['fdescribe'];
            $IDuser= $_SESSION['iduser'];

            $HinhAnh = $_FILES['fuptoimg']['name'];
            $tmp_HinhAnh = $_FILES['fuptoimg']['tmp_name'];
            if (isset($_FILES['fuptoimg'])){
            //Nếu file upload không bị lỗi,
            //Tức là thuộc tính error > 0
                if ($_FILES['fuptoimg']['error'] > 0){
                    echo 'File Upload Bị Lỗi';
                } else{
                // Upload file
                    move_uploaded_file($tmp_HinhAnh, './image/'.$HinhAnh);
                    echo 'File Uploaded';
                }
            }
            else{ echo 'Bạn chưa chọn file upload';
            }
            /*
            if(mysqli_query($conn,$sql)){
            echo "Records interested successfully.";
            }
            else echo "Error! " . mysqli_error($conn);
            */

            $sql= "INSERT INTO uptohouse(TenNha,LoaiNha,LoaiPhong,DiaChi,SLphongNgu,SLphongTam,GiaTienTheoDem,MoTaChung,HinhAnh, IDuser)
            VALUES ('$TenNha','$LoaiNha','$LoaiPhong','$DiaChi','$SLphongNgu','$SLphongTam','$GiaTienTheoDem','$MoTaChung','$HinhAnh','$IDuser')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Thêm thành công!');</script>";
                header('location: ./myroom.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } 
        
?>
