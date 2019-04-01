<?php

session_start();

$con=mysqli_connect('localhost','root','','register');
function showdata(){
    global $con,$t1,$t2,$t3,$t4;
    $t= $_SESSION['r'];
    
    $query=     $s = "select * from usertable1 where `roll no` = '$t'";
    $run=mysqli_query($con,$query);
    if($run==true){
         $data=mysqli_fetch_assoc($run);
        $t1=$data['name'];
        $t2=$data['branch'];
        $t3=$data['email'];
        $t4=$data['gender'];
        
    }
}


$con1=mysqli_connect('localhost','root','','studentu');
function showdata1(){
    global $con1,$t11,$t21,$t31,$t41,$t51,$d12,$d13,$d22,$d23,$d32,$d33,$d42,$d43,$d52,$d53,$cn;
    $t= $_SESSION['r'];
    
    $query1=     $s = "select * from marks1 where `roll` = '$t'";
    $run1=mysqli_query($con1,$query1);
    if($run1==true){
         $data1=mysqli_fetch_assoc($run1);
        $t11=$data1['ct11'];
        $d12=$data1['ct12'];
        $d13=$data1['sem1'];
        $t21=$data1['ct21'];
        $d22=$data1['ct22'];
        $d23=$data1['sem2'];
        $t31=$data1['ct31'];
        $d32=$data1['ct32'];
        $d33=$data1['sem3'];
        $t41=$data1['ct41'];
        $d42=$data1['ct42'];
        $d43=$data1['sem4'];
      $t51=$data1['ct51'];
        $d52=$data1['ct52'];
              $d53=$data1['sem5'];  

    
        
    }
}


$con2=mysqli_connect('localhost','root','','studenta');
function showdata3(){
    global $con2,$t13,$t23,$t33,$t43,$t53,$t63,$t73,$t83,$t93,$t103,$t113,$t123,$t133,$t143,$t153;
    $t= $_SESSION['r'];
    
    $query3=    "select * from attendance where `roll no` = '$t'";
    $run3=mysqli_query($con2,$query3);
    if($run3==true){
         $data3=mysqli_fetch_assoc($run3);
        $t13=$data3['s classes'];
        $t23=$data3['a classes'];
        $t33=$data3['sub'];
        $t43=$data3['s2'];
        $t53=$data3['a2'];
        $t63=$data3['sub2'];
        $t73=$data3['s3'];
        $t83=$data3['a3'];
        $t93=$data3['sub3'];
        $t103=$data3['s4'];
        $t113=$data3['a4'];
        $t123=$data3['sub4'];
        $t133=$data3['s5'];
        $t143=$data3['a5'];
        $t153=$data3['sub5'];
        
    }
}



?>


<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
#d{
	margin:0.5em 0 0 1.2em;
}
#d1{
	color:#03c4eb;
	font-size:80%;
	font-weight:100;
}
#d1:hover{
	text-decoration:none;

}
i {
  border: solid black;
  border-width: 0 1px 1px 0;
  display: inline-block;
  padding: 2px;
  margin-bottom:0.2em;
}

.right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
}
#d2{
	color:black;
	font-size:80%;
	font-weight:100;
	margin:-1.5em 0 0 4.3em;
}
#d4{
	margin:-21em 0 0 14em;
}
</style>
    <?php 
    showdata();
    showdata1();
    showdata3();
    ?>
<body class="w3-light-grey">
<div id="d">
<a href="main.php" id="d1" >Home <i class="right"></i><i class="right"></i></a>
<p id="d2">Student's Profile</p>
</div>


