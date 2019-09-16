
//CHEF'S CORNER MENU FOR ODH


var lunch_menu =
{

//Please do not altar any text other than the menu directly below
//In order for each menu item to properly display,
//please put each item in quotations. ex. "Cheese Pizza"
//Each item must be followed with a comma, except for the last item

"Monday" : "Vegan Chicken Pita",
"Tuesday" : "Vegetable Stew w/Almonds",
"Wednesday" : "Egyptian Rice & Lentils",
"Thursday" : "Morocan Berber Stew",
"Friday" : "Eggplant Parmesan",
"Saturday" : "",
"Sunday" : ""


}

var dinner_menu =
{

//Please do not altar any text other than the menu directly below in green text.

"Monday" : "Vegetable Noodle Bowls",
"Tuesday" : "Vegetable Stew w/Almonds",
"Wednesday" : "Egyptian Rice & Lentils",
"Thursday" : "Morocan Berber Stew",
"Friday" : "Eggplant Parmesan",
"Saturday" : "Seared Vegetable Lo Mein",
"Sunday" : "Spaghetti & Marinara Sauce"


}

/////////////////////////////////////////////////////////////////////////
////////////////////// NO TOUCHY////////////////////////////////////////
var date = new Date();
var dayOfWeek = date.toLocaleDateString("en-gb", { weekday: 'long' });

var today = new Date().getHours();
if (today >= 00 && today <= 15) {
   document.getElementById("vegLunchOfTheDay").innerHTML = lunch_menu[dayOfWeek];
} else {
  document.getElementById("vegDinnerOfTheDay").innerHTML = dinner_menu[dayOfWeek];
};
