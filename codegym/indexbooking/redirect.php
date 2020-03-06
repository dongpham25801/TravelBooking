<?php
session_start();
include_once('../connectmysql.php');
if(isset($_SESSION['fmail']) && isset($_SESSION['fpass'])){
    header('location: ../home.php');
    //include_once('../homebooking/home.php');
}else{
    // include_once('../homebooking/home.php');
    include_once('indexbooking.php');
}
?>