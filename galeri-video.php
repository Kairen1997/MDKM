<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Video - Majlis Daerah Kota Marudu</title>
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

        .playlist-embed {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
            border-radius: 8px;
            overflow: hidden;
            background: #000;
        }

        .playlist-embed iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .video-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .video-embed {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
            background: #000;
        }

        .video-embed iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .video-meta {
            padding: 12px 14px;
        }

        .video-title {
            font-weight: 600;
            color: #228B22;
            font-size: 1rem;
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

        @media (max-width: 768px) {
            .logo-text h1 {
                font-size: 1.2rem;
            }
        }
    </style>
    <meta name="description" content="Galeri video rasmi MDKM - Majlis Daerah Kota Marudu.">
    <meta name="robots" content="index, follow">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <header class="header">
        <div class="header-container">
            <div class="logo">
                <img src="Logo_MDKM_1-removebg-preview.png" alt="Logo MDKM" class="logo-img">
                <div class="logo-text">
                    <h1>Majlis Daerah Kota Marudu</h1>
                </div>
            </div>
        </div>
    </header>

    <main class="main-content">
        <h2 class="page-title">Galeri Video</h2>
        <p class="page-subtitle">Koleksi video berkaitan aktiviti dan inisiatif MDKM.</p>

        <section class="section">
            <h3 class="section-title">Senarai Putar (Uploads) Rasmi</h3>
            <div class="playlist-embed">
                <iframe src="https://www.youtube.com/embed/videoseries?list=UUlqBIJh4U2HXOVfJqMoD2JA" title="MDKM YouTube Playlist" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
            </div>
        </section>

        <section class="section">
            <h3 class="section-title">Video Pilihan</h3>
            <div class="video-grid">
                <div class="video-card">
                    <div class="video-embed">
                        <iframe src="https://www.youtube.com/embed?list=UUlqBIJh4U2HXOVfJqMoD2JA" title="Video Pilihan 1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="video-meta">
                        <div class="video-title">Sorotan Aktiviti MDKM</div>
                    </div>
                </div>
                <div class="video-card">
                    <div class="video-embed">
                        <iframe src="https://www.youtube.com/embed?list=UUlqBIJh4U2HXOVfJqMoD2JA" title="Video Pilihan 2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="video-meta">
                        <div class="video-title">Program Komuniti</div>
                    </div>
                </div>
                <div class="video-card">
                    <div class="video-embed">
                        <iframe src="https://www.youtube.com/embed?list=UUlqBIJh4U2HXOVfJqMoD2JA" title="Video Pilihan 3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="video-meta">
                        <div class="video-title">Kempen Kebersihan</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; <?php echo date('Y'); ?> Majlis Daerah Kota Marudu. Hak Cipta Terpelihara.</p>
            <p><a href="https://www.youtube.com/channel/UClqBIJh4U2HXOVfJqMoD2JA" target="_blank" style="color:#FFD700; text-decoration:none;">Lihat saluran YouTube MDKM</a></p>
        </div>
    </footer>

    <script src="sidebar.js"></script>
</body>
</html>


