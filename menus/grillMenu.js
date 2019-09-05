var menu = [




//Please do not altar any text other than the menu directly below.
//In order for each menu item to properly display,
//please put each item in quotations. ex. "Cheese Pizza"
//Each item must be followed with a comma, except for the last item



  "Cheese Burgers",
  "Hot Dogs",
  "Quesadillas",
  //Daily Special//
  "Philly Cheese Steaks"










]


function pizzaUpdate() {
   menu[3] = (document.getElementById("pizzaSpecial").value);
   console.log(menu); //to confirm it has been added to the array
}
