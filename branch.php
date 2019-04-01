<?php

session_start();

$con=mysqli_connect('localhost','root','','register');
function showdata(){
    global $con,$t1,$t2,$t3,$t4;
    $t= $_SESSION['r'];
    
    $query=     $s = "select * from usertable where `roll no` = '$t'";
    $run=mysqli_query($con,$query);
    if($run==true){
         $data=mysqli_fetch_assoc($run);
        $t1=$data['name'];
        $t2=$data['branch'];
        $t3=$data['email'];
        $t4=$data['mobile no.'];
        
    }
}


$con1=mysqli_connect('localhost','root','','studentu');
function showdata1(){
    global $con1,$t11,$t21,$t31,$t41,$t51,$t61,$t71,$t81,$t91;
    $t= $_SESSION['r'];
    
    $query1=     $s = "select * from marks where `roll no` = '$t'";
    $run1=mysqli_query($con1,$query1);
    if($run1==true){
         $data1=mysqli_fetch_assoc($run1);
        $t11=$data1['1sem'];
        $t21=$data1['2sem'];
        $t31=$data1['3sem'];
        $t41=$data1['4sem'];
                $t51=$data1['5sem'];
        $t61=$data1['6sem'];
        $t71=$data1['7sem'];
        $t81=$data1['8sem'];
        $t91=$data1['total'];
        
    }
}


$con2=mysqli_connect('localhost','root','','studenta');
function showdata3(){
    global $con2,$t13,$t23,$t33;
    $t= $_SESSION['r'];
    
    $query3=    "select * from attendance where `roll no` = '$t'";
    $run3=mysqli_query($con2,$query3);
    if($run3==true){
         $data3=mysqli_fetch_assoc($run3);
        $t13=$data3['s classes'];
        $t23=$data3['a classes'];
        $t33=$data3['attend'];
        
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
<a href="#" id="d1" >Home <i class="right"></i><i class="right"></i></a>
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
		<h2> NISHTHA  PANDEY</h2>
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
          <?php echo $t1; ?>
            <hr>
          </div>
		
        <div class="w3-container">
          <h6  class="w3-tag w3-teal  w3-round"style="margin:-0.3em 0 -0.3em 0; width:15%;" >Branch <i class="right"></i><i class="right"></i></h6><?php echo $t2; ?>
		  <hr>
</div>
        <div class="w3-container">
          <h6 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:15%;" >Roll NO <i class="right"></i><i class="right"></i></h6><?php echo $_SESSION['r']; ?>
<hr>
        </div>
        <div class="w3-container">
          <h6 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:15%;" >Email ID <i class="right"></i><i class="right"></i></h6><?php echo $t3; ?>
		  <hr>
</div>
        <div class="w3-container">
          <h6 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:18%;" >Mobile NO <i class="right"></i><i class="right"></i></h6><?php echo $t4; ?>
		  <hr>
</div>
      </div>

      <div class="w3-container w3-card w3-white" id="z2" style="display:none" >
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Student's Attendance</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Scheduled Classes</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t13; ?></h6>
         
          <hr style="width:30%" >
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Attend Classes</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t23; ?></h6>
          <hr style="width:30%">
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Total Attendance</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t33; ?> % </h6>
        </div>
    <div id="d4">  

<div id="piechart"></div>
</div>
</div>
       <div class="w3-container w3-card w3-white" id="z3" style="display:none" >
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-globe fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Student's Marks</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Marks in 1st semester</b></h5>
         <?php echo $t11; ?>
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Marks in 2nd semester</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t21; ?></h6>
          <hr style="width:60%">
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Marks in 3rd semester</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t31; ?></h6>
         
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Marks in 4th semester</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t41; ?></h6>
          <hr style="width:60%">
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Marks in 5th semester</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t51; ?></h6>
         
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Marks in 6th semester</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t61; ?></h6>
          <hr style="width:60%">
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Marks in 7th semester</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t71; ?></h6>
         
          <hr style="width:30%" >
        </div>
        <div class="w3-container" style="margin:-7.4em 0 0 19em;" >
          <h5 class="w3-opacity"><b>Marks in 8th semester</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t81; ?></h6>
          <hr style="width:60%">
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Total Marks</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $t91; ?></h6>
		  <hr>
        </div>
		<div class="w3-container"  >
          <h5 class="w3-opacity"><b>Total Percentage</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>80%</h6>
          
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
  ['Attended classes', 9],
  ['Bunked', 1],
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
