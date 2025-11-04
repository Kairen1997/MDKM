<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Gambar - Majlis Daerah Kota Marudu</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .header {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        /* Keep government logos compact so the header isn't too tall */
        .government-logos {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .government-logos img {
            width: 60px;
            height: 60px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .logo-text h1 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-title {
            font-size: 2rem;
            color: #228B22;
            margin-bottom: 10px;
        }

        .page-subtitle {
            color: #555;
            margin-bottom: 30px;
        }

        .section {
            background: white;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .section-title {
            font-size: 1.4rem;
            color: #228B22;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 3px solid #FFD700;
        }

        .gallery-filters {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 16px;
            border: 2px solid #228B22;
            background: white;
            color: #228B22;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #228B22;
            color: white;
        }

        .gallery-controls {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            align-items: center;
            flex-wrap: wrap;
        }

        .gallery-controls button {
            padding: 8px 16px;
            background: #228B22;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
        }

        .gallery-controls button:hover {
            background: #32CD32;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            background: #eee;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            cursor: zoom-in;
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .gallery-item.hidden {
            display: none;
        }

        .gallery-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
            loading: lazy;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .caption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.6));
            color: #fff;
            padding: 8px 10px;
            font-size: 0.9rem;
        }

        /* Lightbox */
        .lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.85);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            padding: 20px;
        }

        .lightbox.open { display: flex; }

        .lightbox img {
            max-width: 95vw;
            max-height: 85vh;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #FFD700;
            color: #1a1a1a;
            border: 0;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            z-index: 2001;
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.9);
            color: #1a1a1a;
            border: none;
            padding: 15px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.2rem;
            z-index: 2001;
        }

        .lightbox-nav:hover {
            background: rgba(255,255,255,1);
        }

        .lightbox-nav.prev {
            left: 20px;
        }

        .lightbox-nav.next {
            right: 20px;
        }

        .lightbox-info {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 0.9rem;
            z-index: 2001;
        }

        .slideshow-mode .gallery-item {
            cursor: pointer;
        }

        .slideshow-container {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.95);
            z-index: 3000;
            align-items: center;
            justify-content: center;
        }

        .slideshow-container.active {
            display: flex;
        }

        .slideshow-image {
            max-width: 90vw;
            max-height: 90vh;
            object-fit: contain;
        }

        .footer {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 30px 0;
            margin-top: 40px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }
    </style>
    <meta name="description" content="Galeri gambar rasmi MDKM - Majlis Daerah Kota Marudu.">
    <meta name="robots" content="index, follow">
    <link rel="preload" as="image" href="images/Logo_MDKM_1-removebg-preview.png">
    <link rel="preload" as="image" href="images/Jata_Negara-removebg-preview.png">
    <link rel="preload" as="image" href="images/Jata_Wilayah_Sabah-removebg-preview.png">
    <link rel="preload" as="image" href="images/facebook-logo.png">
    <link rel="preload" as="image" href="images/youtube-play-logo-png-7.png">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lb = document.querySelector('.lightbox');
            const lbImg = document.getElementById('lightboxImg');
            const lbInfo = document.getElementById('lightboxInfo');
            const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
            let currentIndex = 0;
            let filteredItems = galleryItems;

            // Filter functionality
            document.querySelectorAll('.filter-btn[data-filter]').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.filter-btn[data-filter]').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    const filter = this.getAttribute('data-filter');
                    
                    galleryItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') === filter) {
                            item.classList.remove('hidden');
                        } else {
                            item.classList.add('hidden');
                        }
                    });
                    filteredItems = galleryItems.filter(item => !item.classList.contains('hidden'));
                });
            });

            // Lightbox navigation
            function openLightbox(index) {
                currentIndex = index;
                const item = filteredItems[currentIndex];
                const src = item.querySelector('img').getAttribute('data-full') || item.querySelector('img').src;
                const caption = item.querySelector('.caption')?.textContent || '';
                lbImg.src = src;
                lbInfo.textContent = `${currentIndex + 1} / ${filteredItems.length} - ${caption}`;
                lb.classList.add('open');
            }

            function closeLightbox() {
                lb.classList.remove('open');
                lbImg.src = '';
            }

            function lightboxPrev() {
                if (filteredItems.length === 0) return;
                currentIndex = (currentIndex - 1 + filteredItems.length) % filteredItems.length;
                openLightbox(currentIndex);
            }

            function lightboxNext() {
                if (filteredItems.length === 0) return;
                currentIndex = (currentIndex + 1) % filteredItems.length;
                openLightbox(currentIndex);
            }

            // Click to open lightbox
            filteredItems.forEach((item, index) => {
                item.addEventListener('click', function() {
                    openLightbox(index);
                });
            });

            // Lightbox controls
            lb.querySelector('.lightbox-close').addEventListener('click', closeLightbox);
            lb.querySelector('.prev').addEventListener('click', lightboxPrev);
            lb.querySelector('.next').addEventListener('click', lightboxNext);
            
            lb.addEventListener('click', function(e) {
                if (e.target.classList.contains('lightbox')) {
                    closeLightbox();
                }
            });

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (lb.classList.contains('open')) {
                    if (e.key === 'Escape') closeLightbox();
                    if (e.key === 'ArrowLeft') lightboxPrev();
                    if (e.key === 'ArrowRight') lightboxNext();
                }
            });

            // Slideshow functionality
            let slideshowInterval = null;
            let slideshowIndex = 0;

            window.startSlideshow = function() {
                if (filteredItems.length === 0) return;
                slideshowIndex = 0;
                const container = document.getElementById('slideshowContainer');
                const slideshowImg = document.getElementById('slideshowImg');
                const slideshowInfo = document.getElementById('slideshowInfo');
                
                function showSlide() {
                    const item = filteredItems[slideshowIndex];
                    const src = item.querySelector('img').getAttribute('data-full') || item.querySelector('img').src;
                    const caption = item.querySelector('.caption')?.textContent || '';
                    slideshowImg.src = src;
                    slideshowInfo.textContent = `${slideshowIndex + 1} / ${filteredItems.length} - ${caption}`;
                    container.classList.add('active');
                }

                showSlide();
                slideshowInterval = setInterval(() => {
                    slideshowIndex = (slideshowIndex + 1) % filteredItems.length;
                    showSlide();
                }, 3000);
            };

            window.stopSlideshow = function() {
                if (slideshowInterval) {
                    clearInterval(slideshowInterval);
                    slideshowInterval = null;
                }
                document.getElementById('slideshowContainer').classList.remove('active');
            };

            window.slideshowPrev = function() {
                slideshowIndex = (slideshowIndex - 1 + filteredItems.length) % filteredItems.length;
                const item = filteredItems[slideshowIndex];
                const src = item.querySelector('img').getAttribute('data-full') || item.querySelector('img').src;
                const caption = item.querySelector('.caption')?.textContent || '';
                document.getElementById('slideshowImg').src = src;
                document.getElementById('slideshowInfo').textContent = `${slideshowIndex + 1} / ${filteredItems.length} - ${caption}`;
            };

            window.slideshowNext = function() {
                slideshowIndex = (slideshowIndex + 1) % filteredItems.length;
                const item = filteredItems[slideshowIndex];
                const src = item.querySelector('img').getAttribute('data-full') || item.querySelector('img').src;
                const caption = item.querySelector('.caption')?.textContent || '';
                document.getElementById('slideshowImg').src = src;
                document.getElementById('slideshowInfo').textContent = `${slideshowIndex + 1} / ${filteredItems.length} - ${caption}`;
            };

            document.getElementById('slideshowBtn').addEventListener('click', startSlideshow);
        });
    </script>
    <style>
        .sr-only { position: absolute; left: -10000px; }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <header class="header">
        <div class="header-container">
		<?php include 'header-brand.php'; ?>
        </div>
    </header>

    <main class="main-content">
        <h2 class="page-title">Galeri Gambar</h2>
        <p class="page-subtitle">Koleksi gambar berkaitan aktiviti dan inisiatif MDKM.</p>

        <section class="section">
            <h3 class="section-title">Album Pilihan</h3>
            
            <div class="gallery-controls">
                <div class="gallery-filters">
                    <button class="filter-btn active" data-filter="all">Semua</button>
                    <button class="filter-btn" data-filter="logo">Logo</button>
                    <button class="filter-btn" data-filter="aktiviti">Aktiviti</button>
                    <button class="filter-btn" data-filter="acara">Acara</button>
                </div>
                <button id="slideshowBtn" class="filter-btn">🎬 Slideshow</button>
            </div>

            <div class="gallery-grid" id="galleryGrid">
                <div class="gallery-item" data-category="logo" title="Logo Rasmi MDKM">
                    <img src="images/Logo_MDKM_1-removebg-preview.png" data-full="images/Logo_MDKM_1-removebg-preview.png" alt="Logo Rasmi MDKM" loading="lazy">
                    <div class="caption">Logo Rasmi MDKM</div>
                </div>
                <div class="gallery-item" data-category="logo" title="Jata Negara Malaysia">
                    <img src="images/Jata_Negara-removebg-preview.png" data-full="images/Jata_Negara-removebg-preview.png" alt="Jata Negara Malaysia" loading="lazy">
                    <div class="caption">Jata Negara Malaysia</div>
                </div>
                <div class="gallery-item" data-category="logo" title="Jata Wilayah Sabah">
                    <img src="images/Jata_Wilayah_Sabah-removebg-preview.png" data-full="images/Jata_Wilayah_Sabah-removebg-preview.png" alt="Jata Wilayah Sabah" loading="lazy">
                    <div class="caption">Jata Wilayah Sabah</div>
                </div>
                <div class="gallery-item" data-category="aktiviti" title="Facebook MDKM">
                    <img src="images/facebook-logo.png" data-full="images/facebook-logo.png" alt="Facebook MDKM" loading="lazy">
                    <div class="caption">Facebook MDKM</div>
                </div>
                <div class="gallery-item" data-category="aktiviti" title="YouTube MDKM">
                    <img src="images/youtube-play-logo-png-7.png" data-full="images/youtube-play-logo-png-7.png" alt="YouTube MDKM" loading="lazy">
                    <div class="caption">YouTube MDKM</div>
                </div>
                <!-- Tambah gambar baharu dengan meletakkan fail ke direktori ini dan gandakan blok di atas -->
            </div>
        </section>
    </main>

    <div class="lightbox" role="dialog" aria-modal="true" aria-label="Paparan Gambar">
        <button class="lightbox-close" aria-label="Tutup">✕</button>
        <button class="lightbox-nav prev" aria-label="Gambar Sebelumnya">‹</button>
        <button class="lightbox-nav next" aria-label="Gambar Seterusnya">›</button>
        <img src="" alt="Paparan gambar besar" id="lightboxImg">
        <div class="lightbox-info" id="lightboxInfo"></div>
    </div>

    <div class="slideshow-container" id="slideshowContainer">
        <button class="lightbox-close" onclick="stopSlideshow()" aria-label="Tutup">✕</button>
        <button class="lightbox-nav prev" onclick="slideshowPrev()" aria-label="Sebelumnya">‹</button>
        <button class="lightbox-nav next" onclick="slideshowNext()" aria-label="Seterusnya">›</button>
        <img src="" alt="Slideshow" class="slideshow-image" id="slideshowImg">
        <div class="lightbox-info" id="slideshowInfo"></div>
    </div>

    <footer class="footer">
        <?php include 'footer.php'; ?>
    </footer>

    <script src="sidebar.js"></script>
</body>
</html>


