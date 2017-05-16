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


// sass task
gulp.task('sass', function() {
	return gulp.src('bower_components/bootstrap-sass/assets/stylesheets/**/*.scss')
	.pipe(sass()) //Using gulp sass
	.pipe(gulp.dest('assets/css'))
	.pipe(browserSync.reload({
		stream: true
	}))
});

//watch task 
gulp.task('watch',['browserSync', 'sass'], function(){
	gulp.watch('bower_components/bootstrap-sass/assets/stylesheets/**/*.scss', ['sass']);
	// Other watchers
	gulp.watch('*.php', browserSync.reload);
	gulp.watch('css/*.css', browserSync.reload);
	gulp.watch('assets/css/*.css', browserSync.reload);
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





