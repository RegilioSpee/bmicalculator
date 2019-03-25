<?php 
$gewicht = $_GET["gewicht"];
$lengte_cm = $_GET["lengte_cm"];
$lengte = $lengte_cm / 100;
BMIcalc($gewicht,$lengte);



function BMIcalc($gewicht,$lengte){

	$BMI = $gewicht / ($lengte * $lengte);

	$BMI = round($BMI, 1);

	if($BMI <= 18.4){
		echo "<p class='ondergewicht'>Je BMI is $BMI en je hebt ondergewicht!</p>"; //ondergewicht
	}

	if($BMI >= 18.5 && $BMI <= 25){
		echo "<p class='gezond'>Je BMI is $BMI en je hebt een gezond gewicht!</p>"; //gezond gewicht
	}

	if($BMI >= 25.1 && $BMI <= 30 ){
		echo "<p class='overgewicht'>Je BMI is $BMI en je hebt overgewicht!</p>"; //overgewicht
	}

	if($BMI >= 30.1 && $BMI <= 35){
		echo "<p class='obesitas'>Je BMI is $BMI en je hebt obesitas!</p>"; //obesitas
	}

	if($BMI >= 35.1){
		echo "<p class='morbesitas'>Je BMI is $BMI en je hebt morbide obesitas!</p>"; //morbide obesitas
	}

	elseif ($BMI >= 50) {
		echo "<p class='red'>Je input klopt niet</p>"; //input incorrect
	}
}

 ?>