var Tasks = {
    gulp: require('gulp'),
    plugins: require('gulp-load-plugins')(),
    basePaths: {
        js: './app/assets/**/*.js',
        css: './app/assets/**/*.css',
        img: './app/assets/*'
    },
    getTask: function (path, task)
    {
        return require(`./${path}/gulp${task}.js`)(this.gulp, this.plugins);
    }
}

module.exports = Tasks;