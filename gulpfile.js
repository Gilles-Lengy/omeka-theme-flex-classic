var gulp          = require('gulp');
var browserSync   = require('browser-sync').create();
var $             = require('gulp-load-plugins')();
var autoprefixer  = require('autoprefixer');

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];
const sass_gulp = require('gulp-sass')(require('sass'));// Gilles Lengy Quick fix
function sass() {
  return gulp.src('scss/*.scss')
      .pipe(sass_gulp({// Gilles Lengy Quick fix // npm install sass gulp-sass --save-dev
        includePaths: sassPaths,
        outputStyle: 'compressed' // if css compressed **file size**
      })
          .on('error', sass_gulp.logError))// Gilles Lengy Quick fix
      .pipe($.postcss([
        autoprefixer()
      ]))
      .pipe(gulp.dest('css'))
      .pipe(browserSync.stream());
};

function serve() {
  browserSync.init({
    server: "./"
  });

  gulp.watch("scss/*.scss", sass);
  gulp.watch("*.html").on('change', browserSync.reload);
}

gulp.task('sass', sass);
gulp.task('serve', gulp.series('sass', serve));
gulp.task('default', gulp.series('sass', serve));
