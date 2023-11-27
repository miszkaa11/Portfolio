$(document).ready(function(){
    console.log('ready');

    // AOS Lib
    AOS.init();

    // Offset
    $(".menu-item a").click(function () {
        $('.main-navigation').removeClass('toggled');
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 180
                }, 0);
                return false;
            }
        }
      });

    
});