
//CHEF'S CORNER MENU FOR ODH


var lunch_menu =
{

//Please do not altar any text other than the menu directly below
//In order for each menu item to properly display,
//please put each item in quotations. ex. "Cheese Pizza"
//Each item must be followed with a comma, except for the last item

//ALL MEALS HAVE CHEESE AND PEPPORONI OPTIONS LISTED FIRST. YOU ARE ONLY
//CHANGING THE DAILY SPECIAL FOR EACH DAY.

"Monday" : "Beefy Mac Casserole",
"Tuesday" : "Meatball Subs",
"Wednesday" : "Baked Ziti w/Marinara",
"Thursday" : "Big Ole Burrito",
"Friday" : "Philly Chicken Caccitore Sandwich",
"Saturday" : "",
"Sunday" : ""


}

var dinner_menu =
{

//Please do not altar any text other than the menu directly below
//In order for each menu item to properly display,
//please put each item in quotations. ex. "Cheese Pizza"
//Each item must be followed with a comma, except for the last item

//ALL MEALS HAVE CHEESE AND PEPPORONI OPTIONS LISTED FIRST. YOU ARE ONLY
//CHANGING THE DAILY SPECIAL FOR EACH DAY.

"Monday" : "Nacho Bar",
"Tuesday" : "Balsamic Turkey London Broil",
"Wednesday" : "Slow Roasted Chicken & Potatoes",
"Thursday" : "Herb Crusted Pork Loin",
"Friday" : "Chicken and Dumplings",
"Saturday" : "Chicken Nuggets",
"Sunday" : "Hot Roast Beef Sandwich"


}

/////////////////////////////////////////////////////////////////////////
////////////////////// NO TOUCHY////////////////////////////////////////
var date = new Date();
var dayOfWeek = date.toLocaleDateString("en-gb", { weekday: 'long' });

var today = new Date().getHours();
if (today >= 00 && today <= 14) {
   document.getElementById("chefsLunchOfTheDay").innerHTML = lunch_menu[dayOfWeek];
} else {
  document.getElementById("chefsDinnerOfTheDay").innerHTML = dinner_menu[dayOfWeek];
};
