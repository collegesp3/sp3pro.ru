let button = document.querySelector("#first-block button");
let content = document.querySelector("#first-block .spoiler");
let i = 0;

button.addEventListener("click", function(){
	if (i) {
		content.style.display = "none";
		button.innerText = "+";
		i --;
	} else {
		content.style.display = "block";
		button.innerText = "-";
		i ++;
	}
});

