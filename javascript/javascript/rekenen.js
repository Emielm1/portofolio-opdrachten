  function calculate()  {

  var myNumber_01 = parseInt(document.getElementById("myNumber_01").value);
  var myNumber_02 = parseInt(document.getElementById("myNumber_02").value);
  var myResult = -1;
  var operators = document.getElementsByName("calc");
  var selectedOperators = "plus";
  
   if (isNaN(myNumber_01) == true || isNaN(myNumber_02) == true)  {
       
    document.getElementById("result").innerHTML = "er is een niet geldig nummer ingevoerd";
       return false;
   }
   for (index = 0;index < operators.length;index++) {
   
    if(operators[index].checked) {
 selectedOperators = operators[index].value;
 break;
 }
   
   }
   //calc
   switch (selectedOperators)  {
    
 case "plus":
   myResult = myNumber_01 + myNumber_02;
   document.getElementById("result").innerHTML = myResult;
 break;
 case "minus":
   myResult = myNumber_01 - myNumber_02;
    document.getElementById("result").innerHTML = myResult;
 break;
   case "multi":
   myResult = myNumber_01 * myNumber_02;
   document.getElementById("result").innerHTML = myResult;
 break;
   case "divide":
   myResult = myNumber_01 / myNumber_02;
   document.getElementById("result").innerHTML = myResult;
  break;
   
   }
   
   
   
  }