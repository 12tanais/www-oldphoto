var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function () {
    gulp.src('./wp-content/themes/wp-bootstrap-starter-child/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('./wp-content/themes/wp-bootstrap-starter-child/'));
});

gulp.task('watch', function () {
    gulp.watch('./wp-content/themes/wp-bootstrap-starter-child/scss/*.scss', ['sass']);
});