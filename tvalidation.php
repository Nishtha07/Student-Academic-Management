<?php

session_start();
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'tregister');

$f1 = $_POST['1'];
$f2 = $_POST['2'];
$fu = $_POST['user'];
$f3 = $_POST['3'];
$f4 = $_POST['4'];
$f5 = $_POST['5'];




$s = "select * from tusertable where `id` = '$fu' && `password` ='$f5' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['v'] = $fu ;
    header('location: teacher.php');
    
}
    
else{
    
	header('location: tlogin.php');
}

?>