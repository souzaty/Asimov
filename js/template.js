$(window).scroll(function() {
var scroll = $(window).scrollTop();
 //console.log(scroll);
if (scroll >= 50) {
    //console.log('a');
    $(".header__logo--big").addClass("header__logo--small");
} else {
    //console.log('a');
    $(".header__logo--big").removeClass("header__logo--small");
}

// Search
$('.search-button').click(function(){
  $(this).parent().toggleClass('open');
});
