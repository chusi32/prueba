$(document).ready(function(){
   $window = $(window);
 
    $('div[data-type="background"]').each(function() {
            var $scroll = $(this);
            $(window).scroll(function() {
                var yPos = -($window.scrollTop() / $scroll.data('speed'));
                var coords = '50% ' + yPos + 'px';
                $scroll.css({ backgroundPosition: coords });
            });
    });


   //   $('a[href*=#]').click(function() {
   //   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
   //       && location.hostname == this.hostname) {
   //           var $target = $(this.hash);
   //           $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
   //           if ($target.length) {
   //               var targetOffset = $target.offset().top;
   //               $('html,body').animate({scrollTop: targetOffset}, 1000);
   //               return false;
   //          }
   //     }
   // });



 $('a').click(function(e){
	e.preventDefault();
	$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
});
 
});

