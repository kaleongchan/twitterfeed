var gulp = require('gulp');
var less = require('gulp-less');
var path = require('path');

var styles = {
    src: './web/css/**/*.less',
    dest: './web/css'
};


gulp.task('less', function () {
  return gulp.src(styles.src)
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest(styles.dest));
});

gulp.task('watch', function(){
    return gulp.watch(styles.src, ['less']);
});

gulp.task('default', ['less']);