<?php 
    session_start();
    include_once('connectmysql.php');
    //var_dump($_SESSION);
    //echo $_SESSION['iduser'];
    $id = $_GET['id'];
    echo $id;
    $sql = "SELECT * FROM `uptohouse` WHERE ID = '$id'";
    //$sql = "SELECT * FROM uptohouse INNER JOIN user ON uptohouse.IDuser = user.ID WHERE youremail = '$_SESSION[fmail]'";
    $query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết phòng</title>
    <link rel="stylesheet" href="roomdetails.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- <link rel="stylesheet" type="text/css" href="travelbooking.css"> -->
    
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

<div class="super_container">
    
    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <!-- <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg" alt=""></li>
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg" alt=""></li>
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg" alt=""></li> -->
                    </ul>
                </div>
                <?php while ($row = mysqli_fetch_assoc($query)) {
                    
                    ?>
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="image_selected"><img src="image/<?php echo $row ['HinhAnh'];?>" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
               
                    <div class="product_description">
                        <!-- <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Nhà cho thuê</a></li>
                                <li class="breadcrumb-item active">Accessories</li>
                            </ol>
                        </nav> -->
                        <div class="product_name"><h2><?php  echo $row['TenNha']; ?></h2></div>
                        <div>
                            <span class="product_price"><?php  echo $row['DiaChi']; ?></span>&nbsp;&nbsp;&nbsp;
                            <span style="font-size: 20px"><?php  echo $row['GiaTienTheoDem']; ?>
                        </div>
                        <hr class="singleline">
                        <div> <span class="product_info">Loại nhà: &nbsp;<?php  echo $row['LoaiNha']; ?></span></div>
                        <br>
                        <div> <span class="product_info">Loại phòng: &nbsp;<?php  echo $row['LoaiPhong']; ?></span></div>
                        <br>
                        <div> <span class="product_info">SL phòng ngủ: &nbsp;<?php  echo $row['SLphongNgu']; ?></span></div>
                        <br>
                        <div> <span class="product_info">SL phòng tắm: &nbsp;<?php  echo $row['SLphongTam']; ?></span></div>
                        <br>
                        <div> <span class="product_info">Mô tả chung: <br><?php  echo $row['MoTaChung']; ?></span></div>
                        <br><br>
                        <div class="col-xs-6">
                            <?php if(isset($_SESSION['fmail'])){ ?> 
                            <button type="button" class="btn btn_primary shop-button">
                                <a href="book.php" target="blank">Book Now</a>
                            </button>
                                <!-- <button type="button" class="btn btn-success shop-button">Buy Now</button> -->
                                <!-- <div class="product_fav"><i class="fas fa-heart"></i></div> -->
                            <?php } ?>
                            </div>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer class="page-footer font-small mdb-color bg-cl pt-4">

        <!-- Footer Elements -->
        <div class="container"> 
            <div class="row">
            <?php
                    $sql = "SELECT * FROM `uptohouse` ORDER BY RAND() LIMIT 6";
                    $exec = $conn->query($sql);
                    while($row = $exec->fetch_assoc()){
                        
            ?> 
                <div class="col-lg-2 col-md-12 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="image/<?php echo $row ['HinhAnh'];?>" class="img-st">
                    <a href="">
                    <div class="mask rgba-white-light"></div>
                    </a>
                </div>

                </div>
            <?php } ?>
            </div>
        

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
        <a style="color: whitesmoke" href=""> http://travelbooking.com</a>
        </div>
        <!-- Copyright -->

    </footer>
        <!-- Footer -->

</body>
</html>