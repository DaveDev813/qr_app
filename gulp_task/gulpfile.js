
var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var postcss = require('gulp-postcss');

var scss_src = "../app/assets/scss";
var css_src = "../app/assets/css";

gulp.task("compile_scss", function(){
  return gulp.src(scss_src+'/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
        browsers: ['last 10 versions']
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(css_src));
});

gulp.task('taskwatch', function() {
  gulp.watch([ scss_src + '/*.scss' ], ['compile_scss']);
});