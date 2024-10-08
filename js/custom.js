jQuery(function ($) {
    var target = $('a[name=target]');

<<<<<<< HEAD
    if (target.length > 0) { 
=======
    if (target.length > 0) {
>>>>>>> 51475f252e7ad2a9e26ffb36349b344792d747ab
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
<<<<<<< HEAD
        loadDarkTheme();
        toggleSwitchDarkLightTheme();
        clickMenuFull();

    });


    function clickMenuFull () {
        $('.btn-menu-hamburguer').on('click', function() {
            $('body').toggleClass('menu-fullscreen');
        });
    }

    function toggleSwitchDarkLightTheme() {
        const checkboxToggle = document.getElementById("btn-dark-light-checkbox");
        let hasClicked;
        checkboxToggle.addEventListener("click", () => {
            document.body.classList.toggle("dark-theme");
            hasClicked = $('body').hasClass('dark-theme');
            console.log('check switch', hasClicked);
            sessionStorage.setItem('dark-theme', hasClicked);
        });
    }

    function loadDarkTheme() {
        let hasClicked = sessionStorage.getItem('dark-theme');
        if(hasClicked == 'true') {
            $('body').addClass('dark-theme');
            document.getElementById("btn-dark-light-checkbox").click();
        }else{
            $('body').removeClass('dark-theme');
        }
    }
=======
        toggleSwitchDarkLightTheme();
    });
>>>>>>> 51475f252e7ad2a9e26ffb36349b344792d747ab
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
<<<<<<< HEAD
=======

function toggleSwitchDarkLightTheme() {
    const checkboxToggle = document.getElementById("btn-dark-light-checkbox");
    checkboxToggle.addEventListener("click", () => {
        console.log('check switch');
        document.body.classList.toggle("dark-theme");
    });
}
>>>>>>> 51475f252e7ad2a9e26ffb36349b344792d747ab
