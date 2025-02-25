jQuery(function ($) {
    var target = $('a[name=target]');

    if (target.length > 0) { 
        target.click(function () {
            var top = target.offset().top;
            top = top + 400;
            $('html,body').animate({ scrollTop: top }, 1000);
            return false;
        });
    }

    $(document).ready(function () {
        $("#timeline-navigation li:last-child a").click();
        $("#timeline-years li:last-child a").click();
        
        loadDarkTheme();
        toggleSwitchDarkLightTheme();
        clickMenuFull();

        $('.nav-link').on('click', function() {
            console.log('click', $(this).prop('href').split('#')[1]);
            $('body').toggleClass('menu-fullscreen');
        });
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
            document.documentElement.classList.toggle("dark-theme");
            hasClicked = $('html').hasClass('dark-theme');
            sessionStorage.setItem('dark-theme', hasClicked);
        });
    }

    function loadDarkTheme() {
        let hasClicked = sessionStorage.getItem('dark-theme');
        if(hasClicked == 'true') {
            $('html').addClass('dark-theme');
            document.getElementById("btn-dark-light-checkbox").click();
        }else{
            $('html').removeClass('dark-theme');
        }
    }
});

let menu = document.getElementById('masthead');
let offset = document.getElementById("section-home-intro").offsetHeight - 70;

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

function toggleSwitchDarkLightTheme() {
    const checkboxToggle = document.getElementById("btn-dark-light-checkbox");
    checkboxToggle.addEventListener("click", () => {
        console.log('check switch');
        document.body.classList.toggle("dark-theme");
    });
}
