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
        }

        .gallery-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
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
            const lbImg = lb.querySelector('img');
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.addEventListener('click', function() {
                    const src = this.querySelector('img').getAttribute('data-full') || this.querySelector('img').src;
                    lbImg.src = src;
                    lb.classList.add('open');
                });
            });
            lb.addEventListener('click', function(e) {
                if (e.target.classList.contains('lightbox') || e.target.classList.contains('lightbox-close')) {
                    lb.classList.remove('open');
                    lbImg.src = '';
                }
            });
            document.addEventListener('keydown', function(e){
                if (e.key === 'Escape') lb.classList.remove('open');
            });
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
            <div class="logo">
                <img src="images/Logo_MDKM_1-removebg-preview.png" alt="Logo MDKM" class="logo-img">
                <div class="logo-text">
                    <h1>Majlis Daerah Kota Marudu</h1>
                </div>
            </div>
        </div>
    </header>

    <main class="main-content">
        <h2 class="page-title">Galeri Gambar</h2>
        <p class="page-subtitle">Koleksi gambar berkaitan aktiviti dan inisiatif MDKM.</p>

        <section class="section">
            <h3 class="section-title">Album Pilihan</h3>
            <div class="gallery-grid">
                <div class="gallery-item" title="Logo Rasmi MDKM">
                    <img src="images/Logo_MDKM_1-removebg-preview.png" data-full="images/Logo_MDKM_1-removebg-preview.png" alt="Logo Rasmi MDKM">
                    <div class="caption">Logo Rasmi MDKM</div>
                </div>
                <div class="gallery-item" title="Jata Negara Malaysia">
                    <img src="images/Jata_Negara-removebg-preview.png" data-full="images/Jata_Negara-removebg-preview.png" alt="Jata Negara Malaysia">
                    <div class="caption">Jata Negara Malaysia</div>
                </div>
                <div class="gallery-item" title="Jata Wilayah Sabah">
                    <img src="images/Jata_Wilayah_Sabah-removebg-preview.png" data-full="images/Jata_Wilayah_Sabah-removebg-preview.png" alt="Jata Wilayah Sabah">
                    <div class="caption">Jata Wilayah Sabah</div>
                </div>
                <div class="gallery-item" title="Facebook MDKM">
                    <img src="images/facebook-logo.png" data-full="images/facebook-logo.png" alt="Facebook MDKM">
                    <div class="caption">Facebook MDKM</div>
                </div>
                <div class="gallery-item" title="YouTube MDKM">
                    <img src="images/youtube-play-logo-png-7.png" data-full="images/youtube-play-logo-png-7.png" alt="YouTube MDKM">
                    <div class="caption">YouTube MDKM</div>
                </div>
                <!-- Tambah gambar baharu dengan meletakkan fail ke direktori ini dan gandakan blok di atas -->
            </div>
        </section>
    </main>

    <div class="lightbox" role="dialog" aria-modal="true" aria-label="Paparan Gambar">
        <button class="lightbox-close" aria-label="Tutup">Tutup</button>
        <img src="" alt="Paparan gambar besar">
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; <?php echo date('Y'); ?> Majlis Daerah Kota Marudu. Hak Cipta Terpelihara.</p>
        </div>
    </footer>

    <script src="sidebar.js"></script>
</body>
</html>


