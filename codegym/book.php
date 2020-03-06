<?php 
    session_start();
    //var_dump($_SESSION);
    include_once('xuly/booknow.php');
    $id = $_GET['id'];
    echo $id . "<br>";
    // echo $_SESSION['iduser'];
    $sql = "SELECT * FROM uptohouse WHERE ID = $id";
    $exec = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Đặt phòng</title>
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
    <link rel="stylesheet" type="text/css" href="stylebookroom.css">
    <link rel="stylesheet" type="text/css" href="travelbooking.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <link type="text/css" rel="stylesheet" href="./css/bootstrap.css"> -->
</head>
<body>
    <!-- start header -->
    
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

    <!-- <div class="main"> -->
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="booking-cta"  style="text-align: center">
                            <h1>Travel Booking</h1>
                            <p>Đặt phòng trước với chúng tôi</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <div class="booking-form">
                            <form method="POST">
                            <?php
                                $sql2 = "SELECT * FROM user WHERE ID = '$_SESSION[iduser]'";
                                $exec2 = $conn->query($sql2);
                                while ($row2 = $exec2->fetch_assoc()){
                            ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="ftenkhach" placeholder="Họ tên" value="<?php echo $row2['username']; ?>" required />
                                            <!-- <span class="form-label">Họ tên</span> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" name="fsdtkhach" placeholder="SĐT" value="<?php echo $row2['yourphone']; ?>" required />
                                            <!-- <span class="form-label">SĐT</span> -->
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php 
                                    while ($row = $exec->fetch_assoc()){
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="ftenphong" placeholder="Tên phòng" value="<?php echo $row['TenNha']; ?>" required />
                                            <!-- <span class="form-label">Tên phòng</span> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="fdiadiem" placeholder="Địa điểm" value="<?php echo $row['DiaChi']; ?>" required />
                                            
                                        </div>
                                    </div>                                  
                                </div>
                                <?php } ?>
                                <div class="row">
                                    <!-- <div class="col-md-3 col-sm-6"> -->
                                    <div class="col">
                                        <div class="form-group">                                            
                                            <select class="form-control" name="fsophong">
                                                <option selected="" disabled class="form-label">Số phòng</option>
                                                <option value="1 phòng">1 phòng</option>
                                                <option value="2 phòng">2 phòng</option>
                                                <option value="3 phòng">3 phòng</option>
                                                <option value="4 phòng">4 phòng</option>
                                            </select>              
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3 col-sm-6"> -->
                                    <div class="col">
                                        <div class="form-group">
                                            <select class="form-control" name="fsokhach">
                                                <option selected="" disabled class="form-label">Số khách</option>                                                
                                                <option value="1 khách">1 khách</option>
                                                <option value="2 khách">2 khách</option>
                                                <option value="3 khách">3 khách</option>
                                                <option value="4 khách">4 khách</option>
                                            </select>                                       
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <select class="form-control" name="floaiPhong">
                                                <option selected="" disabled class="form-label">Loại phòng</option>                                                
                                                <option value="1 giường">1 giường</option>
                                                <option value="2 giường">2 giường</option>
                                                <option value="3 giường">3 giường</option>
                                                <option value="4 giường">4 giường</option>
                                            </select>                                       
                                        </div>
                                    </div>              
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="fcheckin" placeholder="Ngày tới" required>
                                            <!-- <span class="form-label">Ngày tới</span> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="fcheckout" placeholder="Rời đi" required>
                                            <!-- <span class="form-label">Rời đi</span> -->
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-btn">
                                    <button class="submit-btn" name="fbook"><a href="bookedhistory.php?id=<?php $_SESSION['iduser']; ?>">Book Now</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="js/jquery.min.js"></script> -->
    <script>
    </script>

    <footer class="page-footer font-small cyan bg-cl">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                <h3 style="text-align:center; font-weight: bolder">TRAVEL BOOKING</h3>
                <div class="mb-5 flex-center">
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
            </div>
        </div>
        
        <div class="footer-copyright text-center py-3">
            <a href="#"> http://travelbooking.com.vn</a>
        </div>
    </footer>


    <!-- Script -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>