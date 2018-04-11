
function stickyNavi() {
    var scroll = window.pageYOffset;
    var nav = document.getElementById("navwrapper");
    if (scroll > nav.offsetTop) {
        nav.classList.add("sticky");
    } else {
        nav.classList.remove("sticky");
    }
}
