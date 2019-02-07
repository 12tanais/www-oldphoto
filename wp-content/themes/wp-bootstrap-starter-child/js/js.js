
var divisor = document.getElementById("divisor"),
    slider = document.getElementById("slider"),
    slogan = document.getElementsByClassName("slogan");

function moveDivisor() {
    divisor.style.width = slider.value + "%";
    divisor.style.width = slogan.value + "%";
    $('.mouse-movement').fadeOut(100);
    $('.slogan').fadeOut(100);
}


var $window = jQuery(window);


jQuery('.navbar-toggler').click(function () {
    if ( $window.outerHeight(true) <= 420) {
        jQuery('.navbar-nav').css({'max-height': 208, 'overflow': 'auto', '-webkit-overflow-scrolling': 'touch'
        });
    } else {
        jQuery('.navbar-nav').css({'max-height': 380, 'overflow': 'inherit'
        });
    }
});
jQuery(document).ready(function(){
    var $mql = window.matchMedia("(orientation: portrait)");

    $mql.addListener(function (m) {
        if (m.matches) {
            jQuery('.navbar-nav').css({
                'max-height': 380, 'overflow': 'inherit'
            });
        }
        else {
            jQuery('.navbar-nav').css({
                'max-height': 208, 'overflow': 'auto', '-webkit-overflow-scrolling': 'touch'
            });
        }
    });

    $('.manyColumn .post-box').hover(function(){$(this).addClass('hover');},
        function(){$(this).removeClass('hover');});

    $('i').click(function(){
        $(this).toggleClass('fa-th  fa-th-list');
        $('.oneColumn').toggleClass('deliteClass  inerithClass');
        $('.manyColumn').toggleClass('inerithClass  deliteClass');
    });
});
