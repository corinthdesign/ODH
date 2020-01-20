function getMeal() {

let i = new Date();
let d = i.getDay();
let h = i.getHours();

function meal() {
        if (d >= 1 && d <= 5 && h < 11 ) {
  return "Breakfast";
  }
  else if (d >= 1 && d <= 5 && h >= 11 && h <= 15){
  return "Lunch"
  }
  else if (h > 15){
  return "Dinner"
  }
  else if (d === 6 && h <= 15){
  return ("Brunch")
  }
  else if (d === 0 && h <= 15){
  return ("Brunch")
  }
  else {
  return "Meal not found"
  }
}

return meal();
};

console.log("Meal: " + getMeal());
let main = document.getElementById('target');
main.className = 'background main' + getMeal();

let chefs = document.getElementById('target');
chefs.className = 'background chefs' + getMeal();
