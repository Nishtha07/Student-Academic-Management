

<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');


mysqli_select_db($con, 'studentu');
$fr = $_POST['rollno'];
$t1="EME";
$f1 = $_POST['1'];
$f2 = $_POST['2'];
$f3 = $_POST['3'];
$t2="E-COM";
$f4 = $_POST['4'];
if(!empty( $_POST['5']))
    $f5=$_POST['5'];

$f6 = $_POST['6'];
$t3="DAA";

$f7 = $_POST['7'];
$f8 = $_POST['8'];

$f31 = $_POST['9'];
$t4="OS";
$f32 = $_POST['10'];
$f33 = $_POST['11'];

$f41 = $_POST['12'];
$t5="SE";
$f42 = $_POST['13'];
$f43 = $_POST['14'];

$f51 = $_POST['15'];

$s = "select * from marks1 where `roll` = '$fr'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){

if($f4>0){
    $reg ="UPDATE  `marks1` SET `sub2`='$t2',`ct21`='$f4',`ct22`='$f5',`sem2`='$f6' WHERE `roll` = '$fr'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
    else if($f1>0){
    $reg ="UPDATE  `marks1` SET `sub1`='$t1',`ct11`='$f1',`ct12`='$f2',`sem1`='$f3'' WHERE `roll` = '$fr'"; 

mysqli_query($con, $reg);
header('location: teacher.php');
}
     else if($f7>0){
    $reg ="UPDATE  `marks1` SET `sub3`='$t3',`ct31`='$f7',`ct32`='$f8',`sem3`='$f31' WHERE `roll` = '$fr'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
    else if($f32>0){
    $reg ="UPDATE  `marks1` SET `sub4`='$t4',`ct41`='$f32',`ct42`='$f33',`sem4`='$f41' WHERE `roll` = '$fr'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
    else if($f42>0){
    $reg ="UPDATE  `marks1` SET `sub5`='$t5',`ct51`='$f42',`ct52`='$f43',`sem5`='$f51' WHERE `roll` = '$fr'"; 

mysqli_query($con, $reg);
header('location: teacher.php');}
    
}

else{
	$reg = "INSERT INTO `marks1`(`roll`, `sub1`, `ct11`, `ct12`, `sem1`, `sub2`, `ct21`, `ct22`, `sem2`,`sub3`,`ct31`,`ct32`,`sem3`,    `sub4`,`ct41`,`ct42`,`sem4`,`sub5`,`ct51`,`ct52`,`sem5`) VALUES ('$fr','$t1','$f1','$f2','$f3','$t2','$f4','$f5','$f6','$t3','$f7','$f8','$f31','$t4','$f32','$f33','$f41','$t5','$f42','$f43','$f51')";
	mysqli_query($con, $reg);
header('location: teacher.php');}
?>