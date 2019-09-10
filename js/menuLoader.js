
//MONDAY
var a0 = menu[0]
//TUESDAY
var b1 = menu[1]
//WEDNESDAY
var c2 = menu[2]
//THURSDAY
var d3 = menu[3]
//FRIDAY
var e4 = menu[4]
//SATURDAY
var f5 = menu[5]
//SUNDAY
var g6 = menu[6]

$(document).ready(function menuLoader() {
  console.log(menu[0]);
  console.log(menu[1]);
  console.log(menu[2]);
  console.log(menu[3]);
  console.log(menu[4]);
  console.log(menu[5]);
  console.log(menu[6]);

/////////Below code places menu items///////////
//Monday
  document.getElementById("pizza1").innerHTML = a0;
  document.getElementById("pizza2").innerHTML = b1;
  document.getElementById("pizza3").innerHTML = c2;
  document.getElementById("pizza4").innerHTML = d3;
  document.getElementById("pizza5").innerHTML = e4;
  document.getElementById("pizza6").innerHTML = f5;
  document.getElementById("pizza7").innerHTML = g6;
});
