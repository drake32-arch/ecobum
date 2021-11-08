jQuery(document).ready(function($) {
    $(".scroll").click(function(event){		
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });

    $("span.menu").click(function(){
        $(" ul.navig").slideToggle("slow" , function(){
        });
    });

    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
          auto: true,
          pager: true,
          nav: false,
          speed: 500,
          namespace: "callbacks",
          before: function () {
            $('.events').append("<li>before event fired.</li>");
          },
          after: function () {
            $('.events').append("<li>after event fired.</li>");
          }
        });
  
      });

      $(function () {
        // Slideshow 4
        $("#slider5").responsiveSlides({
          auto: true,
          pager: false,
          nav: true,
          speed: 500,
          namespace: "callbacks",
          before: function () {
            $('.events').append("<li>before event fired.</li>");
          },
          after: function () {
            $('.events').append("<li>after event fired.</li>");
          }
        });
  
      });

      /*мини фигня со слайд бара  <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>*/
        $(".swipebox").swipebox();

      $(function () {
	
        var filterList = {
        
            init: function () {
            
                // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
            });				
        
        },
        
        hoverEffect: function () {
        
            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                function () {
                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                    $(this).find('img').stop().animate({top: 0}, 500, 'easeOutQuad');				
                },
                function () {
                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeInQuad');
                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
                }		
            );				
        
        }
    
    };
    
    // Run the show!
        filterList.init();
        
    });	
});