$(document).ready(function(){


  $('.jsUpComment').css('display', 'none');

  function showEdit(){

    var comment = $('.jsUpComment');
      for(var i = 0; i < comment.length; i++)
      {
        console.log(comment[i ]);
      }
    }
  if (window.innerWidth > 420) {
    $(window).bind('scroll', function() {
    var navHeight = 100; // custom nav height
    ($(window).scrollTop() > navHeight) ? $('#ventana_doc').addClass('goToTop') : $('#ventana_doc').removeClass('goToTop');
  });
  }

});
