var socket = io();

//Enviar a mensagem
$('form').submit(function(){
	socket.emit('chat message', $('#m').val());
    $('#m').val('');
    return false;
});

// Escuta o Socket
socket.on('chat message', function(msg){
   $('#messages').append($('<li>').text(msg));
});