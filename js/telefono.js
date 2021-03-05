
$(window).on("scroll", function () {
    if ($(window).scrollTop() >   100) {
        $("#header").addClass("ocultar");
   $("#carrusel").addClass("top-position" );
      $("img").removeClass("marca").addClass("marcapequeño");
    } else if($(window).scrollTop() < 100) {
        $("#header").removeClass("ocultar");
        $("#carrusel").removeClass("top-position" );
           $("img").removeClass("marcapequeño").addClass("marca");
    };
  });

 

