jQuery(document).ready(function($){
        //Force page to scroll to the top on load to make sure calulation is correct for scroll nav.
        $(this).scrollTop(0);
        //Initialises scroll-nav
        $('.post__article').scrollNav({
           showTopLink: false,
           showHeadline:true,
           headlineText:'Training',
           scrollOffset: 0,
           fixedMargin: 60,
           sectionElem: 'section'
        });

      //Make sure the page is at the top when refreshed to avoid the miscalculation of the scroll nav.
      $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
      });

      $('.scroll-nav__heading').on('click',function(){
        window.location.href = "https://training.aminasound.com"
      });

      if ($('#wpadminbar')[0]){
        if($(window).width()>767){
          $('.scroll-nav').css("top", "32px");
        }else{
          $('.scroll-nav').css("top", "46px");
        }

      }

      $('<input type="checkbox" id="scroll-nav__mobicon" /><label id="scroll-nav__mobicon-label" for="scroll-nav__mobicon">').insertBefore('.scroll-nav__wrapper');
  });
