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

$s = "select * from usertable1 where `roll no` = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num > 0){

	echo" Username Already Taken ";
}else{
    
    $s = "select * from usertable1 where `email` = '$femail'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num > 0){

	echo" Email ID Already Taken ";
}
else{
    if($fbranch=="IT"){
        if($name>='16601' && $name<='16656'){
    
        $_SESSION['r'] = $name ;
	$reg = "INSERT INTO `usertable1`(`name`, `branch`, `roll no`, `email`, `gender`, `password`) VALUES ('$ffname','$fbranch','$name','$femail','$mob','$pass')";
	mysqli_query($con, $reg);
    
   
    header("location:student.php");
    
    
 
    }
    else
    echo "Roll no is not valid for IT.....Signup Again.";
    }
    else if($fbranch=="CS"){
        if($name>='16201' && $name<='16256'){
    
        $_SESSION['r'] = $name ;
	$reg = "INSERT INTO `usertable1`(`name`, `branch`, `roll no`, `email`, `gender`, `password`) VALUES ('$ffname','$fbranch','$name','$femail','$mob','$pass')";
	mysqli_query($con, $reg);
    
   
    header("location:student.php");
    
    
 
    }
    else
    echo "Roll no is not valid for CS.....Signup Again.";
    }
}
}

?>