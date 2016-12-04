'use strict';
var gulp = require('gulp');
var tasks = require('./app/tasks/tasks');

// Tarefas variadas do nosso projeto
gulp.task('js', tasks.getTask('js', 'Js'));
gulp.task('img', tasks.getTask('img', 'Img'));
gulp.task('sass', tasks.getTask('sass', 'Sass'));


// Tarefa default
gulp.task('default', ['sass', 'js', 'img'], () => {
	gulp.watch(tasks.basePaths.sass, ['sass']);
    gulp.watch(tasks.basePaths.js, ['js']);
    gulp.watch(tasks.basePaths.img, ['img']);
});