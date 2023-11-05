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
    let offset = document.getElementById("section-home-intro").offsetHeight - 200;
    window.onscroll = function() {
        if (window.scrollY > offset-10) {
            menu.classList.add("fixed-top");
            menu.classList.remove("hide");
        } else if(window.scrollY < offset-20) {
            menu.classList.remove("fixed-top");
            menu.classList.add("hide");
        }
    }
    console.log("page is fully loaded", offset);
});
