function getMeal() {

let i = new Date();
let d = i.getDay();
let h = i.getHours();

function meal() {
        if (d >= 1 && d <= 5 && h < 11 ) {
  return 0;
  }
  else if (d >= 1 && d <= 5 && h >= 11 && h <= 15){
  return 7
  }
  else if (h > 15){
  return 14
  }
  else if (d === 6 && h <= 15){
  return (21-6)
  }
  else if (d === 0 && h <= 15){
  return (22)
  }
  else {
  return "Meal not found"
  }
}
console.log("Day: " + d);
console.log("Hour: " + h);
console.log("Meal: " + meal());
let today = d + meal()-1;
console.log("This meal's index #: " + today);
return today;
};

$.ajax({
    type: 'POST',
    datatype: 'json',
    url: '/php/get-data.php',
    success: function(result) {
        var str = result; //Get-data.php JSON string object
        var parsed = jQuery.parseJSON(str); // Parse the JSON string object to create a JS object
        var data = parsed;
        console.log(parsed);                    // All data for console.log
        console.log("piz");
        document.getElementById("demo").innerHTML = parsed[getMeal()].piz;
  }
});
