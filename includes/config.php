<?php
session_start();

// $host="localhost";
// $user="fmcgblog_imfoodieuser"; //mysql user name
// $password="N@vo6D26TKRh";
// $database="fmcgblog_imfoodie";
// define('BASE_URL', 'https://imfoodie.in/zfoodie/');


$host="localhost";
$user="root"; //mysql user name
$password="";
$database="iamfoodie2";
define('BASE_URL', 'https://localhost/zfoodie/');


$con= mysqli_connect($host, $user, $password, $database);


if(!$con){
    echo "connect error occur: ".mysqli_connect_error();
}

// define('BASE_URL', 'http://localhost/i_am_foodie-admin/');
?>