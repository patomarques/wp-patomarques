jQuery(function ($) {
  $(document).ready(function () {
    let target = document.querySelector("a[name=target]");

    if (target.length > 0) {
      target.addEventListener("click", function () {
        let top = target.offset().top;
        $("html,body").animate({ scrollTop: top }, 1000);
        return false;
      });
    }

    $("#timeline-navigation li:last-child a").click();
    $("#timeline-years li:last-child a").click();

    loadDarkTheme();
    toggleSwitchDarkLightTheme();
    clickMenuFull();

    $(".nav-link").on("click", function () {
      $("body").toggleClass("menu-fullscreen");
    });

    //scrollToSection(".btn-scroll-down", "#about");
  });

  function scrollToSection(buttonClass, sectionClass) {
    const btn = document.querySelector(buttonClass);
    const section = document.querySelector(sectionClass);
    btn.addEventListener("click", function () {
      section.scrollIntoView({ behavior: "smooth" });
    });
  }

  function clickMenuFull() {
    $(".btn-menu-hamburguer").on("click", function () {
      $("body").toggleClass("menu-fullscreen");
    });
  }

  function toggleSwitchDarkLightTheme() {
    const checkboxToggle = document.getElementById("btn-dark-light-checkbox");
    let hasClicked;
    checkboxToggle.addEventListener("click", () => {
      document.documentElement.classList.toggle("dark-theme");
      hasClicked = $("html").hasClass("dark-theme");
      sessionStorage.setItem("dark-theme", hasClicked);
    });
  }

  function loadDarkTheme() {
    let hasClicked = sessionStorage.getItem("dark-theme");
    if (hasClicked == "true") {
      $("html").addClass("dark-theme");
      document.getElementById("btn-dark-light-checkbox").click();
    } else {
      $("html").removeClass("dark-theme");
    }
  }
});

function isMenuFixed() {
  const menu = document.getElementById("masthead");
  const offset = document.getElementById("section-home-intro").offsetHeight - 10;
  let distanceTop = document.body.scrollTop;

  if (distanceTop > offset) {
    menu.classList.add("fixed-top");
    menu.classList.remove("hide");
  } else {
    menu.classList.remove("fixed-top");
    menu.classList.add("hide");
  }
}

document.body.addEventListener("scroll", () => {
  isMenuFixed();
});

window.addEventListener("load", (event) => {
  isMenuFixed();
});

function timelineYearCheck() {
  $("#timeline-years li:last-child a").click();
  $("#timeline-navigation li:last-child a").click();
}

function toggleSwitchDarkLightTheme() {
  const checkboxToggle = document.getElementById("btn-dark-light-checkbox");
  checkboxToggle.addEventListener("click", () => {
    document.body.classList.toggle("dark-theme");
  });
}
