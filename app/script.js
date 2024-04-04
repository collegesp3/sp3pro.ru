let oldScrollTopPosition = 0;
var scroll = 0;
window.onscroll = onScroll;
function onScroll() {
  var top = window.pageYOffset;
  if (scroll > top) {
    document.getElementById("header_menu").style.top = "-15px";
  } else if (scroll < top) {
    document.getElementById("header_menu").style.top = "-150px";
  }
  scroll = top;
}