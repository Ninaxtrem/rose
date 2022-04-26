$(document).ready(function () {
    $('.slide').slick({
        "setting-name": "setting-value"
    });
});

$('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });

  $('.slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 3,
    autoplay: true,
  autoplaySpeed: 5000,
  });