<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="photo1.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
           
          </div>
        </div>
		<h2>  <?php echo $t1; ?>   </h2>
		<hr>
        <div class="w3-container">
		<br />
         <a href="#z1" onclick=" myFunction()"><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-large w3-text-teal"></i>Student Profile</a>
		 <br /><br />
          <a href="#z2" onclick=" myFunctionn()"><i class="fa fa-asterisk   fa-fw w3-margin-right w3-large w3-text-teal"></i>Student Attendance</a>
		  <br /><br />
                    <a href="#z3" onclick=" myFunctionnn()"><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-large w3-text-teal"></i>Student Marks</a>
					<br /><br />
          <hr>
		 




        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom" id="z1" style="display:block">
        <h3 class="w3-text-teal w3-padding-16" ><i class="fa fa-user-circle fa-fw w3-margin-right w3-xxxlarge w3-text-black" ></i>Student's Profile</h3>
		
        <div class="w3-container">
          <h6 class="w3-tag w3-teal w3-round" style="margin:2em 0 -0.3em 0; width:15%;"  >Name  <i class="right"></i><i class="right"></i></h6>
            <h5 style="margin:-1em 0 0 13.7em">   <?php echo $t1; ?>  </h5>
            <hr>
          </div>
		
        <div class="w3-container">
          <h6  class="w3-tag w3-teal  w3-round"style="margin:-0.3em 0 -0.3em 0; width:15%;" >Branch <i class="right"></i><i class="right"></i></h6>
            <h5 style="margin:-1em 0 0 13.7em"><?php echo $t2; ?></h5>
		  <hr>
</div>
        <div class="w3-container">
          <h6 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:15%;" >Roll NO <i class="right"></i><i class="right"></i></h6>
            <h5 style="margin:-1em 0 0 13.7em"><?php echo $_SESSION['r']; ?></h5>
<hr>
        </div>
        <div class="w3-container">
          <h6 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:15%;" >Email ID <i class="right"></i><i class="right"></i></h6>
            <h5 style="margin:-1em 0 0 13.7em"><?php echo $t3; ?></h5>
		  <hr>
</div>
        <div class="w3-container">
          <h6 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:18%;" >Gender <i class="right"></i><i class="right"></i></h6>
            <h5 style="margin:-1em 0 0 13.7em"><?php echo $t4; ?></h5>
		  <hr>
</div>
      </div>

      <div class="w3-container w3-card w3-white" id="z2" style="display:none" >
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Student's Attendance</h2>
          
          
          
            
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Subject</b></h5>
                   <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php
                       if($t33=="")
                           echo "Not Updated";
                       else
                       echo $t33; ?></h6>
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Attendance</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
              if($t23>"0"){
              $q1=($t23/$t13)*100;
                  echo $q1."%";}
              else
                                         echo "Not Updated";
              ?></h6>
          <hr style="width:60%">
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Subject</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php
                                     if($t63=="")
                           echo "Not Updated";
                       else
                       echo $t63; ?></h6>
         
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Attendance</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
              if($t53>"0"){
              $q2=($t53/$t43)*100; echo $q2."%";}
              else
              echo "Not Updated"; ?></h6>
          <hr style="width:60%">
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Subject</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php
                                     if($t93=="")
                           echo "Not Updated";
                       else
                       echo $t93; ?></h6>
         
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Attendance</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
              if($t83 >"0")
              {
                  $q3=($t83/$t73)*100; echo $q3."%";
              }
              else
              echo "Not Updated";
              ?></h6>
          <hr style="width:60%">
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Subject</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
                                     if($t123=="")
                           echo "Not Updated";
                       else
                       echo $t123; ?></h6>
         
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Attendance</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php
              if($t113 >"0"){
                  $q4=($t113/$t103)*100; echo $q4."%"; }
              else
                  echo "Not Updated";
              
              ?></h6>
          <hr style="width:60%">
        </div>
          <div class="w3-container">
          <h5 class="w3-opacity"><b>Subject</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
                                     if($t153=="")
                           echo "Not Updated";
                       else
                       echo $t153; ?></h6>
         
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Attendance</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php
              if($t143>"0"){
                  $q5=($t143/$t133)*100; echo $q5."%"; }
              else 
                  echo "Not Updated";
              ?></h6>
          <hr style="width:60%">
        </div>
          
          
          
          

          
    
          
          
          
          
          
