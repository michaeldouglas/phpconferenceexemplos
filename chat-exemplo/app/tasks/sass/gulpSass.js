//Carrega as tarefas
module.exports = function (gulp, plugins) {
    return function () {
        gulp.src('./app/assets/sass/**/*.{sass,scss}')
            .pipe(plugins.sass({outputStyle: 'compressed'}).on('error', plugins.sass.logError))
            .pipe(gulp.dest('./assets/css'));
    };
};