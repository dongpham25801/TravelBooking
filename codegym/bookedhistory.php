<?php 
    session_start();
    include_once('connectmysql.php');
    $id = $_GET['id'];
    echo $id;
    // echo $_SESSION['iduser'];
    $sql = "SELECT * FROM bookroom";
    $exec = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Lịch sử thuê - TravelBooking</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css"> <!-- meterial icon cdn -->
    <link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" href="styles/main_styles.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <link rel="stylesheet" href="css/booked.css">
    <link rel="stylesheet" href="travelbooking.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    
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

        <div class="my-room" style="color: black">
            <div class="panel-title">
                <h3>Lịch sử đặt nhà </h3>
            </div>
            <?php 
                // while($row = $exec->fetch_assoc()){
                while($row = mysqli_fetch_assoc($exec)){
            ?>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-1"><img src="" class="media-object img-thumbnail" alt="#avatar"></div>
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right"><label class="label label-danger"><?php echo $row['trangthai']; ?></label> </div>
                                <span><strong>Tên nhà: &nbsp;<?php echo $row['tenphong']; ?></strong></span><br>
        
                            </div>
                            <div class="col-md-12">
                                From: <?php echo $row['ngaytoi']; ?> To: <?php echo $row['roidi']; ?> &nbsp; by <strong><?php echo $row['tenkhach']; ?></strong>
                            </div>
                            <div class="col-md-12">
                                Price: &nbsp; &nbsp; 
                                <button name="" id="" class="btn">Hủy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

          

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
</body>
</html>