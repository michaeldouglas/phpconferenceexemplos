navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.getUserMedia;

function getMedia(getAudio, getVideo) {

    navigator.getUserMedia({
        audio: getAudio,
        video: getVideo
    }, function (stream) {
        var video = document.querySelector('video');
        video.src = window.URL.createObjectURL(stream);
        video.play();
    }, function (err) {
        alert('Error :: ' + err);
    })
}