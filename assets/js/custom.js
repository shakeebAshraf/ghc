jQuery(function ($) {
  $(".cta-button").click(() => {
    window.location.href = window.location.origin + "/impressum/";
  });
});

$('#accordion').find('button').click(function () {
  $current = $(this).find('svg');
  $current.toggleClass('fa-angle-up fa-angle-down');
  $('#accordion').find('svg').not($current).removeClass('fa-angle-up').addClass('fa-angle-down');
});

$('.navbar-nav').find('.dropdown').hover(
  function () {
    $(this).find('.dropdown-menu').addClass('show');
  }, function () {
    $(this).find('.dropdown-menu').removeClass('show');
  })
