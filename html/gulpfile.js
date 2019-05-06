"use strict";

var gulp = require('gulp');
var path = require('path');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var open = require('gulp-open');
var sass = require('gulp-sass');

var minifyCSS = require('gulp-csso');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

var Paths = {
    HERE: './',
    DIST: 'dist/',
    CSS: './assets/css/',
    JS: './assets/js/',
    SCSS_TOOLKIT_SOURCES: './assets/scss/material-kit.scss',
    SCSS: './assets/scss/**/**'
};

gulp.task('compile-scss', function () {
    return gulp.src(Paths.SCSS_TOOLKIT_SOURCES)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write(Paths.HERE))
        .pipe(gulp.dest(Paths.CSS));
});

gulp.task('watch', function () {
    gulp.watch(Paths.SCSS, ['compile-scss']);
});

gulp.task('open', function () {
    gulp.src('index.html')
        .pipe(open());
});


//:::ASSETS
//::CSS
var assetCssBundle = [
    'assets/css/font-awesome.css',
    'assets/css/material-kit.css',
    'assets/demo/demo.css'
];
gulp.task('asset:minify:css', function () {
    return gulp.src(assetCssBundle)
        .pipe(concat('app.min.css'))
        .pipe(minifyCSS())
        .pipe(gulp.dest(Paths.CSS));
});
//::JS
var commonJSBundle = [
    'assets/js/core/jquery.min.js',
    'assets/js/core/popper.min.js',
    'assets/js/core/bootstrap-material-design.min.js',
    'assets/js/material-kit.js'
];
gulp.task('asset:minify:js', function () {
    return gulp.src(commonJSBundle)
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(Paths.JS));
});


gulp.task('default', ['open', 'watch', 'asset:minify:css', 'asset:minify:js']);