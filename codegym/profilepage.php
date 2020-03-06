<?php
    session_start();
    include('connectmysql.php');
    
    $sql = "SELECT * FROM user WHERE youremail = $_SESSION[fmail]";
    $exec = $conn->query($sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết phòng</title>
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
    <link rel="stylesheet" type="text/css" href="travelbooking.css">
    
</head>
<body>

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
                <li class="nav-item">
                <a class="nav-link" href="book.php">Đặt phòng</a>
				</li>   
                <li class="nav-item">
                <a class="nav-link" href="bookedhistory.php">Lịch sử đặt phòng</a>
				</li>
				<?php }
				?>
            </ul>
            <!-- Links -->

            </div>
        </nav>

    <div class="my-room" style="background-color: #f2f0ea">
        <div class="container" style="padding-top: 60px;">
            <h2 style="padding-left: 40px">YOUR PROFILE</h2>
            <hr>
            <?php //while($row = $exec->fetch_assoc()){ ?>
            <div class="row">
                <!-- left column -->
                <div class="col-md-4 col-sm-6 col-xs-12" style="padding-top:25px">
                <div class="text-center">
                    <img src="" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a photo...</h6>
                    <input type="file" class="text-center center-block well well-sm">
                </div>
                </div>
                <!-- edit form column -->
                <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                    <!-- <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> 
                        <i class="fa fa-coffee"></i>
                        This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div> -->
                    <h3 class="page-header" style="padding:15px">Personal info</h3>
                    <form class="form-horizontal" role="form">
                        
                        <div class="form-group">
                        <label class="col-md-3 control-label">Username</label>
                        <div class="col-md-8">
                            <input class="form-control" value="" type="text" placeholder="<?php //echo $row['username']; ?>" />
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-8">
                            <input class="form-control" value="" type="text" placeholder="<?php //echo $row['youremail']; ?>" />
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-lg-3 control-label">Phone</label>
                        <div class="col-lg-8">
                            <input class="form-control" value="" type="text" placeholder="<?php //echo $row['yourphone']; ?>" />
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input class="btn btn-primary" value="Save Changes" type="button">
                            <span></span>
                            <input class="btn btn-default" value="Cancel" type="reset">
                        </div>
                        </div>
                    </form>
                </div>
            </div> 
            <?php //} ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>