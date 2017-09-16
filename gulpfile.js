var gulp = require('gulp');
var php = require('gulp-connect-php');
var fileinclude = require('gulp-file-include');

/**
 * Development
 */
 



// HTML_BUILD

gulp.task('html_build', function() {
    gulp.src(['app/assets/html_build/index.html'])
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe(gulp.dest('./app'),
	browserSync.reload({
      stream: true
    })
	);
	
	gulp.src(['app/assets/html_build/historique.html'])
	.pipe(fileinclude({
	  prefix: '@@',
	  basepath: '@file'
	}))
	.pipe(gulp.dest('./app'),
	browserSync.reload({
	  stream: true
	})
	);
	
	gulp.src(['app/assets/html_build/rooms.html'])
	.pipe(fileinclude({
	  prefix: '@@',
	  basepath: '@file'
	}))
	.pipe(gulp.dest('./app'),
	browserSync.reload({
	  stream: true
	})
	);
	
	gulp.src(['app/assets/html_build/reservation.html'])
	.pipe(fileinclude({
	  prefix: '@@',
	  basepath: '@file'
	}))
	.pipe(gulp.dest('./app'),
	browserSync.reload({
	  stream: true
	})
	);
	
	gulp.src(['app/assets/html_build/gallery-boxed.html'])
	.pipe(fileinclude({
	  prefix: '@@',
	  basepath: '@file'
	}))
	.pipe(gulp.dest('./app'),
	browserSync.reload({
	  stream: true
	})
	);
	
	gulp.src(['app/assets/html_build/contacts.html'])
	.pipe(fileinclude({
	  prefix: '@@',
	  basepath: '@file'
	}))
	.pipe(gulp.dest('./app'),
	browserSync.reload({
	  stream: true
	})
	);
	
	//PHP
	gulp.src(['app/assets/html_build/index.php'])
	.pipe(fileinclude({
	  prefix: '@@',
	  basepath: '@file'
	}))
	.pipe(gulp.dest('./app'),
	browserSync.reload({
	  stream: true
	})
	);
	
	gulp.src(['app/assets/html_build/reservation.php'])
	.pipe(fileinclude({
	  prefix: '@@',
	  basepath: '@file'
	}))
	.pipe(gulp.dest('./app'),
	browserSync.reload({
	  stream: true
	})
	);
	
	gulp.src(['app/assets/html_build/rooms.php'])
	.pipe(fileinclude({
	  prefix: '@@',
	  basepath: '@file'
	}))
	.pipe(gulp.dest('./app'),
	browserSync.reload({
	  stream: true
	})
	);
});

// LESS
var less = require('gulp-less');
var LessAutoprefix = require('less-plugin-autoprefix');
var autoprefix = new LessAutoprefix({ browsers: ['> 1%'] });
var combiner = require('stream-combiner2');

gulp.task('less', function() {
  var combined = combiner.obj([
    gulp.src('app/assets/less/*.less'),
    less({
      plugins: [autoprefix]
    }),
    gulp.dest('app/assets/css'),
    browserSync.reload({
      stream: true
    })
  ]);

  // catch errors
  combined.on('error', console.error.bind(console));

  return combined;
});


 //PHP server connect (test)
gulp.task('php', function() {
    php.server({base: './app', port: 8010, keepalive: true});
});

// Browser-sync
var browserSync = require('browser-sync').create();

gulp.task('browserSync', ['php'], function() {
  browserSync.init({
    proxy: '127.0.0.1:8010',
	port: 8080,
	open: true,
	notify: false
  })
});

// Watch
gulp.task('watch', ['browserSync', 'html_build', 'less'], function() {
	gulp.watch('app/assets/less/**/*.less', ['less']);
	
	gulp.watch('app/assets/html_build/**/*.*', ['html_build']);
	
	
	// Reloads the browser whenever HTML or JS files change
	gulp.watch('app/*.html', browserSync.reload); 
	gulp.watch('app/assets/js/**/*.js', browserSync.reload);
	// Other watchers
});


/**
 * Optimization
 */

// Del
var del = require('del');

gulp.task('clean:dist', function() {
  return del.sync('dist');
});

// Useref
var gulpIf = require('gulp-if');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var cache = require('gulp-cache');

gulp.task('useref', function() {
	return gulp.src('app/*.html')
		.pipe(useref())
	    .pipe(gulpIf('*.js', uglify()))
	    .pipe(gulpIf('*.css', cssnano()))
	    .pipe(gulp.dest('dist'))
});

// Imagemin
var imagemin = require('gulp-imagemin');

gulp.task('images', function() {
	return gulp.src('app/assets/img/**/*.+(png|jpg|gif|svg)')
	// Caching images that ran through imagemin
	.pipe(cache(imagemin()))
	.pipe(gulp.dest('dist/assets/img'))
});

// Other
gulp.task('fonts', function() {
  return gulp.src('app/assets/fonts/**/*')
  .pipe(gulp.dest('dist/assets/fonts'))
});

gulp.task('ico', function() {
  return gulp.src('app/assets/ico/**/*')
  .pipe(gulp.dest('dist/assets/ico'))
});

gulp.task('plugins', function() {
  return gulp.src('app/assets/plugins/**/*')
  .pipe(gulp.dest('dist/assets/plugins'))
});

gulp.task('bootstrap', function() {
  return gulp.src('app/assets/bootstrap/**/*')
  .pipe(gulp.dest('dist/assets/bootstrap'))
});

// Build
var runSequence = require('run-sequence');

gulp.task('build', function(callback) {
  runSequence('clean:dist', 
  	['html_build', 'less', 'useref', 'images', 'fonts', 'ico', 'plugins', 'bootstrap'], 
  	callback);
});

/**
 * Default
 */

gulp.task('default', function (callback) {
  runSequence(['html_build', 'less','browserSync', 'watch'],
    callback
  )
});