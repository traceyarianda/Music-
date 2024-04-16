const songs = [
  { title: "Golden Hour", artist: "JVKE", src: "music1.mp3" },
  { title: "Waiting For The Sun", artist: "Bars and Melody", src: "music2.mp3" },
  { title: "Beautiful Things", artist:"Benson Boone", src: "music3.mp3" },
  { title: " Mercy" , artist:"Shawn Mendes", src:"music4.mp3"},
  { title: "Treat You Better", artist:"Shawn Mendes", src:"music5.mp3" },
  // Add more songs following the same format
]
  
const audio = document.getElementById('audio');
const songTitle = document.getElementById('song-title');
const artistName = document.getElementById('artist-name');
const playPauseBtn = document.getElementById('play-pause-btn');
const volumeSlider = document.getElementById('volume-slider');
const progressBarFilled = document.getElementById('progress-bar-filled');
const previousBtn = document.getElementById('previous-btn');

let currentSongIndex = 0;
let isPlaying = false;

// Function to load a new song
function loadSong(song) {
  audio.src = song.src;
  songTitle.textContent = song.title;
  artistName.textContent = song.artist;
  progressBarFilled.style.width = 0; // Reset progress bar
}

// Function to play/pause audio
function playPause() {
  if (isPlaying) {
    audio.pause();
    playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
  } else {
    audio.play();
    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
  }
  isPlaying = !isPlaying;
}

// Function to update progress bar
function updateProgress() {
  const progress = (audio.currentTime / audio.duration) * 100;
  progressBarFilled.style.width = `${progress}%`;
}

// Function to handle next song
function nextSong() {
  currentSongIndex++;
  if (currentSongIndex === songs.length) currentSongIndex = 0; // Loop back to first song
  loadSong(songs[currentSongIndex]);
  playPause(); // Automatically play the next song
}

// Function to handle previous song
function previousSong() {
  currentSongIndex--;
  if (currentSongIndex < 0) currentSongIndex = songs.length - 1; // Loop back to last song
  loadSong(songs[currentSongIndex]);
  playPause(); // Automatically play the previous song
}

// Event listeners
playPauseBtn.addEventListener('click', playPause);
volumeSlider.addEventListener('change', () => {
  audio.volume = volumeSlider.value;
});
audio.addEventListener('timeupdate', updateProgress);
audio.addEventListener('ended', nextSong);
previousBtn.addEventListener('click', previousSong); // Add event listener for previous button

// Load the first song initially
loadSong(songs[currentSongIndex]);
