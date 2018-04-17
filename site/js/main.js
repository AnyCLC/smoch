/**
 * Make the Navigation stick to the top of the window, not of the page.
 * The sticky navigation is as wide as the "headwrapper".
 */
function stickyNavi() {
	var scroll = window.pageYOffset;
	var nav    = document.getElementById("navwrapper");
        // make it the same width as the headwrapper
        
	if (scroll >= nav.offsetTop) {
		// make it sticky:
		nav.classList.add("stickyNav");
		
	} else {
		nav.classList.remove("stickyNav");
	}
        var headwrapper = document.getElementById('headwrapper');
	var width       = headwrapper.offsetWidth;
        nav.style["width"] = width + "px";
}

// Use if user scrolls or changes window size:
window.addEventListener('load', () => { stickyNavi(); });
window.addEventListener('scroll', () => { stickyNavi(); });
window.addEventListener('resize', () => { stickyNavi(); });
