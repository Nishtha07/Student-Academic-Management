<?php

session_start();
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'register1');

$ffname = $['branch'];
echo $ffname;
if($ffname == "it")
    header("location:test2.php");



?>