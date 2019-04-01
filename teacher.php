<?php

session_start();

$con=mysqli_connect('localhost','root','','tregister');
function showdata(){
    global $con,$t1,$t2,$t3,$t4;
    $t= $_SESSION['v'];
    
    $query=     $s = "select * from tusertable where `id` = '$t'";
    $run=mysqli_query($con,$query);
    if($run==true){
         $data=mysqli_fetch_assoc($run);
        $t1=$data['name'];
        
        $t2=$data['branch'];
        $t3=$data['email'];
        $t4=$data['gender'];
        
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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
		<h2> <?php echo $t1; ?></h2>
		<hr>
        <div class="w3-container">
		<br />
         <a href="#z1" onclick=" myFunction()"><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-large w3-text-teal"></i>Teacher Profile</a>
		 <br /><br />
          <a href="#z2" onclick=" myFunctionn()"><i class="fa fa-asterisk   fa-fw w3-margin-right w3-large w3-text-teal"></i> Update Student Attendance</a>
		  <br /><br />
                    <a href="#z3" onclick=" myFunctionnn()"><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-large w3-text-teal"></i>Update Student Marks</a>
					<br /><br />
          <hr>
		 




        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom" id="z1" style="display:block">
        <h3 class="w3-text-teal w3-padding-16" ><i class="fa fa-user-circle fa-fw w3-margin-right w3-xxxlarge w3-text-black" ></i>Teacher's Profile</h3>
		
        <div class="w3-container">
          <h5 class="w3-tag w3-teal w3-round" style="margin:2em 0 -0.3em 0; width:15%;height:23px; padding:0.2em 0 0 0 "  >Name <i class="right"></i><i class="right"></i></h5>
            <h5 style="margin:-1em 0 0 13.7em">  <?php echo $t1; ?></h5>
            <hr>
        </div>
		
        <div class="w3-container">
          <h5  class="w3-tag w3-teal  w3-round"style="margin:-0.3em 0 -0.3em 0; width:15%;height:23px; padding:0.2em 0 0 0 " >Branch <i class="right"></i><i class="right"></i></h5>
            <h5 style="margin:-1em 0 0 13.7em"><?php echo $t2; ?></h5>
		  <hr>
</div>
        <div class="w3-container">
          <h5 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:15%;height:23px; padding:0.2em 0 0 0 "   >ID <i class="right"></i><i class="right"></i></h5>
            <h5 style="margin:-1em 0 0 13.7em"><?php echo $_SESSION['v']; ?></h5>
<hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:15%;height:23px; padding:0.2em 0 0 0 "   >Email ID <i class="right"></i><i class="right"></i></h5>
            <h5 style="margin:-1em 0 0 13.7em"><?php echo $t3; ?></h5>
		  <hr>
</div>
        <div class="w3-container">
          <h5 class="w3-tag w3-teal  w3-round" style="margin:-0.3em 0 -0.3em 0; width:18%;height:23px; padding:0.2em 0 0 0 "   >Gender<i class="right"></i><i class="right"></i></h5>
            <h5 style="margin:-1em 0 0 13.7em"><?php echo $t4; ?></h5>
		  <hr>
</div>
      </div>

      <div class="w3-container w3-card w3-white" id="z2" style="display:none" >
       
	   <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Update Student's Attendance</h2>
<br />
<hr>
	   
	   <form action="attend.php" method="post">
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Roll no</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="roll" required="required" placeholder="rollno">
    </div>
  </div>
  <hr>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">EME</label>
  </div>
  <hr>
       <div class="form-group row" style="margin:-6.2em 0 0 2em;" >
    <label class="col-sm-2 col-form-label">Schedueled Classes</label>
    <div class="col-sm-2" >
      <input type="text" class="form-control" name="sc"  placeholder="scheduled classes">
    </div>
  </div>
  <hr>
 <div class="form-group row" style="margin:-6.2em 0 0 2em;">
    <label class="col-sm-2 col-form-label">Attend Classes</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="sa"  placeholder="attended classes">
    </div>
  </div>
  <hr>      

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">E-COM</label>
  </div>
  <hr> 
           
        <div class="form-group row" style="margin:-6.2em 0 0 2em;" >
    <label class="col-sm-2 col-form-label">Schedueled Classes</label>
    <div class="col-sm-2" >
      <input type="text" class="form-control" name="sc2"  placeholder="scheduled classes">
    </div>
  </div>
  <hr>
 <div class="form-group row" style="margin:-6.2em 0 0 2em;">
    <label class="col-sm-2 col-form-label">Attend Classes</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="sa2"  placeholder="attended classes">
    </div>
  </div>
  <hr>      
    <hr>
 
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">DAA</label>
  </div>
  <hr> 
         <div class="form-group row"  style="margin:-6.2em 0 0 2em;">
    <label class="col-sm-2 col-form-label">Schedueled Classes</label>
    <div class="col-sm-2" >
      <input type="text" class="form-control" name="sc3"  placeholder="scheduled classes">
    </div>
  </div>
  <hr>
 <div class="form-group row" style="margin:-6.2em 0 0 2em;">
    <label class="col-sm-2 col-form-label">Attend Classes</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="sa3"  placeholder="attended classes">
    </div>
  </div>     
    <hr>
 
           
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">OS</label>
  </div>
  <hr> 
           
           
   <div class="form-group row"  style="margin:-6.2em 0 0 2em;">
    <label class="col-sm-2 col-form-label">Schedueled Classes</label>
    <div class="col-sm-2" >
      <input type="text" class="form-control" name="sc4"  placeholder="scheduled classes">
    </div>
  </div>
  <hr>
 <div class="form-group row" style="margin:-6.2em 0 0 2em;">
    <label class="col-sm-2 col-form-label">Attend Classes</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="sa4"  placeholder="attended classes">
    </div>
  </div>
  <hr>
 
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">SE</label>
  </div>
  <hr>
           
        <div class="form-group row"  style="margin:-6.2em 0 0 2em;" >
    <label class="col-sm-2 col-form-label">Schedueled Classes</label>
    <div class="col-sm-2" >
      <input type="text" class="form-control" name="sc5"  placeholder="scheduled classes">
    </div>
  </div>
  <hr>
 <div class="form-group row" style="margin:-6.2em 0 0 2em;">
    <label class="col-sm-2 col-form-label">Attend Classes</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="sa5"  placeholder="attended classes">
    </div>
  </div>
  <hr>      
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</div>
       <div class="w3-container w3-card w3-white" id="z3" style="display:none" >
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-globe fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Update Student's Marks</h2>
       	   <form action="marks.php" method="post">
               <div class="form-group row" style="margin-bottom:2em;">
    <label class="col-sm-4 col-form-label">Student's Roll no.</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="rollno" required="required" placeholder="roll no.">
    </div>
  </div>
                  <div class="form-group row">
    <label class="col-sm-2 col-form-label" >EME</label>
  </div>
  <hr> 
  <div class="form-group row" style="margin:-3.9em 0 0 -18em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-1</label>
    <div class="col-sm-2" style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="1"  placeholder="marks">
    </div>
  </div>
    <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-2</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="2"  placeholder="marks">
    </div>
  </div>
               <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label"style="margin:-0.7em 0 0 0;">SEM</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="3"  placeholder="marks">
    </div>
  </div>

  <hr>
               
               
               
                         <div class="form-group row">
    <label class="col-sm-2 col-form-label" >E-COM</label>
  </div>
  <hr> 
  <div class="form-group row" style="margin:-3.9em 0 0 -18em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-1</label>
    <div class="col-sm-2" style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="4"  placeholder="marks">
    </div>
  </div>
    <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-2</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="5"  placeholder="marks">
    </div>
  </div>
               <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label"style="margin:-0.7em 0 0 0;">SEM</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="6"  placeholder="marks">
    </div>
  </div>

  <hr>
                         <div class="form-group row">
    <label class="col-sm-2 col-form-label" >DAA</label>
  </div>
  <hr> 
  <div class="form-group row" style="margin:-3.9em 0 0 -18em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-1</label>
    <div class="col-sm-2" style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="7"  placeholder="marks">
    </div>
  </div>
    <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-2</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="8"  placeholder="marks">
    </div>
  </div>
               <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label"style="margin:-0.7em 0 0 0;">SEM</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="9"  placeholder="marks">
    </div>
  </div>

  <hr>
                         <div class="form-group row">
    <label class="col-sm-2 col-form-label" >OS</label>
  </div>
  <hr> 
  <div class="form-group row" style="margin:-3.9em 0 0 -18em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-1</label>
    <div class="col-sm-2" style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="10"  placeholder="marks">
    </div>
  </div>
    <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-2</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="11"  placeholder="marks">
    </div>
  </div>
               <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label"style="margin:-0.7em 0 0 0;">SEM</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="12"  placeholder="marks">
    </div>
  </div>

  <hr>
                         <div class="form-group row">
    <label class="col-sm-2 col-form-label" >SE</label>
  </div>
  <hr> 
  <div class="form-group row" style="margin:-3.9em 0 0 -18em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-1</label>
    <div class="col-sm-2" style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="13"  placeholder="marks">
    </div>
  </div>
    <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label" style="margin:-0.7em 0 0 0;">CT-2</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="14"  placeholder="marks">
    </div>
  </div>
               <div class="form-group row" style="margin:-3.6em 0 0 -10em;">
    <label class="col-sm-2 col-form-label"style="margin:-0.7em 0 0 0;">SEM</label>
    <div class="col-sm-2"style="margin:-1.1em 0 0 -8em;">
      <input type="text" class="form-control" name="15"  placeholder="marks">
    </div>
  </div>

  <hr>
               
               
               
               
               
               
               
 
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success" onclick=" myFunction()">Submit</button>
    </div>
  </div>
</form>
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
