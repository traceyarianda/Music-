<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Music Player</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a321985afd.js" crossorigin="anonymous"></script></head>
<body>

  <h2>A Brief Introduction</h2>
  <p>Hi guys, I did a project about music because it is my passion and that's what I love. I grow up listening to music and most of the 
  music I love is Rap music. Hope you guys enjoy my presentation.</p>

  <div class="song-info">
    <h1 id="song-title">Song Title</h1>
    <p id="artist-name">Artist Name</p>
  </div>

  <div class="player-controls">
    <button id="previous-btn"><i class="fas fa-backward"></i></button> <button id="play-pause-btn"><i class="fas fa-play"></i></button>
    <input type="range" id="volume-slider" min="0" max="1" step="0.1" value="1">
    <button id="next-btn"><i class="fas fa-forward"></i></button>
  </div>

  <div class="progress-bar">
    <div id="progress-bar-filled"></div>
  </div>

  <div>
     <img src="musicbackground.webp" alt="icon">
  </div>
  <audio id="audio"></audio> 
  <script src="script.js"></script>
 
  <footer>
    <p>&copy; 2024 Tracey's Music Player</p>
  </footer>
</body>
</html>