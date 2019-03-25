

function clearResults() {
	lengte.value = '';
	gewicht.value = '';
}

function ajax(gewicht, lengte) {
	let debug = true; // maak false als script werkt
	let controlScript = "BMI.php"; // PHP script met berekening
	let xmlhttp = new XMLHttpRequest(); // maak een instance
	let httpString = controlScript + "?gewicht=" + gewicht + "&lengte_cm=" + lengte;
	let httpResponse = "";
	if(debug) console.log(httpString); // debug
	xmlhttp.open("GET", httpString, true);
	xmlhttp.send();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if(debug) console.log("http response = " + xmlhttp.responseText); // debug
			httpResponse = xmlhttp.responseText; // leest de string van de server
			resultaat.innerHTML = httpResponse;
		}
	}
}