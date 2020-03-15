function openNav() {
	var x = document.getElementById("sidepnl");
	x.style.boxShadow = "0px 8px 16px 8px rgba(0, 0, 0, 0.8)";
	x.style.right = "0px";
}

function closeNav() {
	var x = document.getElementById("sidepnl");
	x.style.boxShadow = "0px 8px 16px 8px rgba(0, 0, 0, 0)";
	x.style.right = -x.getBoundingClientRect().width + "px";
} 