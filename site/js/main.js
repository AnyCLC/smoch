/**
 * Make the Navigation stick to the top of the window, not of the page.
 * The sticky navigation is as wide as the "headwrapper".
 */
var navTopDistance = 0;
function setTopDistance() {
    navTopDistance = document.getElementById("navwrapper").offsetTop;
}


function stickyNavi() {
	var scroll = window.pageYOffset;
	var nav    = document.getElementById("navwrapper");
	if (scroll > navTopDistance) {
		// make it sticky:
		nav.classList.add("stickyNav");
	} else {
		nav.classList.remove("stickyNav");
	}
	// make it the same width as the headwrapper
	var headwrapper    = document.getElementById('headwrapper');
	var width          = headwrapper.offsetWidth;
	nav.style["width"] = width + "px";
}

// Use if user scrolls or changes window size:
window.addEventListener('scroll', () => { stickyNavi(); });
window.addEventListener('resize', () => { setTopDistance(); stickyNavi(); });
window.addEventListener('load'  , () => { setTopDistance();});
