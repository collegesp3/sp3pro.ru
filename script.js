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

const openOlderNews = function(){
  let posit = document.querySelector("#wrappNews_position").value;
  let output = document.querySelector(".wrappNews");
  let xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      output.innerHTML = this.responseText;
    }
  }
  xmlhttp.open("GET", "php/getNews.php?pos=" + posit, true);
  xmlhttp.send();
}