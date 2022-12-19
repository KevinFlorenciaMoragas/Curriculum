(function (window, document) {
    var video = document.getElementsByTagName('video')[0],
        videoControls = document.getElementById('videoControls'),
        play = document.getElementById('play'),
        progressContainer = document.getElementById("progress"),
        progressHolder = document.getElementById("progress_box"),
        playProgressBar = document.getElementById("play_progress"),
        fullScreenToggleButton = document.getElementById("fullScreen"),
        isVideoFullScreen = false;
        
    var videoPlayer = {
        init: function () {
            var that = this
            document.documentElement.className = 'js'
            video.removeAttribute('controls')
            video.addEventListener('loadeddata', this.initializeControls, false)
            this.handleButtonPresses()
        },
        initializeControls: function () {
            videoPlayer.showHideControls()
        },
        showHideControls: function () {
            video.addEventListener('mouseover', function () {
                videoControls.style.opacity = 1
            }, false)
            videoControls.addEventListener('mouseover', function () {
                videoControls.style.opacity = 0
            }, false)
            video.addEventListener('mouseout', function () {
                videoControls.style.opacity = 0
            }, false)
            videoControls.addEventListener('mouseout', function () {
                videoControls.style.opacity = 0
            }, false)
        },
        handleButtonPresses: function () {
            video.addEventListener('click', this.playPause, false)
            play.addEventListener('click', this.playPause, false)
            video.addEventListener('play', function () {
                play.title = 'Pause'
                play.innerHTML = '<i class="bi bi-pause"></i>';
            }, false)

            video.addEventListener('pause', function () {
                play.title = 'Play'
                play.innerHTML = '&#x25BA;';
            }, false)
            video.addEventListener('ended',function(){
                this.currentTime = 0
                this.pause()
            },false)
        },
        playPause : function(){
            if (video.paused || video.ended){
                if(video.ended){
                    video.currentTime = 0
                }
                video.play()
            }else{
                video.pause()
            }
        },
        fullScreenOn : function(){
            isVideoFullScreen = true
            video.style.cssText = 'position: fixed; width:' + window.innerWidth
            video.className = 'fullsizeVideo'
            videoControls.className = "fullScreenControl"
            fullScreenToggleButton.className = "fs-active control"
            document.addEventListener('keydown',this.checkKeyCode,false)
        },
        fullScreenOff : function(){
            isVideoFullScreen = false
            video.style.position = 'static'
            video.className = ''
            fullScreenToggleButton.className = "control"
            videoControls.className = ''
        },
        checkKeyCode : function(e){
            e = e || window.event 
            if((e.keyCode || e.which) === 27) videoPlayer.fullScreenOff()
        }
        
        
    }
    play.addEventListener('click'.thisplayPause,false)
    video.addEventListener('play',function(){
        play.title = 'Pause'
        play.innerHTML = '<i class="bi bi-pause"></i>'
    },false)
    video.addEventListener('pause',function(){
        play.title = 'Play'
        play.innerHTML = '<i class="bi bi-play"></i>'
    },false)
    fullScreenToggleButton.addEventListener('click',function(){
        isVideoFullScreen ? that.fullScreenOff() : that.fullScreenOn()
    },true)
    document.addEventListener('keydown',this.checkKeyCode,false)
    videoPlayer.init
}
(this, document))