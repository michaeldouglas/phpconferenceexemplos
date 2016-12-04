"use strict";
let app = require('express')();
let express = require('express');
let http = require('http').Server(app);
let io = require('socket.io')(http);
let mustacheExpress = require('mustache-express');

// middlewares
app.engine('mustache', mustacheExpress());
app.set('view engine', 'mustache');
app.set('views', __dirname + '/resources/views');
app.use(express.static(__dirname + '/resources/views'));
app.use('/assets', express.static(__dirname + '/assets'));

// Application Routes
var routes = require('./routes')
routes.set(app);

// Socket
io.on('connection', (socket) => {
  socket.on('chat message', (msg) => {
    io.emit('chat message', msg);
  });
});

const PORT = 3000;

http.listen(PORT, () => {
    console.log(`http://localhost:${PORT}`);
});