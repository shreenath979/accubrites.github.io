var owl = $('.service-carousel');
      owl.owlCarousel({
        margin: 30,
        autoplay: true,
        autoplayHoverPause:true,
        nav:false,
        dots:false,
        loop: true,
        items:1,
        responsiveClass:true,
        responsive: {
          0: {
            items: 1,
            nav:false
          },
          600: {
            items: 2
          },
          1000: {
            items: 3,
            nav:false
          }
        }
      });