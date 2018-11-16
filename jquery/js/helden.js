$(document).ready( function() {
  // test
  // $('main').hide(3000).delay(1000).show(500);

  // muis events
  $('figure img').mouseenter( function() {
    $(this).fadeTo(600, 0.1);

  }).mouseleave(function(){
    $(this).fadeTo(600, 1);
  }).click( function(){
    $(this).next().toggle(700);
  });

  // footer
  $('footer').click( function(){
    $(this).animate( {
      top: '-=50px',
      opacity: '-=.2'
    }, 300)
  }).dblclick ( function(){
    $(this).animate( {
      top: '0',
      opacity: '1'
    }, 900)
  });
  //title
  $('h1').mouseenter( function(){
    $('section').fadeTo(600, 0.1);

  }).mouseleave(function(){
    $('section').fadeTo(600, 1);
  });
});
