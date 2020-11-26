// const swipeableElement = document.querySelector(".main-head");

// swipeableElement.addEventListener("touchstart", handleTouchStart, false);
// swipeableElement.addEventListener("touchmove", handleTouchMove, false);

const swipeableElements = document.querySelectorAll(
  "body section:not(.no__swipe)"
);

swipeableElements.forEach((swipeableElement) => {
  swipeableElement.addEventListener("touchstart", handleTouchStart, false);
  swipeableElement.addEventListener("touchmove", handleTouchMove, false);
});

var xDown = null;
var yDown = null;

function getTouches(evt) {
  return (
    evt.touches || // browser API
    evt.originalEvent.touches
  ); // jQuery
}

function handleTouchStart(evt) {
  const firstTouch = getTouches(evt)[0];
  xDown = firstTouch.clientX;
  yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }

  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;

  var xDiff = xDown - xUp;
  var yDiff = yDown - yUp;

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    /*most significant*/
    if (xDiff > 0) {
      /* left swipe || close sidebar */
      $("body").removeClass("overlay");
      $(".main-nav").animate({ left: "-290px" }, 150);
      $("body").animate({ left: "0px" }, 150);
    } else {
      /* right swipe || open sidebar */
      $("body").addClass("overlay");
      $(".main-nav").animate({ left: "0px" }, 150);
      $("body").animate({ left: "250px" }, 150);
    }
  } else {
    if (yDiff > 0) {
      /* up swipe */
      console.log("swipe up");
    } else {
      /* down swipe */
      console.log("swipe down");
    }
  }
  /* reset values */
  xDown = null;
  yDown = null;
}

// close side menu when clicked outside
$(document).click(function (event) {
  if (
    !$(event.target).closest(".top-menu-bar").length &&
    !$(event.target).is(".top-menu-bar")
  ) {
    $("body").removeClass("overlay");
    $(".main-nav").animate({ left: "-290px" }, 300);
    $("body").animate({ left: "0px" }, 300);
  }
});

$(document).ready(function () {
  $(".main-slide").slick({
    autoplay: true,
    asNavFor: ".slider-thumb",
    autoplaySpeed: 7000,
    speed: 1000,
  });

  $(".slider-thumb").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    asNavFor: ".main-slide",
    dots: false,
    centerMode: false,
    focusOnSelect: true,
  });

  // turn off video once modal is closed
  $(".modal").on("hide.bs.modal", function () {
    var memory = $(this).html();
    $(this).html(memory);
  });

  // form triggers starts
  $(".trigger").click(function () {
    $(".home_appointment_form").toggleClass("open");
    $(".page-wrapper").toggleClass("blur");
    return false;
  });

  $(".book__modal_trigger").click(function () {
    $(".astrologer_book_form.modal-wrapper").toggleClass("open");
    $(".page-wrapper").toggleClass("blur");
    return false;
  });

  $(".service__book_trigger").click(function () {
    $(".service_book_form.modal-wrapper").toggleClass("open");
    $(".page-wrapper").toggleClass("blur");
    return false;
  });

  $(".service_rate__modal_trigger").click(function () {
    $(".service_rate_book_form.modal-wrapper").toggleClass("open");
    $(".page-wrapper").toggleClass("blur");
    return false;
  });

  $(".tour__book_trigger").click(function () {
    $(".tour_book_form.modal-wrapper").toggleClass("open");
    $(".page-wrapper").toggleClass("blur");
    return false;
  });

  $(".enquiry__book_trigger").click(function () {
    $(".enquiry_book_form.modal-wrapper").toggleClass("open");
    $(".page-wrapper").toggleClass("blur");
    return false;
  });

  // form triggers ends
});

// main pull menu //

var main = function () {
  $(".top-menu-bar").click(function () {
    $("body").addClass("overlay");

    $(".main-nav").animate({ left: "0px" }, 300);
    $("body").animate({ left: "250px" }, 300);
  });
  $(".close-btn").click(function () {
    $("body").removeClass("overlay");

    $(".main-nav").animate({ left: "-290px" }, 300);
    $("body").animate({ left: "0px" }, 300);
  });
};

$(document).ready(main);

// scroll to top //
var btn = $("#button");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, 2000);
});

