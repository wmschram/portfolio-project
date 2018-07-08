var gulp = require('gulp'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    uglifycss = require('gulp-uglifycss'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    watch = require('gulp-watch');

var env = "prod";

//JAVASCRIPT TASK: write one minified js file out of all js files
gulp.task('js', function () {
    return gulp.src(['assets/js/*.js'])
        .pipe(gulpif(env !== 'prod', sourcemaps.init()))
        .pipe(concat('app.js'))
        .pipe(gulpif(env === 'prod', uglify()))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('public/js'));
});

//CSS TASK: write one minified css file out all sass files
gulp.task('sass', function () {
    return gulp.src(['assets/sass/common.scss'])
        .pipe(sass())
        .pipe(gulpif(env !== 'prod', sourcemaps.init()))
        .pipe(concat('common.css'))
        .pipe(gulpif(env === 'prod', uglifycss()))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('public/css'));
});

//define executable tasks when running "gulp" command
gulp.task('default', ['js', 'sass']);

//define executable tasks when running "gulp watch" command
gulp.task('watch', function () {
    gulp.watch('assets/sass/**/*.scss', ['sass']);
    gulp.watch('assets/js/*.js', ['js']);
});