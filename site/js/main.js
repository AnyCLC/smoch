/**
 * Make the Navigation stick to the top of the window, not of the page.
 * The sticky navigation is as wide as the "headwrapper".
 */
function stickyNavi() {
	var scroll = window.pageYOffset;
	var nav    = document.getElementById("navwrapper");
	if (scroll > nav.offsetTop) {
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