</div>
       <div class="w3-container w3-card w3-white" id="z3" style="display:none" >
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-globe fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Student's Marks</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Marks in EME</b></h5>
            <hr style="width:30%" >
            <h6 class="w3-opacity"><b>CT-1</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($t11 > "0"){
                  echo $t11; $cn+=500;
                }
              else
              echo "Not Attempted." ?>

            </h6>
              <h6 class="w3-opacity"><b>CT-2</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d12 > "0"){
                  echo $d12; $cn+=500;
                }
              else
              echo "Not Attempted." ?>

            </h6>
              <h6 class="w3-opacity"><b>SEM</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d13 > "0"){
                  echo $d13; $cn+=500;
                }
              else
              echo "Not Attempted." ?>
          <hr style="width:30%" >
                 <hr style="width:30%" >
            </h6>
        </div>
        <div class="w3-container" style="margin:-22.5em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Marks in E-COM</b></h5>
            <hr style="width:30%" >
              <h6 class="w3-opacity"><b>CT-1</b></h6>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
              if($t21 > "0"){
                  echo $t21; $cn+=500;
                }
              else
              echo "Not Attempted." ?></h6>
            <h6 class="w3-opacity"><b>CT-2</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d22 > "0"){
                  echo $d22; $cn+=500;
                }
              else
              echo "Not Attempted." ?>

            </h6>
              <h6 class="w3-opacity"><b>SEM</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d23 > "0"){
                  echo $d23; $cn+=500;
                }
              else
              echo "Not Attempted." ?>
          <hr style="width:30%" >
                 <hr style="width:60%"></h6>
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Marks in DAA</b></h5>
            <hr style="width:30%" >
              <h6 class="w3-opacity"><b>CT-1</b></h6>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
              if($t31 > "0"){
                  echo $t31;
                  $cn+=500;}
              else
              echo "Not Attempted." ?></h6>
            <h6 class="w3-opacity"><b>CT-2</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d32 > "0"){
                  echo $d32; $cn+=500;
                }
              else
              echo "Not Attempted." ?>

            </h6>
              <h6 class="w3-opacity"><b>SEM</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d33 > "0"){
                  echo $d33; $cn+=500;
                }
              else
              echo "Not Attempted." ?>
          <hr style="width:30%" >
         
                 <hr style="width:30%" ></h6>
        </div>
        <div class="w3-container" style="margin:-22.3em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Marks in OS</b></h5>
            <hr style="width:30%" >
            <h6 class="w3-opacity"><b>CT-1</b></h6>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
              if($t41 > "0"){
                  echo $t41;
                  $cn+=500;}
              else
              echo "Not Attempted." ?></h6>
                   <h6 class="w3-opacity"><b>CT-2</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d42 > "0"){
                  echo $d42; $cn+=500;
                }
              else
              echo "Not Attempted." ?>

            </h6>
              <h6 class="w3-opacity"><b>SEM</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d43> "0"){
                  echo $d43; $cn+=500;
                }
              else
                  echo "Not Attempted." ?></h6>
          <hr style="width:30%" >
                 <hr style="width:60%">
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Marks in SE</b></h5>
            <hr style="width:30%" >
              <h6 class="w3-opacity"><b>CT-1</b></h6>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
              if($t51 > "0"){
                  echo $t51;
                  $cn+=500;}
              else
              echo "Not Attempted." ?></h6>
             <h6 class="w3-opacity"><b>CT-2</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d52 > "0"){
                  echo $d52; $cn+=500;
                }
              else
              echo "Not Attempted." ?>

            </h6>
              <h6 class="w3-opacity"><b>SEM</b></h6>
            
             <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php 
         
            if($d53 > "0"){
                  echo $d53; $cn+=500;
                }
              else
                  echo "Not Attempted." ?></h6>
          <hr style="width:30%" >
         
          <hr style="width:30%" >
        </div>
       


</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Attended classes', 8],
  ['Bunked', 2],
]);

  // Optional; add a title and set the width and height of the chart
  var options = { 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

              <script>
function myFunction() {
    var x = document.getElementById("z1");
     var y = document.getElementById("z2");
	 var z = document.getElementById("z3");
    if (x.style.display === "none") {
        x.style.display = "block";
                y.style.display = "none";
				                z.style.display = "none";
    } 
}
    </script>
           <script>
function myFunctionn() {
    var x = document.getElementById("z2");
    var y = document.getElementById("z1");
	var z = document.getElementById("z3");
    if (x.style.display === "none") {
        x.style.display = "block";
         y.style.display = "none";
		 z.style.display = "none";
    } 
}
    </script>
	           <script>
function myFunctionnn() {
    var x = document.getElementById("z3");
    var y = document.getElementById("z1");
	var z = document.getElementById("z2");
    if (x.style.display === "none") {
        x.style.display = "block";
         y.style.display = "none";
		 z.style.display = "none";
    } 
}
    </script>


</body>
</html>
