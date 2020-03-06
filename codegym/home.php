<?php 
    session_start();
    //var_dump($_SESSION);
    //echo "<script>alert('Welcom to Travel Booking !');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css"> <!-- meterial icon cdn -->
    <link rel="stylesheet" type="text/css" href="travelbooking.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- <link type="text/css" rel="stylesheet" href="./css/bootstrap.css"> -->
    <script>    alert('Welcom to Travel Booking !');    </script>
</head>
<body style="background-color: #f2f0ea">

    <!-- start header -->
    <header style="height:360px">
        <div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">0904648829 | 0582552858</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
                            <?php if(isset($_SESSION['fmail'])){ ?>
							<div class="user_box_login user_box_link"><a href="profilepage.php"><i class="fa fa-user-circle" aria-hidden="true"></i></a></div>
							<?php } ?>

                            <?php if(!isset($_SESSION['fmail'])){ ?>
							<div class="user_box_register user_box_link"><a href="indexbooking/indexbooking.php">Log in &nbsp;</a></div>
							<?php } ?>

							<?php if(isset($_SESSION['fmail'])){ ?>
							<div class="user_box_register user_box_link"><a href="logout.php"> Log out</a></div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>		
		</div>
        <nav class="navbar navbar-expand-lg darkgray-bg"  style="font-weight: bold">
            <a class="navbar-brand" href="home.php"><span style="font-size: 26px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">TravelBooking</span></a>

            <!-- Collapse button -->
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                class="fas fa-bars fa-1x"></i></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
				</li> -->
				<li class="nav-item">
                <a class="nav-link" href="theroom.php">Nhà cho thuê</a>
                </li>
				<?php if(isset($_SESSION['fmail'])){ ?>
				
                <li class="nav-item">
                <a class="nav-link" href="upyourhouse.php">Đăng nhà cho thuê</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="myroom.php">Nhà của tôi</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="book.php">Đặt phòng</a>
				</li>    -->
                <li class="nav-item">
                <a class="nav-link" href="bookedhistory.php">Lịch sử đặt phòng</a>
				</li>
				<?php }
				?>
            </ul>
            <!-- Links -->

            </div>
        </nav>

        <div class="view intro-2" style="height: 360px">
            <div class="full-bg-img">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="white-text text-center wow fadeInUp">
                            <!-- <h2>This Navbar isn't fixed</h2>
                            <h5>When you scroll down it will disappear</h5>
                            <br>
                            <p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header> <!-- end header -->

    <!-- check-room by the time -->
    <div class="navbar navbar-expand-lg navbar-light bgcl-checkroom">
        <article style="margin:auto">
            <h2 style="text-align: center"> CHECK ROOM </h2>
            <form action="" method="POST">
                <fieldset>
                    <label for="">From</label>
                    <input type="date" id="from" name="from" placeholder="dd/mm/yyyy">
                    <label for="">To</label>
                    <input type="date" id="to" name="to" placeholder="dd/mm/yyyy">
                    <select>
                        <option selected="" disabled="">SL Phòng Ngủ</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <select>
                        <option selected="" disabled="">SL Phòng Tắm</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <select>
                        <option selected="" disabled="">Địa điểm</option>
                        <option value="">Ha Noi</option>
                        <option value="">Sai Gon</option>
                        <option value="">Da Nang</option>
                        <option value="">Da Lat</option>
                        <option value="">Nha Trang</option>
                        <option value="">Hoi An</option>
                        <option value="">Phu Quoc</option>
                        <option value="">Ha Giang</option>
                    </select>
                    <select>
                        <option selected="" disabled="">Chọn mức giá</option>
                        <option value="">500.000 - 1.000.000</option>
                        <option value="">1.000.000 - 1.500.000</option>
                        <option value="">1.500.000 - 2.000.000</option>
                        <option value="">Trên 2.000.000</option>
                    </select>
                    <button type="submit" class="bt-info">Check</button>
                </fieldset>
            </form>
        </article>
	</div>

    <!-- <div class="main"> -->
        <div class="my-room" style="background-color: #f2f0ea">
        <div class="my-room" style="background-color: #f2f0ea">

            <p style="text-align: center; padding-top:30px; color: black"><strong> Có một kỳ nghỉ tuyệt vời? Hãy để TravelBooking là một phần của điều đó.<br>
                        Một trong những hệ thống đặt phòng tốt nhất tại VN, chúng tôi cam kết cung cấp trải nghiệm tốt nhất dành cho bạn  -  
            <a href="home.php" target="_blank" style="text-decoration:none">Travel Booking</a>
            </strong></p>

            <hr class="my-4">

            
        </div>
	</div>
	
	
    <div class="my-room">
    <div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title" style="margin-top:50px">Mới Nhất</h2>
				</div>
			</div>
			<div class="row trending_container">
				<!-- Trending Item -->
				<?php
					include_once('connectmysql.php');
					$sql = "SELECT ID,TenNha,GiaTienTheoDem,DiaChi,HinhAnh FROM uptohouse ORDER BY ID DESC LIMIT 8";
					$query = mysqli_query($conn,$sql);
					while ($row = mysqli_fetch_assoc($query)){
				?>
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<img class="trending_image" src="image/<?php echo $row['HinhAnh']; ?>" />
						<div class="trending_content">
							<div class="trending_title"><a href="roomdetails.php?id=<?php echo $row['ID']; ?>"><?php echo $row['TenNha']; ?></a></div>
							<div class="trending_price"><?php echo $row['GiaTienTheoDem']; ?></div>
							<div class="trending_location"><?php echo $row['DiaChi']; ?></div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			
		</div>
    </div>
        

    <div class="my-room" style="background-color: #F0ECC7">
    <div class="container">   
        <div class="row">
				<div class="col text-center">
					<h2 class="section_title" style="margin-top:30px">Nổi Bật</h2>
				</div>
		</div>
		<div class="row offers_items">

			<!-- Offers Item -->
            <?php 
                include_once('connectmysql.php');
                $sql = "SELECT ID,HinhAnh,TenNha,GiaTienTheoDem,MoTaChung FROM uptohouse WHERE NoiBat = 1 ORDER BY RAND () LIMIT 4";
                $exec = $conn->query($sql);
                //if($exec->num_rows > 0){
                    while($row = $exec->fetch_assoc()){
            ?>
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
                                    <img class="offers_image_background" src="image/<?php echo $row['HinhAnh']; ?>"/>
                                    <!-- <div class="offer_name"><a href="#"> <?php //echo $row['TenNha']; ?></a></div> -->
								</div>
							</div>
							<div class="col-lg-6">
                                
								<div class="offers_content">
                                    <div class="offer_name"><a href="roomdetails.php?id=<?php echo $row['ID']; ?>"><?php echo $row['TenNha']; ?></a></div>                                
									<div class="offers_price"><?php echo $row['GiaTienTheoDem']; ?><span>/1 đêm</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text"><?php echo $row['MoTaChung']; ?></p>
									<div class="offers_icons">
										<!-- <ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul> -->
									</div>
									<div class="offers_link"><a href="roomdetails.php?id=<?php echo $row['ID']; ?>">read more</a></div>
								</div>
							</div>
						</div>
				    </div>
                </div>
            <?php         
                }
            //} ?>
		</div>
    </div>
    </div>

    <!--Google map-->
    <!-- <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
      <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
        style="border:0" allowfullscreen></iframe>
      </div> -->

    <!-- Footer -->
    <footer class="page-footer font-small cyan bg-cl">

        <!-- Footer Elements -->
        <div class="container">

        <!-- Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 py-5">
            <h3 style="text-align:center; font-weight: bolder">TRAVEL BOOKING</h3>
            <div class="mb-5 flex-center">

                <!-- Facebook -->
                <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!-- Google +-->
                <a class="gplus-ic">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Linkedin -->
                <a class="li-ic">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Instagram-->
                <a class="ins-ic">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Pinterest-->
                <a class="pin-ic">
                <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                </a>
            </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <a href="#"> http://travelbooking.com.vn</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <!-- Script -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
    <!-- <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/jquery-3.4.1.js"></script> -->
</body>
</html>