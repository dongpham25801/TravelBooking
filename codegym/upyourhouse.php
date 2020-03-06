<?php 
    session_start();
    //var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Đăng nhà cho thuê - TravelBooking</title>
    <link type="text/css" rel="stylesheet" href="travelbooking.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css"> <!-- meterial icon cdn -->
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- <link type="text/css" rel="stylesheet" href="./css/bootstrap.css"> -->
</head>
<body>
    <?php
    include_once('xuly/uploadhouse.php');
    ?>

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

        <div class="intro-2" style="height: 260px">
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

    <!-- <div class="form-up-room"> -->

        <div class="form-up-room" style="background-color: #f2f0ea">
            <div class="form-infor">
            <form action="" method="POST" enctype="multipart/form-data">
                <fieldset style="text-align: center">
                    <h2 style="color:brown; font-weight:bold">THÔNG TIN PHÒNG</h2>  
                    <label for=""></label>
                    <input required type="text" name="fname" placeholder="Tên Nhà"/><br><br>

                    <label for=""></label>
                    <input required type="text" name="faddress" placeholder="Địa chỉ"/><br><br>
                    
                    <label for=""></label>
                    <select name="fhouse" class="browser-default custom-select" style="width:280px; margin-bottom:5px">
                        <option value="" selected="" disabled>Loại Nhà</option>
                        <option value="Homestay">Homestay</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Hostel">Hostel</option>
                        <option value="Luxury">Luxury</option>
                        <option value="Classic">Classic</option>
                    </select><br><br>

                    <label for=""></label>
                    <select name="froom" class="browser-default custom-select" style="width:280px; margin-bottom:5px">
                        <option value="" selected="" disabled>Loại Phòng</option>
                        <option value="1 giường">1 giường</option>
                        <option value="2 giường">2 giường</option>
                        <option value="3 giường">3 giường</option>
                        <option value="4 giường">4 giường</option>
                    </select><br><br>
                    
                    <label for=""></label>
                    <select name="famountbed" class="browser-default custom-select" style="width:280px; margin-bottom:5px">
                        <option value="" selected="" disabled>SL phòng ngủ</option>
                        <option value="1">1 phòng ngủ</option>
                        <option value="2">2 phòng ngủ</option>
                        <option value="3">3 phòng ngủ</option>
                        <option value="4">4 phòng ngủ</option>
                    </select><br><br>

                    <label for=""></label>
                    <select name="famountbath" class="browser-default custom-select" style="width:280px; margin-bottom:5px">
                        <option value="" selected="" disabled>SL phòng tắm</option>
                        <option value="1">1 phòng tắm</option>
                        <option value="2">2 phòng tắm</option>
                        <option value="3">3 phòng tắm</option>
                        <option value="4">4 phòng tắm</option>
                    </select><br><br>
                    
                    <label for=""></label>
                    <textarea name="fdescribe" id="" cols="30" rows="5" placeholder="Mô tả chung" style="width:280px"></textarea><br><br>
                    
                    <label for=""></label>
                    <input required type="number" name="fprice" placeholder="Giá tiền theo đêm"/><br><br>

                    <label for=""></label>
                    <input type="file" name="fuptoimg" id="uptoimg" multiple="multiple" style="border:none; padding-left:0px; cursor:pointer"><br><br>

                    <a href=""><input type="submit" name="fsend" class="bt-info" value="Submit" style="width: 100px; padding-left:6px; border-radius: 9px;"/></a>
                    <img src="/image/stock-vector-hostel-accommodation-flat-vector-illustration.png" alt="">
                </fieldset>
            </form>
            </div> <!-- end form infor -->
            <div class="form-image">
                <img src="image/stock-vector-hostel-accommodation-flat-vector-illustration.png" alt="" class="form-image">
            </div>
        </div>

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
    <!-- <script src="/js/single_listing_custom.js"></script> -->
    <script src="js/custom.js"></script>

</body>
</html>