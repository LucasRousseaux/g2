$(document).ready(function(){


  // $('.jsUpComment').css('display', 'none');

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
  $('#email').blur(function(){
    var mail = $('#email').val();
    var error = $('#mailError');
    if (isEmail(mail) !== true){
      error.append("El mail no es válido");
    }
    if (isEmail(mail)){
      error.empty();
    }
  });

  function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

  var q = 'localhost:8000/mail';
function getData(q){
  $.getJSON(q, function(data) {
    console.log(data);
     var arr = data;
     const addresses = arr.reduce((acc, val) => {
       return acc.concat(val)
     }, []);
   });
}

});
