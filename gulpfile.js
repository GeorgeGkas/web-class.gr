// Load Requirements
const gulp = require('gulp');
const pug = require('gulp-pug');

gulp.task('pug:views', function BuildHtml() {
  return gulp.src('etc/views/index.pug')
    .pipe(pug())
    .pipe(gulp.dest('etc/views'));
});
