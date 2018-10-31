// function dblphoto() {
//     var z = document.getElementsByClassName('post-lg-block');
//     var y;
//     for(y = 0; y < z.length;y++){
//         z[y].style.display = 'inherit';
//     }
//     var v = document.getElementsByClassName('post-sm-block');
//     var k;
//     for(k = 0; k < v.length;k++) {
//         v[k].style.display = 'none';
//     }
//     var x = document.getElementsByClassName('view_blocks');
//     var i;
//     for (i = 0; i < x.length; i++) {
//         x[i].classList.remove('col-md-12', 'col-md-4');
//         x[i].classList.add('col-md-6');
//     }
// }
// function bigphoto() {
//     var z = document.getElementsByClassName('post-sm-block');
//     var y;
//     for(y = 0; y < z.length;y++){
//         z[y].style.display = 'inherit';
//     }
//     var r = document.getElementsByClassName('post-lg-block');
//     var p;
//     for(p = 0; p < r.length;p++){
//         r[p].style.display = 'none';
//     }
//     var x = document.getElementsByClassName("view_blocks");
//     var i;
//     for (i = 0; i < x.length; i++) {
//         x[i].classList.remove('col-md-6', 'col-md-4');
//         x[i].classList.add('col-md-12');
//     }
// }


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
            // jQuery('.mouse-movement').css({'top': '91%'});
        }
        else {
            jQuery('.navbar-nav').css({
                'max-height': 208, 'overflow': 'auto', '-webkit-overflow-scrolling': 'touch'
            });
            // jQuery('.mouse-movement').css({
            //     'top': '89%'
            // });
        }
    });
});

