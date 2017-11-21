'use strict';


// Set gulp variables for reuse
var gulp          = require('gulp');
var sass          = require('gulp-sass');
var cleanCSS      = require('gulp-clean-css');
var autoprefixer  = require('gulp-autoprefixer');
var jshint        = require('gulp-jshint');
var minify        = require('gulp-minify');
var imagemin      = require('gulp-imagemin');
var pngquant      = require('imagemin-pngquant');
var jpegtran      = require('imagemin-jpegtran');



// Path input options
var paths = {
    scripts: ['./web/assets/scripts/**/*.js', '!./web/assets/scripts/**/*.min.js'],
    styles: './web/assets/styles/**/*.scss'
};

// CSS options
var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expanded'
};

// Autoprefixer options
var autoprefixerOptions = {
    browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};




// Sass, CSS Tasks
gulp.task('sass', function () {
    return gulp
        .src(paths.styles)
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(gulp.dest('./web/assets/styles'));
});



gulp.task('watch', function () {
    gulp.watch(paths.styles, ['sass']);
    gulp.watch(paths.styles, ['compress:images']);
});



gulp.task('watch:sass', function () {
    gulp.watch(paths.styles, ['sass']);
});



gulp.task('minify:css', function() {
    return gulp.src(paths.styles)
        .pipe(cleanCSS({compatibility: 'ie10'}))
        .pipe(gulp.dest('./web/assets/styles'));
});





// Javascript tasks
gulp.task('lint:js', function() {
    return gulp
        .src(paths.scripts)
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'));
});



gulp.task('compress:js', function() {
    gulp.src(paths.scripts)
        .pipe(minify({
            ext:{
                src:'.debug.js',
                min:'.min.js'
            },
            exclude: ['tasks'],
            ignoreFiles: ['*.combo.js', '*.debug.js', '*.min.js']
        }))
        .pipe(gulp.dest('./web/assets/scripts'))
});




// Image tasks
gulp.task('compress:images', function() {
    return gulp.src('./web/assets/images/src/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./web/assets/images/dist'));
});



// Default tasks to run with `gulp`
gulp.task('default', ['watch:sass', 'lint:js']);