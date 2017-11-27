// apenas um comentário
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
        $(".header__logo--big").addClass("header__logo--small");
    } else {
        $(".header__logo--big").removeClass("header__logo--small");
    }
});
// Search
$('.search-button').click(function(){
  $(this).parent().toggleClass('open');
});
