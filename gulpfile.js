var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    autoprefixer = require('gulp-autoprefixer'),
    csso = require('gulp-csso'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');


var refreshBrowser = browserSync.reload,
    dist = "./www/",
    mainCSS = "./css/main.scss",
    pluginJS = [
        "./js/lib/jquery.min.js",
        "./js/plugin/prism.min.js",
        "./js/plugin/transition.js",
        "./js/plugin/zoom.min.js"
    ],
    mainJS = ["./js/main.js"];


gulp.task('mainCSS', function () {
    return gulp.src(mainCSS)
        .pipe(sass({
            errLogToConsole: true,
            outputStyle: 'expanded'
        }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest(dist))
        .pipe(csso())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(dist))
        .pipe(browserSync.stream());
});


gulp.task('pluginJS', function () {
    return gulp.src(pluginJS)
        .pipe(concat('plugin.js'))
        .pipe(gulp.dest(dist))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(dist));
});

gulp.task('mainJS', function () {
    return gulp.src(mainJS)
        .pipe(gulp.dest(dist))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(dist));
});


gulp.task("serve", ["mainCSS", "pluginJS", "mainJS"], function () {

    browserSync.init({
        notify: false,
        proxy: "dlogg/"
    });

    gulp.watch('./css/**/*.scss', ["mainCSS"]);
    gulp.watch('./js/plugin/**/*.js', ["pluginJS", refreshBrowser]);
    gulp.watch('./js/main.js', ["mainJS", refreshBrowser]);
    gulp.watch(dist + "/**/*.php").on("change", refreshBrowser);

});


gulp.task("default", ["serve"]);
gulp.task("export", ["mainCSS", "pluginJS", "mainJS"]);