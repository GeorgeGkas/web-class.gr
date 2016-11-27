// Bootstrap scss source
const bootstrapSass = { in : './node_modules/bootstrap-sass/' };

// Bootstrap fonts source
const fonts = { in : [bootstrapSass.in + 'assets/fonts/**/*'],
  out: 'public/fonts/'
};

const scss = { in : 'scss/**/*.scss',
  out: 'public/css/',
  watch: 'scss/**/*',
  sassOpts: {
    outputStyle: 'nested',
    precison: 3,
    errLogToConsole: true,
    includePaths: [bootstrapSass.in + 'assets/stylesheets']
  }
};
/***********************************************************************************/

// Load Requirements
const gulp = require('gulp');
const pug = require('gulp-pug');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

// copy bootstrap required fonts to public
gulp.task('fonts', function CopyFonts() {
  return gulp
    .src(fonts.in)
    .pipe(gulp.dest(fonts.out));
});

// compile scss
gulp.task('scss', ['fonts'], function CompileSass() {
  return gulp.src(scss.in)
    .pipe(sass(scss.sassOpts).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: [
        "Android 2.3",
        "Android >= 4",
        "Chrome >= 20",
        "Firefox >= 24",
        "Explorer >= 8",
        "iOS >= 6",
        "Opera >= 12",
        "Safari >= 6"
      ],
      cascade: false
    }))
    .pipe(gulp.dest(scss.out));
});


gulp.task('scss:watch', ['scss'], function WatchScss() {
  gulp.watch(scss.watch, ['scss']);
});

gulp.task('pug:views', function BuildHtml() {
  return gulp.src('etc/views/index.pug')
    .pipe(pug())
    .pipe(gulp.dest('etc/views'));
});
