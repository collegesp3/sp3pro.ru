let oldScrollTopPosition = 0;
var scroll = 0;
window.onscroll = onScroll;
function onScroll() {
  var top = window.pageYOffset;
  if (scroll > top) {
    document.getElementById("header_menu").style.display = "";
    //document.getElementById("header_menu").style.transition = "all 1,5s";
  } else if (scroll < top) {
    document.getElementById("header_menu").style.display = "none";
    //document.getElementById("header_menu").style.transition = "all 1,5s";
  }
  scroll = top;
}