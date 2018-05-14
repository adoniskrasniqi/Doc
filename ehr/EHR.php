<?php
require "../assets/view/body.php";


$body = new body("Patient","Doc");


?>
<!DOCTYPE html>
<html>
	<head>
		<?php $body->printHeader(); ?>
	</head>
	<body>

		<section class="top_header"><?php $body->print_topHeaderTitle(); ?></h3></section>
		<section class="left_menu"><?php $body->print_leftMenuItems(); ?></section>
		<section class="main_Holder" id="main_Holder">
			<h2 class="main_HolderTitle">Regjistri i shëndetit</h2>

			<!-- Main data -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Numri i pacientëve</span>
					<span class="bills_Payment">145</span>
				</div>
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle"></span>
					<span class="bills_Payment paymentIncomplete"></span>
				</div>
			</div>

			<!-- Gender -->
			<div class="mainHolder_itemHolder">
					<div class="chartContainer">
						<span class="mainHolder_elementTitle">Ndarja gjinore</span>
						<br>
						<canvas id="genderChart" width="250" height="250"></canvas>
					</div>
			</div>
			<hr class="firstTypeDivider">

			<!-- City -->
			<div class="mainHolder_itemHolder">
					<div class="chartContainer">
						<span class="mainHolder_elementTitle">Ndarja sipas qytetit</span>
						<br>
						<canvas id="cityChart" width="250" height="250"></canvas>
					</div>
			</div>

			<!-- Age -->
			<div class="mainHolder_itemHolder">
					<div class="chartContainer">
						<span class="mainHolder_elementTitle">Ndarja sipas moshës</span>
						<br>
						<canvas id="ageChart" width="250" height="250"></canvas>
					</div>
			</div>

		</section>

	<!-- Chart JS-->
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>	
<script>
//Shuffle array function	
function shuffle(arr) {
    for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
    return arr;
}

//Colors
var colorArray = shuffle(['#f44336','#9c27b0','#3f51b5','#2196f3','#03a9f4','#00bcd4','#009688','#4caf50','#e91e63','#8bc34a','#cddc39','#ffeb3b','#ffc107','#ff9800','#ff5722','#795548','#9e9e9e','#607d8b']);

//Gender Array
var genderArray = ["Gjinia Mashkullore", "Gjinia Femrore"];
var genderData = ["105","76"];

//City Array
var cityArray = ["Prishtinë", "Prizren", "Mitrovicë", "Pejë", "Gjakovë", "Ferizaj"];
var cityData = ["47","12","28","16","1","9"]

//Age Array
var ageArray = ["0-5","6-10","11-15","16-20","21-30","31-40","41-50","51-60","61+"];
var ageData = ["1","3","9","4","11","27","20","5","3"];

//Gender Chart
var ctx = document.getElementById("genderChart").getContext('2d');
var genderChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: genderArray,
        datasets: [{

            data: genderData,
            backgroundColor: colorArray,
            borderColor: colorArray,
            borderWidth: 1
        }]
    }
});

//City Chart
var ctx = document.getElementById("cityChart").getContext('2d');
var cityChart = new Chart(ctx, {
    type: 'bar',
    data: {
    	label:'',
        labels: cityArray,
        datasets: [{
            data: cityData,
            backgroundColor: colorArray,
        }]
    },
    options:{
    	legend: {
            display: false
         },
    }
});


//Age Chart
var ctx = document.getElementById("ageChart").getContext('2d');
var ageChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ageArray,
        datasets: [{
            data: ageData,
            backgroundColor: colorArray,
        }]
    },
    options:{
    	legend: {
            display: false
         },
    }
});
</script>



	</body>
</html>