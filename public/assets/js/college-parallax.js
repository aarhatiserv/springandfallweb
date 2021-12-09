function EasyPeasyParallaxCollege() {
  scrollPos = $(this).scrollTop();
  $("#collegeBanner").css({
    "background-position": "50% " + -scrollPos / 4 + "px",
  });
  $("#collegeBannerText").css({
    "margin-top": scrollPos / 4 + "px",
    opacity: 1 - scrollPos / 250,
  });
}
$(document).ready(function () {
  $(window).scroll(function () {
    EasyPeasyParallaxCollege();
  });
});
