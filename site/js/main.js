
function stickyNavi() {
    var scroll = window.pageYOffset;
    var nav = document.getElementsByClassName("navwrapper")[0];
    if (scroll > nav.offsetTop) {
        nav.classList.add("sticky");
    } else {
        nav.classList.remove("sticky");
    }
}
