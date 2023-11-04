jQuery(function ($) {

    $('a[href=#target]').
        click(function () {
            var target = $('a[name=target]');
            if (target.length) {
                var top = target.offset().top;
                $('html,body').animate({ scrollTop: top }, 2000);
                return false;
            }
        });
});

window.addEventListener("load", (event) => {
    let menu = document.getElementById('masthead');
    let offset = document.getElementById("section-home-intro").offsetHeight;
    window.onscroll = function() {
        if (window.scrollY > offset-10) {
            menu.classList.add("fixed-top");
        } else if(window.scrollY < offset-20) {
            menu.classList.remove("fixed-top");
        }
    }
    console.log("page is fully loaded", offset);
});
