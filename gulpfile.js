var gulp = require('gulp');
//require sass plugin
var sass = require('gulp-sass');
//require browser-Sync
var browserSync = require('browser-sync').create();
//js minify
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
//css nano
var cssnano = require('gulp-cssnano');
//postcss
var autoprefixer = require('gulp-autoprefixer');


var input = './assets/css/main.css';
var output = './assets/css';


// sass task
gulp.task('sass', function() {
	return gulp.src('assets/scss/**/*.scss')
	.pipe(sass()) //Using gulp sass
	.pipe(autoprefixer())
	.pipe(gulp.dest(output))
	.pipe(browserSync.reload({
		stream: true
	}))
});

//watch task 
gulp.task('watch',['browserSync', 'sass'], function(){
	gulp.watch('assets/scss/**/*.scss', ['sass']);
	// Other watchers
	gulp.watch('./*.php', browserSync.reload);
	gulp.watch('./template-parts/*.php', browserSync.reload);
	gulp.watch('assets/css/**/*.css', browserSync.reload);
});

//brorwser-sync 
gulp.task('browserSync', function(){
	browserSync.init({
		proxy: 'localhost/wordpress/'
	})
});

gulp.task('js', function() {
  return gulp.src(['./assets/js/inezit/**/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('inezit.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'))
});
gulp.task('css', function() {
	return gulp.src('./assets/css/main.css')
		.pipe(cssnano())
		.pipe(autoprefixer())
		.pipe(gulp.dest('./assets/css.min'))
});