$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 140) {
      $(".main-head").addClass("sticky");
    } else {
      $(".main-head").removeClass("sticky");
    }
  });
});

$(document).ready(function () {
  $(".main-nav ul li a").click(function () {
    var link = $(this);
    var closest_ul = link.closest("ul");
    var parallel_active_links = closest_ul.find(".active");
    var closest_li = link.closest("li");
    var link_status = closest_li.hasClass("active");
    var count = 0;
    console.log("clicked");
    closest_ul.find("ul").slideUp(function () {
      if (++count == closest_ul.find("ul").length)
        parallel_active_links.removeClass("active");
    });

    if (!link_status) {
      closest_li.children("ul").slideDown();
      closest_li.addClass("active");
    }
  });
});

// fixed to top when pull
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    // show
    document.querySelector(".main-head").style.top = "0";
    $(".book-btn")
      .removeClass("hide__booking_btn")
      .addClass("show__booking_btn");
  } else {
    // hide
    document.querySelector(".main-head").style.top = "-100px";
    $(".book-btn")
      .removeClass("show__booking_btn")
      .addClass("hide__booking_btn");
  }
  prevScrollpos = currentScrollPos;
};

$(".inner__itinary__content__text table").wrap(
  "<div class='overflow__x--auto'></div>"
);

// toggling view password starts
const EYES = document.querySelectorAll(".show__eye");

EYES.forEach((eye, index) => {
  $(eye).click(function (e) {
    const passwordInput = $(eye).prev(".show__password");
    toggleAttrPassword(passwordInput, eye);
  });
});

function toggleAttrPassword(passwordSelector, iconSelector) {
  $(passwordSelector).attr("type", function (index, attr) {
    if (attr == "password") {
      $(passwordSelector).attr("type", "text");
      $(iconSelector).removeClass("fa-eye").addClass("fa-eye-slash");
    } else {
      $(passwordSelector).attr("type", "password");
      $(iconSelector).removeClass("fa-eye-slash").addClass("fa-eye");
    }
  });
}

// toggling view password ends

// reset search starts

$(".reset__search").click(function () {
  $(".province__option").val("");
  $(".astrologer__search").val("");
});

// reset search ends

//   gallery popup script starts
$(document).ready(function () {
  $(".gal-detail-link").magnificPopup({
    type: "image",
    mainClass: "mfp-with-zoom",
    gallery: {
      enabled: true,
    },
    zoom: {
      enabled: true,
      duration: 300, // duration of the effect, in milliseconds
      easing: "ease-in-out", // CSS transition easing function

      opener: function (openerElement) {
        return openerElement.is("img")
          ? openerElement
          : openerElement.find("img");
      },
    },
  });
});
//   gallery popup script ends

// international phone with country flag

$("#mobile-number").intlTelInput();
$(".international__contact").intlTelInput();
$("#appointment_contact_number").intlTelInput();

$(".ask__question").click(function () {
  $(this).addClass("d-none");
  $(".list__question").removeClass("d-none");
});

$(".payment__wallet").change(function (e) {
  console.log(e.target.value);
  e.target.value
    ? $(".payment__button").removeAttr("disabled")
    : $(".payment__button").attr("disabled", "disabled");
});

// tour detail accordain
$(document).ready(function () {
  $(".set > button").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).siblings(".itinary__content").slideUp(200);
      $(".set > button i").removeClass("fa-minus").addClass("fa-plus");
    } else {
      $(".set > button i").removeClass("fa-minus").addClass("fa-plus");
      $(this).find("i").removeClass("fa-plus").addClass("fa-minus");
      $(".set > button").removeClass("active");
      $(this).addClass("active");
      $(".itinary__content").slideUp(200);
      $(this).siblings(".itinary__content").slideDown(200);
    }
  });
});

var cost = 250;

var minutesPerCost = 300;

// clicking plus
$(".service__plus").click(function (e) {
  e.preventDefault();
  plusValue = parseInt($(this).prev(".qty-input").val());
  value = isNaN(plusValue) ? 0 : plusValue;
  value++;
  $(this).prev(".qty-input").val(value);
  $(".service__payment").attr("data-priest", value);
  var add_cost = $(this)
    .parent("div")
    .parent("div")
    .next("span.service__cost")
    .text(`$${cost * value}`);
});

