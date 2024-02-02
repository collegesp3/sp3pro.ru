let oldScrollTopPosition = 0;

var scroll = 0;
window.onscroll = onScroll;
function onScroll() {
  var top = window.pageYOffset;
  if (scroll > top) {
    document.getElementById("header_menu").style.display = "";
  } else if (scroll < top) {
    document.getElementById("header_menu").style.display = "none";
    
  }
  scroll = top;
}

