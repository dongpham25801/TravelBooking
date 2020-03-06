
<?php
	include "../connectmysql.php";
	//include './signup.js';
	if(isset($_POST['fregister'])){
		$mail= $_POST['fmail'];
		$pass= $_POST['fpass'];
		$name= $_POST['fusername'];
		$phone= $_POST['fphone'];
		
		$sql = "SELECT * FROM user WHERE youremail = '$mail'";
		$query = mysqli_query($conn,$sql);
		$num_row = mysqli_num_rows($query);
		if( $num_row > 0){
			echo "<script>alert('Email đã được sử dụng !');</script>";
			//die('Email đã được sử dụng !');
		}else{
			$sql = "INSERT INTO user (youremail,password,username,yourphone) VALUES ('{$mail}','{$pass}','{$name}','{$phone}')";
			$query = mysqli_query($conn,$sql);
			//echo "<script>alert('Đăng ký thành công — Mời bạn đăng nhập!');</script>";
			header('location: indexbooking.php');
		}
		//check useracount
		// $acc->Select("SELECT youremail from register");
		// echo "$ptd";
		// function checkdata()
		// {
		// 	if($acc == $mail){
		// 		die('Email của bạn đã được đăng ký !');
		// 	}
		// 	elseif ($mail == null || $pass == null || $username == null || $phone == null) {
		// 		die('Vui lòng điền thông tin !');
		// 	}
		// 	else{
		// 		$acc->Run("INSERT INTO register (youremail,password,username,phone) VALUES ('{$mail}','{$pass}','{$name}','{$phone}')");
		// 		alert('Đăng ký thành công!');
		// 	}

		

		//how to sign up now and header homepage?
	} 
?>
