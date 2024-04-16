const {src, dest, watch, parallel} = require('gulp');

const browserSync = require('browser-sync').create();
const fileInclude = require('gulp-file-include');
const scss        = require('gulp-sass')(require('sass'));
const concat      = require('gulp-concat');

function browsersync(){
    browserSync.init({
        server: {
            baseDir: "app/"
        }
    });
}

function styles(){
    return src('app/scss/*.scss')
    .pipe(concat('styles.min.css'))
    .pipe(scss({outputStyle: 'compressed'}))
    .pipe(dest('app/css'))
    .pipe(browserSync.stream())
}

function includeHTML(){
    return src([
        'app/include/*.html',
        '!header.html',
        '!blockNews2.html',
        '!footer.html'
    ])
    .pipe(fileInclude({
        prefix: '@@',
        basepath: '@file'
    }))
    .pipe(dest('./app'));
}

function watching(){
    watch(['app/scss/*.scss'], styles)
    watch(['app/include/*.html'], includeHTML)
    watch(['app/*.html']).on('change', browserSync.reload);
}

exports.browsersync = browsersync;
exports.watching = watching;
exports.includeHTML = includeHTML;

exports.default = parallel(includeHTML, styles, browsersync, watching);

// @@include('./header.html')