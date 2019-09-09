// When the user scrolls the page, execute fixNavBar
window.onscroll = function() {fixNavBar()};

// Get the navbar
var interactivNav = document.querySelector(".interactivNav");

// Add the class to the navbar when you reach the scroll position. Remove it when you leave the scroll position
function fixNavBar() {
  if (window.pageYOffset > 120) {
    interactivNav.classList.remove("interactivNav");
    interactivNav.classList.add("fixedNav");
  } else {
    interactivNav.classList.remove("fixedNav");
    interactivNav.classList.add("interactivNav");
  }
}
