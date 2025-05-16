<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komplek Perumahan Elegan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div class="audio-player">
        <audio id="background-music" loop>
            <source src="assets/background-music.mp3" type="audio/mp3">
            Browser Anda tidak mendukung elemen audio.
        </audio>
        
        <div class="audio-controls">
            <button id="play-button" class="audio-control">
                <i class="fas fa-play play-icon"></i>
                <i class="fas fa-pause pause-icon"></i>
            </button>
            
            <div class="volume-container">
                <i class="fas fa-volume-up volume-icon"></i>
                <div class="volume-slider">
                    <input type="range" id="volume-control" min="0" max="100" value="70">
                </div>
            </div>
        </div>
        
        <div class="visualizer-container">
            <div class="visualizer">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="track-info">
                <div class="track-name">Musik Perumahan Elegan</div>
                <div class="track-time">
                    <span id="current-time">00:00</span> / 
                    <span id="duration">00:00</span>
                </div>
            </div>
        </div>
    </div>

    <header>
        <div class="container">
            <h1 class="title">KOMPLEK <span>FERDI</span></h1>
            <p class="subtitle">Hunian Modern untuk Keluarga Bahagia</p>
        </div>
    </header>

    <div class="marquee-container">
        <div class="marquee">
            <p>Selamat datang di website komplek perumahan kami • Promo spesial bulan ini • Unit terbatas • Fasilitas premium • Lokasi strategis • Lingkungan asri</p>
        </div>
    </div>

    <div class="container">
        <?php
            // Set zona waktu ke Asia/Jakarta (WIB)
            date_default_timezone_set('Asia/Jakarta');
            
            // Ambil waktu sekarang dengan format WIB
            $waktu = date("H:i") . " WIB";
            $tanggal = date("d F Y");
            
            // Sambutan berdasarkan waktu
            $jam = (int)date("H");
            if ($jam >= 5 && $jam < 12) {
                $sambutan = "Selamat Pagi";
            } elseif ($jam >= 12 && $jam < 15) {
                $sambutan = "Selamat Siang";
            } elseif ($jam >= 15 && $jam < 19) {
                $sambutan = "Selamat Sore";
            } else {
                $sambutan = "Selamat Malam";
            }
        ?>
        
        <div class="time-box">
            <h2><?php echo $sambutan; ?>, Pengunjung</h2>
            <p>Saat ini: <?php echo $waktu; ?> • <?php echo $tanggal; ?></p>
        </div>
        
        <section class="features">
            <h2 class="section-title">Fitur Unggulan</h2>
            
            <div class="cards">
                <div class="card">
                    <h3>Lokasi Strategis</h3>
                    <p>Dekat dengan pusat kota, sekolah, rumah sakit dan pusat perbelanjaan.</p>
                </div>
                
                <div class="card">
                    <h3>Fasilitas Lengkap</h3>
                    <p>Taman bermain, kolam renang, jogging track dan keamanan 24 jam.</p>
                </div>
                
                <div class="card">
                    <h3>Desain Modern</h3>
                    <p>Rumah dengan desain minimalis yang elegan dan fungsional.</p>
                </div>
            </div>
        </section>
        
        <section class="gallery">
            <h2 class="section-title">Galeri Perumahan</h2>
            
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Rumah Modern">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Area Taman">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Desain Eksterior">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Interior">
                </div>
            </div>
        </section>

        <!-- Bagian Video Perumahan -->
        <section class="video-section">
            <h2 class="section-title">Video Perumahan</h2>
            
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Xa-YJW1Hrig?si=CGkAXmD0P2lGGNpR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Komplek Perumahan Ferdi</p>
            <p>Jl. Ferdi Indah• Telp: 0899-7597-746 • Email: info@ferdi.com</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const audioPlayer = document.getElementById('background-music');
            const playButton = document.getElementById('play-button');
            const volumeControl = document.getElementById('volume-control');
            const currentTime = document.getElementById('current-time');
            const duration = document.getElementById('duration');
            const bars = document.querySelectorAll('.bar');
            
            // Tambahkan efek hover pada audio player untuk menunjukkan bahwa bisa diklik
            const audioPlayerElement = document.querySelector('.audio-player');
            audioPlayerElement.classList.add('clickable');
            
            // Tambahkan teks petunjuk
            const clickHint = document.createElement('div');
            clickHint.className = 'click-hint';
            clickHint.innerHTML = 'Klik untuk dengarkan musik <i class="fas fa-music"></i>';
            audioPlayerElement.appendChild(clickHint);
            
            // Set initial volume
            audioPlayer.volume = volumeControl.value / 100;
            
            // Play/pause button
            playButton.addEventListener('click', togglePlay);
            
            // Click anywhere on the player to play
            audioPlayerElement.addEventListener('click', function(e) {
                // Jangan trigger play jika yang diklik adalah slider volume
                if (e.target.id !== 'volume-control') {
                    togglePlay();
                }
            });
            
            function togglePlay() {
                if (audioPlayer.paused) {
                    audioPlayer.play();
                    playButton.classList.add('playing');
                    audioPlayerElement.classList.add('playing');
                    audioPlayerElement.classList.remove('clickable');
                    startVisualization();
                    
                    // Hapus hint setelah diklik
                    const hint = document.querySelector('.click-hint');
                    if (hint) {
                        hint.remove();
                    }
                } else {
                    audioPlayer.pause();
                    playButton.classList.remove('playing');
                    audioPlayerElement.classList.remove('playing');
                    stopVisualization();
                }
            }
            
            // Volume control
            volumeControl.addEventListener('input', function() {
                audioPlayer.volume = this.value / 100;
                updateVisualizerIntensity(this.value / 100);
            });
            
            // Update time
            audioPlayer.addEventListener('timeupdate', updateTime);
            audioPlayer.addEventListener('loadedmetadata', function() {
                duration.textContent = formatTime(audioPlayer.duration);
            });
            
            // Format time in MM:SS
            function formatTime(seconds) {
                if (isNaN(seconds)) return "00:00";
                const min = Math.floor(seconds / 60);
                const sec = Math.floor(seconds % 60);
                return `${min.toString().padStart(2, '0')}:${sec.toString().padStart(2, '0')}`;
            }
            
            // Update current time display
            function updateTime() {
                currentTime.textContent = formatTime(audioPlayer.currentTime);
            }
            
            // Visualizer animation
            let visualizerAnimation;
            function startVisualization() {
                if (visualizerAnimation) return;
                
                visualizerAnimation = setInterval(() => {
                    const intensity = audioPlayer.volume;
                    bars.forEach(bar => {
                        // Random height for each bar to simulate audio visualization
                        const height = Math.floor(20 + Math.random() * 60 * intensity);
                        bar.style.height = `${height}%`;
                    });
                }, 100);
            }
            
            function stopVisualization() {
                clearInterval(visualizerAnimation);
                visualizerAnimation = null;
                bars.forEach(bar => {
                    bar.style.height = '10%';
                });
            }
            
            function updateVisualizerIntensity(intensity) {
                if (!visualizerAnimation) return;
                // No need to do anything here as the intensity is used in startVisualization
            }
        });
    </script>
</body>
</html> 