$(".astro__plus").click(function (e) {
  e.preventDefault();
  plusValue = parseInt($(this).prev(".qty-input").val());
  value = isNaN(plusValue) ? 0 : plusValue;
  value += 30;
  $(this).prev(".qty-input").val(value);
  var add_cost = $(this)
    .parent("div")
    .parent("div")
    .next("span.priest__cost")
    .text(`$${(minutesPerCost / 30) * value}`);
});

// clicking minus

$(".service__minus").click(function (e) {
  e.preventDefault();
  value = parseInt($(this).next(".qty-input").val(), 10);
  value = isNaN(value) ? 1 : value;
  if (value == 1) {
    return;
  } else {
    value--;
  }
  $(this).next(".qty-input").val(value);
  $(".service__payment").attr("data-priest", value);
  var prevCost = $("span.service__cost").text().split("$")[1];
  console.log(prevCost, cost);
  var reduce_cost = $(this)
    .parent("div")
    .parent("div")
    .next("span.service__cost")
    .text(`$${prevCost - cost}`);
});

$(".astro__minus").click(function (e) {
  e.preventDefault();
  value = parseInt($(this).next(".qty-input").val(), 10);
  value = isNaN(value) ? 1 : value;
  if (value == 30) {
    return;
  } else {
    value -= 30;
  }
  $(this).next(".qty-input").val(value);
  var prevCost = $("span.priest__cost").text().split("$")[1];
  var reduce_cost = $(this)
    .parent("div")
    .parent("div")
    .next("span.priest__cost")
    .text(`$${prevCost - 300}`);
});

// select amount in donate form starts

// if other amount changes then set that value in amount which is in payment step
$(".other__amount input").on("change", function (e) {
  $("span.donated__amount").text(`$${e.target.value}`);
});

$(".select_amount").on("click", function () {
  // uncheck amount from other amount section
  $(".display_front")
    .removeClass("selected_amount")
    .find(".fa")
    .removeClass("fa-check");

  // find the checkbox of selected amount and turn on check
  $(this)
    .find(".display_front")
    .addClass("selected_amount")
    .prepend('<i class="fa fa-check"></i>');

  const donatedAmount = $(this).find("input").val();

  // clear other amount value
  $(".other__amount input").val("");

  $("span.donated__amount").text(`$${donatedAmount}`);
});

$(".select_amount")
  .find("input[type=text]")
  .keyup(function () {
    $(".display_front")
      .removeClass("selected_amount")
      .find(".fa")
      .removeClass("fa-check");
    $(this).parent("div.select_amount").addClass("selected_amount");
  });
preventAlph($(".select_amount").find("input[type=text]"));

function preventAlph(id) {
  $(id).keypress(function (event) {
    if ((event.which != 46) != -1 && (event.which < 48 || event.which > 57)) {
      event.preventDefault();
    }
  });
}

// select amount in donate form ends

// multi step form starts
$(document).ready(function () {
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;

  setProgressBar(current);

  $(".next").click(function () {
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          next_fs.css({ opacity: opacity });
        },
        duration: 500,
      }
    );
    setProgressBar(++current);
  });

  $(".previous").click(function () {
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li")
      .eq($("fieldset").index(current_fs))
      .removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          previous_fs.css({ opacity: opacity });
        },
        duration: 500,
      }
    );
    setProgressBar(--current);
  });

  function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar").css("width", percent + "%");
  }

  $(".submit").click(function () {
    return false;
  });
});

// Show description if donation_for is planetary in donate page
$(".donation_for").change(function (e) {
  if (e.target.value == "planetary-donation") {
    $(".show_donation__description").removeClass("d-none");
  } else {
    $(".show_donation__description").addClass("d-none");
  }
});

// multi step form ends

// clock initialize
// var s, t;
// s = document.createElement("script");
// s.type = "text/javascript";
// s.src = "//cdn.dayspedia.com/js/dwidget.min.vef6161ef.js";
// t = document.getElementsByTagName("script")[0];
// t.parentNode.insertBefore(s, t);
// s.onload = function () {
//   window.dwidget = new window.DigitClock();
//   window.dwidget.init("dayspedia_widget_3df09583bc5bee10");
// };
