var y = new Date();
var year = y.getFullYear();

 var jaary = parseInt(document.getElementById("jaary").value);
 
 var leeftijd = year - jaary;
 
 function age() {
	document.write(leeftijd);
 }