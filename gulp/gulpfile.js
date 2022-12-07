/*global require, console*/

//dir variable for directory that has your assests folders
//you can cahnge dir varaible as you want
const gulp = require('gulp'),
    {src, dest, series, parallel, watch} = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass')(require('sass'));
    concat = require('gulp-concat'),
    terser = require('gulp-terser'),
    sourcemaps = require('gulp-sourcemaps'),
    imagemin = require('gulp-imagemin'),
    rtlcss = require('gulp-rtlcss'),
    rename = require("gulp-rename"),
    purgecss = require('gulp-purgecss'),
    dir = '../assets/',
    fonts = dir+'css/fonts/**',
    csspath = dir+'css/**/*.scss',
    jspath = dir+'js/*.js',
    libjspath = dir+'js/libraries/*.js',
    otherimgs = [dir+'media/**/*.*', '!'+dir+'media/**/*.jpg', '!'+dir+'media/**/*.png'],
    imgs = [dir+'**/*.jpg', dir+'**/*.png', '!'+dir+'images/src/**/*.*'],
    dist = '../dist/';
sass.compiler = require('node-sass');

//copy fonts folder
function copyfonts() {
    return src(fonts)
       .pipe(dest(dist+'css/fonts'))
}

function copyotherimages() {
    return src(otherimgs)
       .pipe(dest(dist+'media'))
}

//collect two copy tasks in on task
var copy = parallel(copyfonts, copyotherimages);

//js
function js() {
    return src(jspath)
        .pipe(sourcemaps.init())
        .pipe(concat('script.js'))
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(dist+'js'));
}

function wjs() {
    watch(jspath, js);
}

function jslibraries() {
    return src(libjspath)
        .pipe(sourcemaps.init())
        .pipe(concat('libs.js'))
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(dist+'js/libraries'));
}
/*end of js tasks*/



//css
function css() {
    return src(csspath)
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'expanded'}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(dist+'css'));
}

function cssdir() {
    return src([dist+'css/style.css'])
        .pipe(rtlcss())
        .pipe(rename({ suffix: '.rtl' }))
        .pipe(dest(dist+'css'));
}


function wcss() {
    watch(csspath, css);
}
/*end of css tasks*/



//minify images
function images() {
    return src(imgs)
        .pipe(imagemin())
        .pipe(dest(dist));
}


exports.default = series(parallel(copy, css, jslibraries, js, images), cssdir);
exports.css = css;
exports.cssdir = cssdir;
exports.jsl = jslibraries;

//watchers
exports.wcss = wcss;
exports.wjs = wjs;