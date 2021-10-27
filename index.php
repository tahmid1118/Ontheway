<?php
include_once 'header.php';
?>
<div class = "newbody">

<div id="covid" style=" border-radius: 10pt; text-align: justify-all;  margin-left: 30px; margin-top: 20px; padding:20px; height:280px; width: 500px; background-color: lightgrey; box-shadow: 5px 5px 5px 5px #888888;">
    <center><h3 style="font-size: 25px;">Covid 19 Update</h3></center> 
    <center><h2 style="font-size: 20px;"><span id="datetime" style="color: black;"></span>&nbsp;&nbsp;<span id="currentTime"></span></h2></center>
    <div style="float: left; width: 50%;">
     <p> <strong>Active Cases: </strong> <strong><span id = "active"></span> </strong></p>
     <p><strong>Total Cases: </strong><strong><span id = "cases"></span> </strong></p>
     <p><strong>New Cases: </strong><strong><span id = "newCases"></span> </strong></p>
     <p><strong>Critical Cases: </strong><strong><span id = "critical"></span> </strong></p>
    </div>
    <div>
      <p><strong>New Deaths: </strong><strong><span id = "newDeath"></span> </strong></p>
      <p><strong>Total Deaths: </strong><strong><span id = "death"></span> </strong></p>
      <p><strong>Recovered Cases: </strong><strong><span id = "recovered"></span> </strong></p>
      <p><strong>Total Testes Done: </strong><strong><span id = "tests"></span> </strong></p>
      <p><strong><center>Stay Home, Stay Safe</center></strong></p>
    </div>
  </div>
		<section class="index-intro">
		<h1>Our Services</h1>
		</section>
		<section class="index-categories">
			<br><br><br>
			<div class="index-categories-list">
				<div class="box1">
					<h3><a href="dcorner.php"> Doctor Corner </a></h3>
				</div>
				<div class="box2">
					<h3><a href="bbankcorner.php"> Blood Bank Corner </a></h3>
				</div>
				<div class="box3">
					<h3><a href="medguide.php">Medicine Guidance </a></h3>
				</div>
				<div class="box4">
					<h3><a href="cart.php">Order medicines</a></h3>
				</div>
				
			</div>
			
		</section>
</div>
<div class="index-footer">
		<h3>Email: ontheway7911@gmail.com <br>Contact: +8801787772338,+8801515652762</h3>
</div>

<style type="text/css">
	body{
		background-image: url("background3.jpg");
		
		 width: 100%;
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
	}
</style>
<script >
fetch('https://corona.lmao.ninja/v2/countries/Bangladesh')
.then((response) => {
  return response.json();
})
.then((data) => {
  console.log(data);
  document.getElementById("active").innerHTML = data.active.toLocaleString();
  document.getElementById("cases").innerHTML = data.cases.toLocaleString();
  document.getElementById("critical").innerHTML = data.critical.toLocaleString();
  document.getElementById("death").innerHTML = data.deaths.toLocaleString();
  document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
  document.getElementById("tests").innerHTML = data.tests.toLocaleString();
  document.getElementById("newCases").innerHTML = data.todayCases.toLocaleString();
  document.getElementById("newDeath").innerHTML = data.todayDeaths.toLocaleString();
});
var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();

  clock();  
    function clock() {
    var now = new Date();
    var TwentyFourHour = now.getHours();
    var hour = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();
    var mid = 'pm';
    if (min < 10) {
      min = "0" + min;
    }
    if (hour > 12) {
      hour = hour - 12;
    }    
    if(hour==0){ 
      hour=12;
    }
    if(TwentyFourHour < 12) {
       mid = 'am';
    }     
  document.getElementById('currentTime').innerHTML =     hour+':'+min+':'+sec +' '+mid ;
    setTimeout(clock, 1000);
    }







</script>



		
