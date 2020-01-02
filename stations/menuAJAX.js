import {getMeal} from './dynMenuEngine.js';

export function dynMenu(station) {
$.ajax({
    type: 'POST',
    datatype: 'json',
    url: '/../ODH/php/get-data.php',
    success: function(result) {
        var str = result; //Get-data.php JSON string object
        var parsed = jQuery.parseJSON(str); // Parse the JSON string object to create a JS object
        var data = parsed;
        console.log(parsed);                    // All data for console.log
        console.log(station);
        document.getElementById("demo").innerHTML = parsed[getMeal()][station];
  }
});
};
