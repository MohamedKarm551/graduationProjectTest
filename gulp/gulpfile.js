/*global require, console*/

//dir variable for directory that has your assets folders
//you can change dir variable as you want
const {src, dest, series, parallel, watch} = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass')(require('sass')),
    concat = require('gulp-concat'),
    terser = require('gulp-terser'),
    sourcemaps = require('gulp-sourcemaps'),
    imagemin = require('gulp-imagemin'),
    rtl_css = require('gulp-rtlcss'),
    rename = require("gulp-rename"),
    source = '../assets',
    fonts = `${source}/css/fonts/**`,
    css_path = `${source}/css/**/*.scss`,
    js_path = `${source}/js/*.js`,
    lib_js_path = `${source}/js/libraries/*.js`,
    other_images_path = [`${source}/media/**/*.*`,`!${source}/media/**/*.jpg`,`!${source}/media/**/*.png`],
    images_path = [`${source}/**/*.jpg`,`${source}/**/*.png`,`!${source}/images/src/**/*.*`],
    dist = '../dist/';

//copy fonts folder
function copy__fonts() {
    return src(fonts)
        .pipe(dest(dist+'css/fonts'))
}

function copy__other__images() {
    return src(other_images_path)
        .pipe(dest(dist+'media'))
}

//collect two copy tasks in on task
let copy = parallel(copy__fonts, copy__other__images);

//js
function js() {
    return src(js_path)
        .pipe(sourcemaps.init())
        .pipe(concat('script.js'))
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(dist+'js'));
}

function js__libraries() {
    return src(lib_js_path)
        .pipe(sourcemaps.init())
        .pipe(concat('libs.js'))
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(dist+'js/libraries'));
}

function w__js(){watch(js_path,js)}
/*end of js tasks*/

//css
function css() {
    return src(css_path)
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(dist+'css'));
}

function css__dir() {
    return src([dist+'css/style.css'])
        .pipe(rtl_css())
        .pipe(rename({ suffix: '.rtl' }))
        .pipe(dest(dist+'css'));
}

function w__css(){watch(css_path,css)}
/*end of css tasks*/

//minify images
function images() {
    return src(images_path)
        .pipe(imagemin())
        .pipe(dest(dist));
}

function w__all(){w__css();w__js();}

exports.default = series(parallel(copy, css, js__libraries, js, images), css__dir);
exports.wall = w__all;