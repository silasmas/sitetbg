$(document).ready(function() {
    var owl = $("#slider-carousel");
    owl.owlCarousel({
      items: 4,
      itemsDesktop: [1000, 4],
      itemsDesktopSmall: [900, 2],
      itemsTablet: [600, 1],
      itemsMobile: false,
      pagination: false
    });
    $(".next").click(function() {
      owl.trigger('owl.next');
    })
    $(".prev").click(function() {
      owl.trigger('owl.prev');
    })
  });

  $(document).ready(function() {
    var owl = $("#slider-carousels");
    owl.owlCarousel({
      items: 5,
      itemsDesktop: [1000, 4],
      itemsDesktopSmall: [900, 2],
      itemsTablet: [600, 1],
      itemsMobile: false,
      pagination: false,
      autoPlay: true
    });
    $(".next").click(function() {
      owl.trigger('owl.next');
    })
    $(".prev").click(function() {
      owl.trigger('owl.prev');
    })
  });
