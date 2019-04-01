<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');


mysqli_select_db($con, 'studenta');
$f1 = $_POST['roll'];

$f2 = $_POST['sc'];
$f3 = $_POST['sa'];
$f4 = "EME";

$f22 = $_POST['sc2'];
$f32 = $_POST['sa2'];
$f42 = "E-COM";

$f23 = $_POST['sc3'];
$f33 = $_POST['sa3'];
$f43 = "DAA";

$f24 = $_POST['sc4'];
$f34 = $_POST['sa4'];
$f44 = "OS";

$f25 = $_POST['sc5'];
$f35 = $_POST['sa5'];
$f45 = "SE";




$s = "select * from attendance where `roll no` = '$f1'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
if($f22>0){
    $reg ="UPDATE  `attendance` SET `sub2`='$f42',`s2`='$f22',`a2`='$f32' WHERE `roll no` = '$f1'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
    else if($f2>0){
    $reg ="UPDATE  `attendance` SET `sub`='$f4',`s classes`='$f2',`a classes`='$f3' WHERE `roll no` = '$f1'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
     else if($f23>0){
    $reg ="UPDATE  `attendance` SET `sub3`='$f43',`s3`='$f23',`a3`='$f33' WHERE `roll no` = '$f1'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
    else if($f24>0){
    $reg ="UPDATE  `attendance` SET `sub4`='$f44',`s4`='$f24',`a4`='$f34' WHERE `roll no` = '$f1'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
    else if($f25>0){
    $reg ="UPDATE  `attendance` SET `sub5`='$f45',`s5`='$f25',`a5`='$f35' WHERE `roll no` = '$f1'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
    
}
else{
    
    $reg ="INSERT INTO `attendance` (`roll no`, `s classes`, `a classes`, `sub`, `sub2`, `s2`, `a2`, `sub3`, `s3`, `a3`, `sub4`, `s4`, `a4`, `sub5`, `s5`, `a5`) VALUES ('$f1', '$f2', '$f3', '$f4', '$f42', '$f22', '$f32', '$f43', '$f23', '$f33', '$f44', '$f24', '$f34', '$f45', '$f25', '$f35')";

mysqli_query($con, $reg);
header('location: teacher.php');
    
    
}




?>