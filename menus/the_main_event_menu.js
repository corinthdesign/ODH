
//CHEF'S CORNER MENU FOR ODH


var lunch_menu =
{

//Please do not altar any text other than the menu directly below in green text.
//In order for each menu item to properly display,
//please put each item in quotations. ex. "Cheese Pizza"
//Each item must be followed with a comma, except for the last item

"Monday" : "Chicken Pitas",
"Tuesday" : "Sizzling Chicken Caesar Salad",
"Wednesday" : "Augie Bowls",
"Thursday" : "Shrimp and Andouille Jambalaya",
"Friday" : "Korean Pork Bao",
"Saturday" : "BBQ Chicken Leg Quarters",
"Sunday" : "Pineapple Brown Sugar Glazed Ham"


}

var dinner_menu =
{

//Please do not altar any text other than the menu directly below in green text.

"Monday" : "Mediterranean Chicken",
"Tuesday" : "Seafood Newburg",
"Wednesday" : "BBQ Beef Brisket",
"Thursday" : "General Tso's Chicken",
"Friday" : "Salisbury Steak",
"Saturday" : "Pork Chops",
"Sunday" : "Spaghetti & Marinara"


}

/////////////////////////////////////////////////////////////////////////
////////////////////// NO TOUCHY////////////////////////////////////////
var date = new Date();
var dayOfWeek = date.toLocaleDateString("en-gb", { weekday: 'long' });

var today = new Date().getHours();
if (today >= 00 && today <= 15) {
   document.getElementById("mainLunchOfTheDay").innerHTML = lunch_menu[dayOfWeek];
} else {
  document.getElementById("mainDinnerOfTheDay").innerHTML = dinner_menu[dayOfWeek];
};
