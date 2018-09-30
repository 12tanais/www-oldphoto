function dblphoto() {
    var z = document.getElementsByClassName('post-lg-block');
    var y;
    for(y = 0; y < z.length;y++){
        z[y].style.display = 'inherit';
    }
    var v = document.getElementsByClassName('post-sm-block');
    var k;
    for(k = 0; k < v.length;k++) {
        v[k].style.display = 'none';
    }
    var x = document.getElementsByClassName('view_blocks');
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].classList.remove('col-md-12', 'col-md-4');
        x[i].classList.add('col-md-6');
    }
}
function bigphoto() {
    var z = document.getElementsByClassName('post-sm-block');
    var y;
    for(y = 0; y < z.length;y++){
        z[y].style.display = 'inherit';
    }
    var r = document.getElementsByClassName('post-lg-block');
    var p;
    for(p = 0; p < r.length;p++){
        r[p].style.display = 'none';
    }
    var x = document.getElementsByClassName("view_blocks");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].classList.remove('col-md-6', 'col-md-4');
        x[i].classList.add('col-md-12');
    }
}
