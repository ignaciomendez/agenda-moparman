var gulp = require('gulp');

gulp.task('default', function () {
    gulp.start('sass','fonts','js-copy','js-compress','css-copy','css-minify');
});

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

gulp.task('js-copy', function() {
    gulp.src([
        './web/bundles/*/js/**/*.js',
        './web/assets/vendor/foundation/js/foundation.min.js',
        './web/assets/vendor/jquery/dist/jquery.min.js',
        './web/assets/vendor/requirejs/require.js'
    ])
        .pipe(gulp.dest('./web/assets/js'));
});

var uglify = require('gulp-uglify');

gulp.task('js-compress', function() {
    gulp.src(['./web/assets/js/*.js'])
        .pipe(uglify())
        .pipe(gulp.dest('./web/assets/dist/js/'))
});

gulp.task('css-copy', function() {
    gulp.src([
        './web/bundles/*/css/**/*.css'
    ])
        .pipe(gulp.dest('./web/assets/css'));
});

var minifyCSS = require('gulp-minify-css');

gulp.task('css-minify', function() {
    return gulp.src(['./web/assets/css/*.css','./web/bundles/*/css/**/*.css'])
        .pipe(minifyCSS({keepBreaks:true}))
        .pipe(gulp.dest('./web/assets/dist/css/'))
});