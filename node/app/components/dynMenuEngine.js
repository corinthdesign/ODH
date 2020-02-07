export function getMeal() {

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

};
