jQuery(function ($) {
  $(document).ready(function () {
    document.getElementById("target").addEventListener("click", function () {
      document.getElementById("about").scrollIntoView({ behavior: "smooth" });
      return false;
    });

    setTimeout(function () {
      $("#timeline-navigation li:last-child a").click();
      $("#timeline-navigation li a").click();
      setTimeout(function () {
        $("#timeline-navigation li a").click();
      }, 500);
      setTimeout(function () {
        $("#timeline-navigation li a").click();
      }, 600);
      setTimeout(function () {
        $("#timeline-navigation li a").click();
      }, 700);

      $("#timeline-years li:last-child a").click();
    }, 1000);

    loadDarkTheme();
    toggleSwitchDarkLightTheme();
    clickMenuFull();
    // timelineNavigation();

    $(".nav-link").on("click", function () {
      $("body").toggleClass("menu-fullscreen");
    });

    loadSlick(".slick-timeline");
  });

  function loadSlick(classElement) {
    const $carousel = $(classElement);

    $carousel.slick({
      infinite: false,
      mobileFirst: true,
      dots: true,
      arrows: true,
      adaptiveHeight: true,
      autoplay: true,
      pauseOnDotsHover: true,
      responsive: [
        {
          breakpoint: 768,
          settings: "unslick",
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            arrows: true,
          },
        },
        {
          breakpoint: 300,
          settings: {
            slidesToShow: 1,
            arrows: true,
            autoplay: true,
          },
        },
      ],
    });

    $carousel.on("init", function (event, slick) {
      const lastIndex = slick.slideCount - 1;
      $carousel.slick("slickGoTo", lastIndex);
    });

    // Caso já tenha sido iniciado antes, forçamos ir ao último
    if ($carousel.hasClass("slick-initialized")) {
      const lastIndex = $carousel.slick("getSlick").slideCount - 1;
      $carousel.slick("slickGoTo", lastIndex);
    }
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

  // function timelineNavigation() {
  //   $("#timeline-navigation a").on("click", function () {
  //     let timelineYears = $("#timeline-years li");
  //     let newIndex = 0;
  //     console.log(timelineYears);

  //     for (let index = 0; index < timelineYears.length; index++) {
  //       if (
  //         timelineYears[index].firstElementChild.classList.contains("selected")
  //       ) {
  //         console.log("esse item ta selecionado no index ", index);

  //         if (this.classList.contains("next")) {
  //           console.log("mapeia toda a lista e clica no numero seguinte");
  //           if(timelineYears.length > (index + 1)){
  //             newIndex = index + 1;
  //           }else {
  //             newIndex = index;
  //           }
  //         } else {
  //           console.log("mapeia toda a lista e clica no numero anterior");
  //           newIndex = index - 1;
  //         }

  //         console.log(newIndex);
  //         timelineYears[newIndex].firstElementChild.click;
  //       }
  //     }
  //   });
  // }
});

function isMenuFixed() {
  const menu = document.getElementById("masthead");
  const offset =
    document.getElementById("section-home-intro").offsetHeight - 10;
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
