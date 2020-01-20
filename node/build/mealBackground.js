function getMeal() {

let i = new Date();
let d = i.getDay();
let h = i.getHours();

function meal() {
        if (d >= 1 && d <= 5 && h < 11 ) {
  return "breakfast";
  }
  else if (d >= 1 && d <= 5 && h >= 11 && h <= 15){
  return "lunch"
  }
  else if (h > 15){
  return "dinner"
  }
  else if (d === 6 && h <= 15){
  return ("brunch")
  }
  else if (d === 0 && h <= 15){
  return ("brunch")
  }
  else {
  return "Meal not found"
  }
}
console.log("Meal: " + meal());
const main = document.getElementByClassName('main');
const chefs = document.getElementByClassName('chefs');
main.classList.add('main' + meal());
chefs.classList.add('chefs' + meal());
};
