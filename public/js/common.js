$(function(){
  $('body').fadeIn(200);
  $('header')
  .mouseover(function(e){
    $(this).addClass('active');
    $('main').addClass('active');
    $('footer').addClass('active');
  })
  .mouseout(function(e){
    $(this).removeClass('active');
    $('main').removeClass('active');
    $('footer').removeClass('active');
  })
  .on('touchend click', function(e){
    e.preventDefault();
    $(this).toggleClass('active');
    $('main').toggleClass('active');
    $('footer').toggleClass('active');
  });
  $('.grid').masonry({
    parcentPosition: true,
  });
});