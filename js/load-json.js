/**
 * Code by "Learn Web Code"
 * https://www.youtube.com/watch?v=wSNa5b1mS5Y
 */

function createHTML(data) {
  var rawTemplate = document.getElementById("template").innerHTML;
  var compileTemplate = Handlebars.compile(rawTemplate);
  var generatedTemplate = compileTemplate(data);
  
  var postsContainer = document.getElementById("ajax");
  postsContainer.innerHTML = generatedTemplate;
}

function toggleListItem() {
  $('input:checked').parent().parent().css( "display", "none" );
}

// var myRequest = JSON.parse(document.getElementById('restaurants').innerHTML);

var myRequest = new XMLHttpRequest();
myRequest.open('GET', 'restaurants.json');

myRequest.onload = function() {
  if (myRequest.status >= 200 && myRequest.status < 400) {
    var data = JSON.parse(myRequest.responseText);
    createHTML(data);
    $("input").on( "click", toggleListItem);

  } else {
    console.log("Connected established, but with error.");
  }
};

myRequest.onerror = function() {
  console.log("Connection Error.");
};

myRequest.send();