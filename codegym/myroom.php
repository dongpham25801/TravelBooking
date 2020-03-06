<?php 
    session_start();
    // var_dump($_SESSION);
    // echo "<br>";
    // echo $_SESSION['iduser'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nhà của tôi</title>
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
    <link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">
    <!-- <link type="text/css" rel="stylesheet" href="./css/bootstrap.css"> -->
</head>
<body style="background: #f2f0ea">

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

    <!-- MY ROOM -->
    <?php 
        include_once('connectmysql.php');
        if(isset($_SESSION['fmail'])){
        
        // $sql = "SELECT youremail,TenNha,LoaiNha,MoTaChung,HinhAnh,GiaTienTheoDem FROM uptohouse INNER JOIN user ON uptohouse.IDuser = user.ID WHERE youremail = '$_SESSION[fmail]'";
        $sql = "SELECT * FROM uptohouse WHERE IDuser = '$_SESSION[iduser]' ORDER BY ID DESC";
        $query = $conn->query($sql);
        
    ?>
    
    <div class="my-room" style="background-color: #f2f0ea">
        <h2 style="margin-left: 50px; padding-top:30px; color: brown">My Room Posted</h2>
        
        <hr>
        <?php while ($row = $query->fetch_assoc()){ ?>
        <div class="rooms">
            <div class="room" style="margin-left: 50px; border-radius: 3px">
                <div class="row">                
                    <div class="col-lg-2">
                        <div class="room_image">
                        <a href="roomdetails.php?id=<?php echo $row['ID']; ?>">
                                <img src="image/<?php echo $row['HinhAnh']; ?>" />
                        </a>  
                        </div>
                    </div>                   
                    <div class="col-lg-7">
                        <div class="room_content">
                            <div class="room_title"><a href="roomdetails.php?id=<?php echo $row['ID']; ?>"><?php echo $row['TenNha']; ?></a></div>
                            <div class="room_extra"><?php echo $row['LoaiNha']; ?></div>
                            <div class="room_text"><?php echo $row['MoTaChung']; ?></div>
                            <div class="room_price"><?php echo $row['GiaTienTheoDem'] . "&nbsp per night"; ?></div>                            
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <hr>
        </div>
        <?php } 
                } ?>
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
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/single_listing_custom.js"></script> -->
    
</body>
</html>