var gulp = require('gulp');
var ghPages = require('gulp-gh-pages');

gulp.task('docs', function () {
    return gulp.src('./build/docs/**/*')
        .pipe(ghPages());
});