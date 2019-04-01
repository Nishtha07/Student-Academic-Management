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

$s = "select * from tusertable where `id` = '$fu'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num > 1){
    

	echo " ID Already... Signup with different ID";
    
}else{
    
    $s = "select * from tusertable where `email` = '$f3'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
    
    if($num > 1){
    

	echo " Email Already... Signup with different Email";
    
}else{
    
    
    
    
    $_SESSION['v'] = $fu ;
	$reg = "INSERT INTO `tusertable`(`name`, `branch`, `id`, `email`, `gender`, `password`) VALUES ('$f1','$f2','$fu','$f3','$f4','$f5')";
	mysqli_query($con, $reg);

	echo $f4;
}

}}
?>