
//PIZZA MENU FOR ODH

var val = "<?php echo $result ?>";

var menu =
{

//Please do not altar any text other than the menu directly below
//In order for each menu item to properly display,
//please put each item in quotations. ex. "Cheese Pizza"
//Each item must be followed with a comma, except for the last item

//ALL MEALS HAVE CHEESE AND PEPPORONI OPTIONS LISTED FIRST. YOU ARE ONLY
//CHANGING THE DAILY SPECIAL FOR EACH DAY.

"Monday" : "Meat Lover's Pizza",
"Tuesday" : "Grilled Vegetable Pizza",
"Wednesday" : "Cheeseburger Pizza",
"Thursday" : "Mac and Cheese Pizza",
"Friday" : "Tandoori Chicken Pizza",
"Saturday" : "Chicken Bruschetta Pizza",
"Sunday" : "Sausage Pizza"


}

var date = new Date();
var dayOfWeek = date.toLocaleDateString("en-gb", { weekday: 'long' });

document.getElementById("pizzaOfTheDay").innerHTML = menu[dayOfWeek];
console.log(val);
