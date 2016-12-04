window.Pushser = require('pusher-js');

import Echo from "laravel-echo"

window.echo = new Echo({
    broadcaster: 'pusher',
    key: '8b5d16b7cdad1cb0daf8'
});