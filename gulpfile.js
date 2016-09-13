// --------------------------------------------------------------------
// Plugins
// --------------------------------------------------------------------

var gulp        = require("gulp"),
    sass        = require("gulp-sass"),
    concat      = require("gulp-concat"),
    watch       = require("gulp-watch"),
    plumber     = require("gulp-plumber"),
    cleanCSS    = require('gulp-clean-css'),
    rename      = require('gulp-rename'),
    minify_css  = require("gulp-minify-css"),
    uglify      = require("gulp-uglify"),
    sourcemaps  = require("gulp-sourcemaps"),
    prefix      = require("gulp-autoprefixer"),
    imagemin    = require("gulp-imagemin"),
    pngquant    = require("imagemin-pngquant");

// --------------------------------------------------------------------
// Settings
// --------------------------------------------------------------------

var src_sass = "sass/**/*.sass";
var src_css =  "css/*.css";

var dest_css = "css";


// --------------------------------------------------------------------
// Error Handler
// --------------------------------------------------------------------

var onError = function(err) {
    console.log(err);
    this.emit('end');
};


// --------------------------------------------------------------------
// Task: Sass
// --------------------------------------------------------------------

gulp.task('sass', function() {
    return gulp.src(src_sass)
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(sass())
        .pipe(gulp.dest(dest_css))
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write());
});

// --------------------------------------------------------------------
// Task: Minify CSS
// --------------------------------------------------------------------

gulp.task('minify_css', function() {
    return gulp.src([src_css, '!css/*.min.css'])
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('css'));
});

// --------------------------------------------------------------------
// Task: Image
// --------------------------------------------------------------------

gulp.task('img', function() {
    return gulp.src(src.img)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(output.img));

});


// --------------------------------------------------------------------
// Task: Watch
// --------------------------------------------------------------------

gulp.task('watch', function() {
    gulp.watch(src_sass, ['sass']);
    //gulp.watch(src_css, ['minify_css']);
});


// --------------------------------------------------------------------
// Task: Default
// --------------------------------------------------------------------

gulp.task('default', ['watch', 'sass']);

