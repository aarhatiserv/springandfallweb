$(".open").click(function () {
  var container = $(this).parents(".topic");
  var answer = container.find(".answer");
  var trigger = container.find(".faq-t");

  answer.slideToggle(200);

  if (trigger.hasClass("faq-o")) {
    trigger.removeClass("faq-o");
  } else {
    trigger.addClass("faq-o");
  }

  if (container.hasClass("expanded")) {
    container.removeClass("expanded");
  } else {
    container.addClass("expanded");
  }
});

$(".open2").click(function () {
  var container = $(this).parents(".topic2");
  var answer = container.find(".answer2");
  var trigger = container.find(".faq-t2");

  answer.slideToggle(200);

  if (trigger.hasClass("faq-o2")) {
    trigger.removeClass("faq-o2");
  } else {
    trigger.addClass("faq-o2");
  }

  if (container.hasClass("expanded2")) {
    container.removeClass("expanded2");
  } else {
    container.addClass("expanded2");
  }
});
