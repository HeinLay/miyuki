$(document).ready(function () {
  if (window.matchMedia('(min-width: 1024.9px)').matches) {
    $('.dropdown-nav').hover(function () {
      $(this).children('ul').stop(true, false, true).slideToggle(700);
    });
  }
  else {
    $('.dropdown-nav').click(function () {
      $(this).find('a').toggleClass('open');
      $(this).children('ul').slideToggle(700);
    });
  }
});