$(document).ready(function () {
  $(".loader-container").fadeOut();
});

$(".steps-container .step1").css({ borderBottom: "1px solid #027838" });
$(".steps-container .step1 .inner-box").css({
  color: "white",
  backgroundColor: "#027838",
});

function go_to_step2() {
  $(".steps-container .step2").css({ borderBottom: "1px solid #027838" });
  $(".steps-container .step2 .inner-box").css({
    color: "white",
    backgroundColor: "#027838",
  });

  $(".steps-container .step1").css({ borderBottom: "none" });
  $(".steps-container .step1 .inner-box").css({
    color: "grey",
    backgroundColor: "#eee",
  });
}

function go_to_step1() {
  $(".steps-container .step1").css({ borderBottom: "1px solid #027838" });
  $(".steps-container .step1 .inner-box").css({
    color: "white",
    backgroundColor: "#027838",
  });

  $(".steps-container .step2").css({ borderBottom: "none" });
  $(".steps-container .step2 .inner-box").css({
    color: "grey",
    backgroundColor: "#eee",
  });
}

$(".continue-btn").click(function () {
  go_to_step2();
  $(".step2-container").slideDown();
  $(".step1-container").slideUp();
});

$(".back-btn").click(function () {
  go_to_step1();
  $(".step1-container").slideDown();
  $(".step2-container").slideUp();
});
