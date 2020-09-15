var mobile_header_menu_is_down = false;
$(".dropdown-btn").click(function () {
  if (mobile_header_menu_is_down) {
    $(".mobile-header-container ul").slideUp();
    mobile_header_menu_is_down = false;
  } else {
    $(".mobile-header-container ul").slideDown();
    mobile_header_menu_is_down = true;
  }
});

$(document).ready(function () {
  $(".loader-container").fadeOut();
});
