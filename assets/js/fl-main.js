$(document).ready(
    function(){
        $('.hero').owlCarousel({
            items: 1,
            animateOut: 'fadeOut',
            loop: true,
            margin: 0,
            
        })
        $('.hero').on('changed.owl.carousel', function(event) {
            new WOW().init();
        })
        $('.hero').on('initialize.owl.carousel', function(event) {
            new WOW().init();
        })
        new WOW().init();
        $('.SuggestionSliderOwlrow').owlCarousel({
          items: 3,
          animateOut: 'fadeOut',
          loop: true,
          margin: 30
      })
        
    }
);
$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('header').addClass('sticky');
    } else {
       $('header').removeClass('sticky');
    }
});
$(document).ready(function(){
    
      
    $('.accordion-list > li').click(function() {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active").find(".answer").slideUp();
      } else {
        $(".accordion-list > li.active .answer").slideUp();
        $(".accordion-list > li.active").removeClass("active");
        $(this).addClass("active").find(".answer").slideDown();
      }
      return false;
    });
    
  });
  $(document).ready(function(){
    $('.clickme a').click(function(){
        $('.clickme a').removeClass('activelink');
        $(this).addClass('activelink');
        var tagid = $(this).data('tag');
        $('.list').removeClass('active').addClass('hide');
        $('#'+tagid).addClass('active').removeClass('hide');
    });
    $('.MenuClick , .CloseBtn').click(function(){
        $('body').toggleClass("MenuOpen");
    });
    
    $('.group1').addClass("active");
    $('.group1Click').click(function(){
        $(".HorMenu1Row a").removeClass("active");
        $(this).addClass("active");
        $(".prdGridMc").removeClass("active");
        $('.group1').addClass("active");
    });
    $('.group2Click').click(function(){
        $(".HorMenu1Row a").removeClass("active");
        $(this).addClass("active");
        $(".prdGridMc").removeClass("active");
        $('.group2').addClass("active");
        
    });
    $('.group3Click').click(function(){
        $(".HorMenu1Row a").removeClass("active");
        $(this).addClass("active");
        $(".prdGridMc").removeClass("active");
        $('.group3').addClass("active");
    });
    $('.group4Click').click(function(){
        $(".HorMenu1Row a").removeClass("active");
        $(this).addClass("active");
        $(".prdGridMc").removeClass("active");
        $('.group4').addClass("active");
    });
});