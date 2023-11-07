jQuery(function ($) {
    var target = $('a[name=target]');
    console.log('target', $('a[href=#target]'));
    console.log('target', target);

    if(target.length > 0) {
        target.click(function () {
            console.log('click');
            var top = target.offset().top;
            console.log('top', top);
            top = top + 300;
            console.log('top', top);
            $('html,body').animate({ scrollTop: top }, 1000);
            return false;
        });
    }

    
});

window.addEventListener("load", (event) => {
    let menu = document.getElementById('masthead');
    let offset = document.getElementById("section-home-intro").offsetHeight - 300;
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
