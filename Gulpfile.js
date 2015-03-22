var gulp = require('gulp');

gulp.task('default', function () {});

var sass = sass = require('gulp-sass');

gulp.task('sass', function () {
    gulp.src('./web/assets/vendor/foundation/scss/foundation.scss')
        .pipe(sass({sourceComments: 'map'}))
        .pipe(gulp.dest('./web/assets/css/'));
});

var copy = copy = require('gulp-copy');

gulp.task('fonts', function () {
    return gulp.src('./web/assets/vendor/foundation-icon-fonts/*')
        .pipe(copy('./web/assets/fonts', {prefix: 7}));
});

gulp.task('js', function() {
    gulp.src([
        './web/bundles/*/js/**/*.js',
        './web/assets/vendor/foundation/*.js',
        './web/assets/vendor/jquery/dist/jquery.min.js',
        './web/assets/vendor/requirejs/require.js'
    ])
        .pipe(gulp.dest('./web/assets/js'));
});