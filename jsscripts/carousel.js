var str = document.getElementById("roles");
var i = 0;
var isRemoving = false;

var messages = [
    "Web Developer.",
    "Game Developer.",
    "Software Engineer.",
    "Computer Scientist."
]

function action() {
  if (isRemoving) {
    if (str.innerText.length > 0) {
      str.innerText = str.innerText.substr(0, str.innerHTML.length - 1);
      setTimeout( action, 100 );
      return;
    }
    isRemoving = false;
    i++;
    if (i >= messages.length) {
      i = 0;
    }
    setTimeout( action, 100 );
    return;
  }
  var message = messages[i];
  str.innerText = message.substr(0, str.innerHTML.length + 1);
  if (str.innerText.length === message.length) {
    isRemoving = true;
  }
  setTimeout( action, isRemoving ? 1600 : 100 );
}

setTimeout( action, 200 ) ;