var html5Lint = require('gulp-html5-lint');

gulp.task('html5-lint', function() {
    return gulp.src('./src/*.html')
        .pipe(html5Lint());
});
