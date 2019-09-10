
//GRILL MENU FOR ODH


var menu =
{

//Please do not altar any text other than the menu directly below in green text.
//In order for each menu item to properly display,
//please put each item in quotations. ex. "Cheese Pizza"
//Each item must be followed with a comma, except for the last item.

//ALL MEALS ALSO DISPLAY QUESADILLAS, CHEESEBURGERS, AND TEXAS GRILLED CHEESE.

"Monday" : "Philly Cheesesteak Sandwich",
"Tuesday" : "Fried Cod Filet w/Tartar",
"Wednesday" : "BBQ Riblet Sandwich",
"Thursday" : "Italian Sausage w/Peppers",
"Friday" : "Chicken Parmesan Sandwich",
"Saturday" : "",
"Sunday" : ""


}

var date = new Date();
var dayOfWeek = date.toLocaleDateString("en-gb", { weekday: 'long' });

document.getElementById("grillOfTheDay").innerHTML = menu[dayOfWeek];
