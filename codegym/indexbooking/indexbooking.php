<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="indexbooking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery-3.4.1.js"></script>
</head>

<body>

    <?php
    include('register.php');
    include('login.php');
    ?>
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
        <div class="signup-content">
                <?php
                if (isset($_GET['page_layout'])) {
                    switch ($_GET['page_layout']) {
                        case 'register_us':
                            include_once('register_us.php');
                            break;
                        case 'login_us':
                            include_once('login_us.php');
                            break;
                        default:
                            include_once('sub_admin.php');
                            break;
                    }
                }else{
                    include_once('sub_admin.php');
                }
                ?>

                <div class="signup-image">
                    <figure><img src="img/stock-vector-hostel-accommodation-flat-vector-illustration.png"></figure>
                </div>
            </div>
        </div>
    </section>

    <!-- <script type="text/javascript" href="../bootstrap-4.4.1-dist/js/bootstrap.js"></script> -->
</body>

</html>