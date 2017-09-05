jQuery(document).ready(function($){
        //Force page to scroll to the top on load to make sure calulation is correct for scroll nav.
        $(this).scrollTop(0);
        //Initialises scroll-nav
        $('.post__article').scrollNav({
           showTopLink: false,
           showHeadline:false,
           scrollOffset: 50,
           fixedMargin: 60,
           sectionElem: 'section'
        });

      //Make sure the page is at the top when refreshed to avoid the miscalculation of the scroll nav.
      $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
      });
  });
