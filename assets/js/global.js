// Mobile Menu
// -- Mobile Menu Open
$('.mobile-menu .fa-bars, .mobile-menu .fa-times').click(function(e){
  $('.site-header').toggleClass('menu-active');
  $('.mobile-menu .fa-bars, .mobile-menu .fa-times').toggleClass('hidden');
  $('.nav-header').slideToggle();
  e.preventDefault();
})

// -- Mobile Submenu Open
$('.site-header .nav-header .menu-item-has-children > a').click(function(e){
  $(this).siblings().addClass('active');
  $('.site-header .nav-header').animate({
    left: '-100%',
  }, 500, function(){});
  e.preventDefault();
});

// -- Mobile Submenu Close
$('.site-header .nav-header .sub-menu').prepend( '<li class="menu-item back"><a href="#">Back</a></li>' );
$('.site-header .nav-header .sub-menu .back > a').click(function(e){
  $('.site-header .nav-header').animate({
    left: '0',
  }, 500, function(){
    $('.site-header .nav-header .sub-menu.active').removeClass('active');
  });
  e.preventDefault();
});
