
//PIZZA MENU FOR ODH


var menu = [

//Please do not altar any text other than the menu directly below
//In order for each menu item to properly display,
//please put each item in quotations. ex. "Cheese Pizza"
//Each item must be followed with a comma, except for the last item


//Monday Lunch and Dinner

  "Cheese Pizza",
  "Pepperoni Pizza",
  "Sausage Pizza",
  //Daily Special//
  "Taco Pizza"



]

var menu_tuesday = [

  //Please do not altar any text other than the menu directly below
  //In order for each menu item to properly display,
  //please put each item in quotations. ex. "Cheese Pizza"
  //Each item must be followed with a comma, except for the last item


  //Tuesday Lunch and Dinner

    "Cheese Pizza",
    "Pepperoni Pizza",
    "Sausage Pizza",
    //Daily Special//
    "Veggie Pizza"



]


var menu_wednesday = [

  //Please do not altar any text other than the menu directly below
  //In order for each menu item to properly display,
  //please put each item in quotations. ex. "Cheese Pizza"
  //Each item must be followed with a comma, except for the last item


  //Wednesday Lunch and Dinner

    "Cheese Pizza",
    "Pepperoni Pizza",
    "Sausage Pizza",
    //Daily Special//
    "Veggie Pizza"


]

var menu_thursday = [

  //Please do not altar any text other than the menu directly below
  //In order for each menu item to properly display,
  //please put each item in quotations. ex. "Cheese Pizza"
  //Each item must be followed with a comma, except for the last item


  //Thursday Lunch and Dinner

    "Cheese Pizza",
    "Pepperoni Pizza",
    "Sausage Pizza",
    //Daily Special//
    "Veggie Pizza"


]

var menu_friday = [

  //Please do not altar any text other than the menu directly below
  //In order for each menu item to properly display,
  //please put each item in quotations. ex. "Cheese Pizza"
  //Each item must be followed with a comma, except for the last item


  //Friday Lunch and Dinner

    "Cheese Pizza",
    "Pepperoni Pizza",
    "Sausage Pizza",
    //Daily Special//
    "Veggie Pizza"


]

var menu_saturday = [

  //Please do not altar any text other than the menu directly below
  //In order for each menu item to properly display,
  //please put each item in quotations. ex. "Cheese Pizza"
  //Each item must be followed with a comma, except for the last item


  //Saturday Lunch and Dinner

    "Cheese Pizza",
    "Pepperoni Pizza",
    "Sausage Pizza",
    //Daily Special//
    "Veggie Pizza"



]

var menu_sunday = [

  //Please do not altar any text other than the menu directly below
  //In order for each menu item to properly display,
  //please put each item in quotations. ex. "Cheese Pizza"
  //Each item must be followed with a comma, except for the last item


  //Sunday Lunch and Dinner

    "Cheese Pizza",
    "Pepperoni Pizza",
    "Sausage Pizza",
    //Daily Special//
    "Veggie Pizza"



]

function pizzaUpdate() {
   menu_monday[3] = (document.getElementById("pizzaSpecial").value);
   menu_tuesday[3] = (document.getElementById("pizzaSpecial").value);
   menu_wednesday[3] = (document.getElementById("pizzaSpecial").value);
   menu_thursday[3] = (document.getElementById("pizzaSpecial").value);
   menu_friday[3] = (document.getElementById("pizzaSpecial").value);
   menu_saturday[3] = (document.getElementById("pizzaSpecial").value);
   menu_sunday[3] = (document.getElementById("pizzaSpecial").value);
   console.log(menu); //to confirm it has been added to the array
}
