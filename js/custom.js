jQuery(function ($) {
    var target = $('a[name=target]');

    if (target.length > 0) {
        target.click(function () {
            var top = target.offset().top;
            console.log('top', top);
            top = top + 400;
            console.log('top', top);
            $('html,body').animate({ scrollTop: top }, 1000);
            return false;
        });
    }

    $(document).ready(function () {
        $("#timeline-navigation li:last-child a").click();
        $("#timeline-years li:last-child a").click();
    });
});

let menu = document.getElementById('masthead');
let offset = document.getElementById("section-home-intro").offsetHeight - 300;

window.addEventListener("load", (event) => {
    menuFixed();
});

window.onscroll = function () {
    menuFixed();
}

function menuFixed() {
    if (window.scrollY > offset - 10) {
        menu.classList.add("fixed-top");
        menu.classList.remove("hide");
    } else if (window.scrollY < offset - 20) {
        menu.classList.remove("fixed-top");
        menu.classList.add("hide");
    }
}

function timelineYearCheck() {
    $("#timeline-years li:last-child a").click();
    $("#timeline-navigation li:last-child a").click();
}