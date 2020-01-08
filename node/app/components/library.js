export function image(url){ 
  if  (url === "") {
    return "images/blank.png";
  } else {
    return ["images/", url].join('');
  }
}
