var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function () {
    gulp.src('./wp-content/themes/wp-bootstrap-starter-child/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('./wp-content/themes/wp-bootstrap-starter-child/'));
});

gulp.task('browser-sync', function () {
    var files = [
        './wp-content/themes/wp-bootstrap-starter-child/*.html',
        './wp-content/themes/wp-bootstrap-starter-child/*.css',
        './wp-content/themes/wp-bootstrap-starter-child/*.php',
        './wp-content/themes/wp-bootstrap-starter-child/scss/*.scss',
        './wp-content/themes/wp-bootstrap-starter-child/template-parts/*.php',
        './wp-content/themes/wp-bootstrap-starter-child/images/*.*',
        './wp-content/themes/wp-bootstrap-starter-child/js/*.js'
    ];

    browserSync.init(files, {
        server: {
            baseDir: './wp-content/themes/wp-bootstrap-starter-child'
        }
    });
});

gulp.task('watch', function () {
    gulp.watch('./wp-content/themes/wp-bootstrap-starter-child/scss/*.scss', ['sass']);
});