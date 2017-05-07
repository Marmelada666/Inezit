var gulp = require('gulp');
//require sass plugin
var sass = require('gulp-sass');
//require browser-Sync
var browserSync = require('browser-sync').create();

// sass task
gulp.task('sass', function() {
	return gulp.src('bower_components/bootstrap-sass/assets/stylesheets/**/*.scss')
	.pipe(sass()) //Using gulp sass
	.pipe(gulp.dest('css'))
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

