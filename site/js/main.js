/**
 * Make the Navigation stick to the top of the window, not of the page.
 * The sticky navigation is as wide as the "headwrapper".
 */
var navTopDistance = 0;
function stickyNavi() {
	var scroll = window.pageYOffset;
	var nav    = document.getElementById("navwrapper");
<<<<<<< HEAD
        // make it the same width as the headwrapper
	if (scroll > navTopDistance) {
=======
	if (scroll > nav.offsetTop) {
>>>>>>> master
		// make it sticky:
		nav.classList.add("stickyNav");
		// make it the same width as the headwrapper
		var headwrapper = document.getElementById('headwrapper');
		var width       = headwrapper.offsetWidth;
		nav.style["width"] = width + "px";
	} else {
		nav.classList.remove("stickyNav");
	}
}
function setTopDistance() {
    navTopDistance = document.getElementById("navwrapper").offsetTop;
}

// Use if user scrolls or changes window size:
window.addEventListener('scroll', () => { stickyNavi(); });
window.addEventListener('resize', () => { setTopDistance(); stickyNavi(); });
