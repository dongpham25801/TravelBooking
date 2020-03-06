<?php 
    session_start();
    include('connectmysql.php');
    if(isset($_SESSION['fmail']) && isset($_SESSION['fpass'])){
        session_destroy();
    }
    header('location: home.php');

?>