<?php

session_start();
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'register');

$ffname = $_POST['fname'];
$fbranch = $_POST['branch'];
$name = $_POST['user'];
$femail = $_POST['email'];
$mob = $_POST['mobile'];
$pass = $_POST['password'];



$s = "select * from usertable1 where `roll no` = '$name' && password ='$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['r'] = $name ;
    header('location: student.php');
    exit();
    
}
    
else{
    
	header('location: login.php');
}

?>